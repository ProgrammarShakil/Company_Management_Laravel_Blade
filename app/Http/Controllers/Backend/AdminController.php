<?php

namespace App\Http\Controllers\Backend;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function AdminLoginForm(){
        return view('Backend.admin.admin_login');
    }

    public function AdminLogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password])) {
            return redirect('/admin');
        }else{
            Session()->flash('error', 'Invalid Email or Password');
            return redirect()->back();
        }
    }

    public function AdminLogout(){
        Auth::guard('admin')->logout();
        return redirect('/login/admin');
    }

    public function passwordView(){
         $admins = Admin::all();
         return view('Backend.pages.settings.profile_settings.pass_change', compact('admins'));
    }

    public function passwordUpdate(Request $request){
        $request->validate([
            'old_password' => 'required',
            'password' => 'required | confirmed | min:8'
        ]);

       $id = Auth::guard('admin')->user()->id;
       $admin = Admin::find($id);
       if(Hash::check($request->old_password,$admin->password)){
        $admin->password = Hash::make($request->password);
        $admin->save();
        session()->flash('success','Password Update Success');
        return back();
       }else{
           session()->flash('success','Your Password Wrong ');
           return back();
       }
    }

    public function profiledetails(){
        $id = Auth::guard('admin')->user()->id;
        $admin = Admin::find($id);
        return view('Backend.pages.settings.profile_settings.profiledetails',compact('admin'));
    }

    public function profiledetailsUpdate(Request $request){
        $request->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
            // 'image'=>'required|mimes:png,jpg,jpeg,gif'
        ]);
        $id = Auth::guard('admin')->user()->id;
        $admin = Admin::find($id);
        // if($request->hasFile('image')){
        //     $oldimage = $admin->profile_photo_path;
        //     if(File::exists($oldimage)){
        //         File::delete($oldimage);
        //     }
            // $image = $request->file('image');
            // $ext = $image->getClientOriginalExtension();
            // $path = 'backend/upload/';
            // $img_name = time().'.'.$ext;
            // $image->move($path,$img_name);
            // $admin->profile_photo_path = $path.$img_name;
        // }
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->save();
        return redirect()->back()->with('success','Profile updated success');
    }

}
