<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>POS Admin Panel</title>
</head>

<body>
    <div class="flex">
        <x-adminnavbar />
        <main class="flex-1  p-4 px-10">
            @yield('content')
        </main>
    </div>
</body>

</html>
