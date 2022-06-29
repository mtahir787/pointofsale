<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('/category/index',['categories'=> $categories]);
    }

    public function create()
    {
        return view('/category/create');
    }

    public function store(Request $request)
    {
        $category = new Category;
        $category->category_name = $request->category_name;
        $status = $category->save();
        if($status){
            $request->session()->flash('message','created');
        }
        return redirect("/category/index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoryitemdetail = Category::find($id);
        return view('/category/details',['categoryitemdetail'=>$categoryitemdetail]);       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('/category/edit',['categoryedit'=>$category]);
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
        $editCategory = Category::find($request->id);
        $editCategory->category_name = $request->category_name;
        $status = $editCategory->save();
        if($status){
            $request->session()->flash('message','updated');
        }
        return redirect('/category/index');
    }

    public function trash($id) {
        $deleteitem = Category::find($id);
        return view('/category/delete',['deleteitem'=>$deleteitem]);
    }

    public function destroy($id)
    {
        $deleteitem = Category::find($id);
        $status = $deleteitem->delete();
        if($status) {
            session()->flash('message','deleted');
        }
        return redirect('/category/index');
    }
}
