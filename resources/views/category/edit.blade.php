@extends('layouts.adminLayout')

@section('content')
    <h1 class="font-bold capitalize text-4xl">Update Category</h1>
    <br>
    <br><br>
    <hr><br>
    <a href="/category/index"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Index Page</a>
    <br><br>
    <hr>
    <form action="/category/update" method="POST">
        @csrf
        <input type="hidden" name="id" value={{ $categoryedit['id'] }}>
        <div class="mb-6">
            <label for="category_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Category
                Name</label>
            <input type="text" id="category_name" name="category_name" value="{{ $categoryedit['category_name'] }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Category Name" required="">
        </div>
        <button type="submit"
            class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Update</button>
    </form>
@endsection
