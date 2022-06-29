@extends('layouts.adminLayout')

@section('content')
    <h1 class="font-bold capitalize text-4xl">Create New Product</h1>
    <br>
    <hr><br>
    <a href="/product/index"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Index Page</a>
    <br><br>
    <hr><br>

    <form action="/product/update" method="POST" class="mb-32">
        @csrf
        <div class="mb-6 hidden">
            <label for="product_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Product
                ID</label>
            <input type="text" id="product_id" name="product_id" value="{{ $product['id'] }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Product Name" required="">
        </div>
        <div class="mb-6">
            <label for="product_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Product
                Name</label>
            <input type="text" id="product_name" name="product_name" value="{{ $product['product_name'] }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Product Name" required="">
        </div>
        <div class="mb-6">
            <label for="product_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Product
                Description</label>
            <input type="text" id="product_description" name="product_description"
                value="{{ $product['product_description'] }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Product Description" required="">
        </div>
        <div class="mb-6">
            <label for="product_quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Product
                Quantity</label>
            <input type="number" id="product_quantity" name="product_quantity" value="{{ $product['product_quantity'] }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Product Quantity" required="">
        </div>
        <div class="mb-6">
            <label for="product_saleprice" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Product
                Sale Price</label>
            <input type="number" id="product_saleprice" name="product_saleprice" value="{{ $product['sale_price'] }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Product Sale Price" required="">
        </div>
        <div class="mb-6">
            <label for="product_purchaseprice"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Product
                Purchase Price</label>
            <input type="number" id="product_purchaseprice" name="product_purchaseprice"
                value="{{ $product['purchase_price'] }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Product Purchase Price" required="">
        </div>
        <div class="mb-6 hidden">
            <label for="product_barcode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Product
                Barcode</label>
            <input type="number" id="product_barcode" name="product_barcode" value="{{ $product['product_barcode'] }}"
                value="{{ $product['purchase_price'] }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Product Purchase Price" required="">
        </div>
        <label for="product_category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select Product
            Category</label>
        <select id="product_category" name="product_category"
            class="bg-gray-50 border border-gray-300 mb-8 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option>Choose product category</option>
            @foreach ($categories as $category)
                @if ($category['id'] === $product['category_fid'])
                    <option selected value="{{ $category['id'] }}">{{ $category['category_name'] }}</option>
                @else
                    <option value="{{ $category['id'] }}">{{ $category['category_name'] }}</option>
                @endif
            @endforeach
        </select>

        <button type="submit"
            class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Update</button>
    </form>
@endsection
