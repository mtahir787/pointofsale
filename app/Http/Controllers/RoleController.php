<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('/role/index',['roles'=> $roles]);
    }

    public function create()
    {
        return view('/role/create');
    }

    public function store(Request $request)
    {
        $role = new role;
        $role->role_name = $request->role_name;
        $status = $role->save();
        if($status){
            $request->session()->flash('message','created');
        }
        return redirect("/role/index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $roleitemdetail = Role::find($id);
        return view('/role/details',['roleitemdetail'=>$roleitemdetail]);       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        return view('/role/edit',['roleedit'=>$role]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $editrole = Role::find($request->id);
        $editrole->role_name = $request->role_name;
        $status = $editrole->save();
        if($status){
            $request->session()->flash('message','updated');
        }
        return redirect('/role/index');
    }

    public function trash($id) {
        $deleteitem = Role::find($id);
        return view('/role/delete',['deleteitem'=>$deleteitem]);
    }

    public function destroy($id)
    {
        $deleteitem = Role::find($id);
        $status = $deleteitem->delete();
        if($status) {
            session()->flash('message','deleted');
        }
        return redirect('/role/index');
    }
}
