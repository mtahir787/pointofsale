@extends('layouts.adminLayout')

@section('content')
    <h1 class="font-bold capitalize text-4xl">Create New User</h1>
    <br>
    <hr><br>
    <a href="/user/index"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Index Page</a>
    <br><br>
    <hr><br>


    <form action="/user/create" method="POST" class="mb-32">
        @csrf
        <div class="mb-6">
            <label for="user_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">User
                Name</label>
            <input type="text" id="user_name" value="{{ old('user_name') }}" name="user_name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter User Name" required="">
        </div>
        <div class="mb-6">
            <label for="user_email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                Email</label>
            <input type="text" id="user_email" value="{{ old('user_email') }}" name="user_email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter User Email" required="">
        </div>
        <div class="mb-6">
            <label for="user_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Password
            </label>
            <input type="password" id="user_password" value="{{ old('user_password') }}" name="user_password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Password" required="">
            <span class="font-bold text-red-700">
                @error('user_password')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="mb-6">
            <label for="user_confirm_password"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Confirm Password
            </label>
            <input type="password" id="user_confirm_password" value="{{ old('user_confirm_password') }}"
                name="user_confirm_password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Confirm Password" required="">
            <span class="font-bold text-red-700">
                @error('user_confirm_password')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="mb-6">
            <label for="user_contact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                User Contact</label>
            <input type="text" id="user_contact" value="{{ old('user_contact') }}" name="user_contact"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Contact Number" required="">
        </div>
        <div class="mb-6">
            <label for="user_address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                Address</label>
            <input type="text" id="user_address" value="{{ old('user_address') }}" name="user_address"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Product Purchase Price" required="">
        </div>
        <div class="mb-6">
            <label for="user_role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select an
                User Role</label>
            <select id="user_role" name="user_role"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected="">Choose an User Role</option>
                @foreach ($roles as $role)
                    @if (old('user_role') === $role['role_name'])
                        <option selected value="{{ $role['id'] }}">{{ $role['role_name'] }}</option>
                    @else
                        <option value="{{ $role['id'] }}">{{ $role['role_name'] }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <button type="submit"
            class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Create</button>
    </form>

    <script>
        let form = document.
    </script>
@endsection
