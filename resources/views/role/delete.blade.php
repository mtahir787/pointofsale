@extends('layouts.adminLayout')

@section('content')
    <h1 class="font-bold capitalize text-4xl">Delete Role</h1>
    <br>
    <br><br>
    <hr><br>
    <a href="/role/index"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Index Page</a>
    <br><br>
    <hr>
    <br><br>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Role Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Operation
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        {{ $deleteitem['id'] }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $deleteitem['role_name'] }}
                    </td>
                    <td class="px-6 py-4">
                        <a href={{ '/role/destroy/' . $deleteitem['id'] }}
                            class="focus:outline-none text-white bg-red-700 ml-2 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
