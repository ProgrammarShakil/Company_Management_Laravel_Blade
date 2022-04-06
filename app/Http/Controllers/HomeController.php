<?php

namespace App\Http\Controllers;

use App\Models\PayEmployee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public $user;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(function($request, $next){
            $this->user = Auth::user();
            return $next($request);
        }); // admin unauthorized 

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Frontend.dashboard.index');
    }

    public function passwordView(){
        return view('Frontend.dashboard.dashboard_pages.user_profile_settings.index');
    }

    public function passwordUpdate(Request $request){

        $request->validate([
            'old_password' => 'required',
            'password' => 'required | confirmed | min:8'
        ]);

       $id = Auth::guard('web')->user()->id;
       $admin = User::find($id);
       if(Hash::check($request->old_password,$admin->password)){
        $admin->password = Hash::make($request->password);
        $admin->save();
        session()->flash('success','Password Update Success');
        return back();
       }else{
           session()->flash('success','Your Was Password Wrong ');
           return back();
       }
    }  


    public function profiledetails(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('Frontend.dashboard.dashboard_pages.user_profile_settings.profile_details',compact('user'));
     }

     public function profiledetailsUpdate(Request $request){
        $request->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
            // 'image'=>'required|mimes:png,jpg,jpeg,gif'
            'image'=>'nullable'
        ]);
        $id = Auth::user()->id;
        $user = User::find($id);
        if($request->hasFile('image')){
            $oldimage = $user->profile_photo_path;
            if(File::exists($oldimage)){
                File::delete($oldimage);
            }
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $path = 'backend/upload/';
            $img_name = time().'.'.$ext;
            $image->move($path,$img_name);
            $user->profile_photo_path = $path.$img_name;
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->back()->with('success','Profile updated success');
    }

    public function salaryView(){
        $id = Auth::user()->id;
        $data = PayEmployee::with('users')->where('user_id', $id)->get();

        return view('Frontend.dashboard.dashboard_pages.salary_history.index',compact('data') );
    }
}
