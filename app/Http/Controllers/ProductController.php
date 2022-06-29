<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $barcode;
    public function __construct()
    {
        $this->barcode = 4445460000;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('/product/index', ['products' => $products, 'categories' => $categories]);

    }

    public function create()
    {
        $categories = Category::all();
        return view('/product/create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $product = new Product;
        $lastproduct = Product::get()->last();
        $product->product_name = $request->product_name;
        $product->product_description = $request->product_description;
        $product->product_quantity = $request->product_quantity;
        $product->sale_price = $request->product_saleprice;
        $product->purchase_price = $request->product_purchaseprice;
        $product->product_barcode = $lastproduct['product_barcode'] + 1;
        $product->category_fid = $request->product_category;
        $status = $product->save();
        if ($status) {
            $request->session()->flash('message', 'created');
        }
        return redirect('/product/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productitemdetail = Product::find($id);
        $categories = Category::all();
        return view('/product/details', ['productitemdetail' => $productitemdetail,'catagories'=>$categories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('/product/edit', ['product' => $product, 'categories' => $categories]);
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
        $editproduct = Product::find($request->product_id);
        $editproduct->id = $request->product_id;
        $editproduct->product_name = $request->product_name;
        $editproduct->product_description = $request->product_description;
        $editproduct->product_quantity = $request->product_quantity;
        $editproduct->sale_price = $request->product_saleprice;
        $editproduct->purchase_price = $request->product_purchaseprice;
        $editproduct->product_barcode = $request->product_barcode;
        $editproduct->category_fid = $request->product_category;
        $status = $editproduct->save();
        if ($status) {
            $request->session()->flash('message', 'updated');
        }
        return redirect('/product/index');
    }

    public function trash($id)
    {
        $deleteitem = Product::find($id);
        $categories = Category::all();
        return view('/product/delete', ['deleteitem' => $deleteitem, 'categories' => $categories]);
    }

    public function destroy($id)
    {
        $deleteitem = Product::find($id);
        $status = $deleteitem->delete();
        if ($status) {
            session()->flash('message', 'deleted');
        }
        return redirect('/product/index');
    }
}
