<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('public/css/style.css')
    <title>Tailwind Flowbite</title>
</head>

<body>
    <x-navbar></x-navbar>
    <div class="container mx-auto">
        @if (session()->has('success'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                role="alert">
                <span class="font-medium">
                    {{ session()->get('success') }}
                </span>
            </div>
        @endif
    </div>
    {{ $slot }}
    @vite('resources/js/app.js')
</body>

</html>
