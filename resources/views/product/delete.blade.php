@extends('layouts.adminLayout')

@section('content')
    <h1 class="font-bold capitalize text-4xl">Product Index</h1>
    <br>
    {{-- update alert message --}}

    <br>
    <hr><br>
    <a href="/product/index"
        class="text-white bg-green-700 mb-5 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
        Product Index</a>
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
                        Product Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Barcode
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Operations
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        {{ $deleteitem['id'] }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $deleteitem['product_name'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $deleteitem['product_description'] }}
                    </td>
                    <td class="px-6 py-4">
                        {!! DNS1D::getBarcodeHTML($deleteitem['product_barcode'], 'UPCA') !!}
                    </td>
                    @foreach ($categories as $category)
                        @if ($deleteitem['category_fid'] === $category['id'])
                            <td class="px-6 py-4">
                                {{ $category['category_name'] }}
                            </td>
                        @endif
                    @endforeach
                    <td class="px-1 py-4 grid grid-cols-3">
                        <a href={{ '/product/destroy/' . $deleteitem['id'] }}
                            class="focus:outline-none text-white bg-red-700 ml-1 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
