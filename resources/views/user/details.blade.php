@extends('layouts.adminLayout')

@section('content')
    <h1 class="font-bold capitalize text-4xl">User Detail</h1>
    <br>
    {{-- update alert message --}}

    <br>
    <hr><br>
    <a href="/user/index"
        class="text-white bg-green-700 mb-5 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
        User Index</a>
    <br><br>
    <hr>
    <br>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-xs text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        User Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Contact
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Address
                    </th>
                    <th scope="col" class="px-6 py-3">
                        User Role
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Operations
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            {{ $user['id'] }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $user['fullname'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user['email'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user['contact'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user['address'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user['role_name'] }}
                        </td>
                        <td class="px-1 py-4 grid grid-cols-3">
                            <a href={{ '/user/details/' . $user['id'] }}
                                class="focus:outline-none text-white bg-green-700 ml-1 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-900">Detail</a>
                            <a href={{ '/user/edit/' . $user['id'] }}
                                class="focus:outline-none text-white bg-blue-700 ml-1 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">Edit</a>
                            <a href={{ '/user/trash/' . $user['id'] }}
                                class="focus:outline-none text-white bg-red-700 ml-1 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
