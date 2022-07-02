<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::select('users.*','roles.role_name')->join('roles','users.user_role_fid','=','roles.id')->get();
        // return $users;
        return view('user.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('user.create',['roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // return $request->input();

        $request->validate([
            'user_password' => 'required|min:6',
            'user_confirm_password' => 'required|min:6|same:user_password',
        ]);

        $newuser = new User;
        $newuser->fullname = $request->user_name;
        $newuser->email = $request->user_email;
        $newuser->password = Hash::make($request->user_password);
        $newuser->contact = $request->user_contact;
        $newuser->address = $request->user_address;
        $newuser->user_role_fid = $request->user_role;
        $status = $newuser->save();
        if($status){
            $request->session()->flash('message','created');
        }
        return redirect('/user/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::find($id)->select('users.*','roles.role_name')->join('roles','users.user_role_fid','=','roles.id')->get();
        // return $users;
        return view('user.details',['users'=>$users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $useredit = User::find($id)->first()->select('users.*','roles.role_name')->join('roles','users.user_role_fid','=','roles.id')->get();
        $roles = Role::all();
        // return $useredit;
        return view('/user/edit',['useredit'=>$useredit,'roles'=>$roles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'user_password' => 'required|min:6',
            'user_confirm_password' => 'required|min:6|same:user_password',
        ]);

        $useredit = User::find($request->user_id);
        $useredit->id = $request->user_id;
        $useredit->fullname = $request->user_name;
        $useredit->email = $request->user_email;
        $useredit->password = $request->user_password;
        $useredit->contact = $request->user_contact;
        $useredit->address = $request->user_address;
        $useredit->user_role_fid = $request->user_role;
        $status = $useredit->save();
        if($status){
            $request->session()->flash('message','updated');
        }
        return redirect('/user/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteUser = User::find($id);
        $status = $deleteUser->delete();
        if($status){
            session()->flash('message','deleted');
        }
        return view('/user/index');
    }
}
