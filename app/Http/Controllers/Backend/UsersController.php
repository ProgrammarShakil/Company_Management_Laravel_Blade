<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('Backend.pages.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Backend.pages.users.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Validation Data
        $request->validate([
            'name' => 'required | max:50',
            'email' => 'required | max:100 | email | unique:users',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'min:6'
        ]);

        // Create New User
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password) ;
        $user->save() ;

        
        if ($request->roles) {
            $user->assignRole($request->roles);
        }

       session()->flash('success','User has been created !! ');
       return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('Backend.pages.users.edit', compact('user') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::find($id);

        // Validation Data
        $request->validate([
            'name' => 'required | max:50',
            'email' => 'required | max:100 | email | unique:users,email,'.$user->id,
            'password' => 'nullable | confirmed | min:6'
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        if ($user->password) {
            $user->password = Hash::make($request->password) ;
        }
        $user->save() ;

        $user->roles()->detach();

        if ($request->roles) {
            $user->assignRole($request->roles);
        }

       session()->flash('success','User has been Updated !! ');
       return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user =  User::find($id);

        if (!is_null($user)) {
            $user->delete();
        }
        session()->flash('success','User has been Deleted !! ');
        return back();
    }
}
