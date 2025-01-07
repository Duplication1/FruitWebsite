<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <title>Gamot's Fruit</title>
</head>
<body class="h-full font-sans">
 <x-main-nav />
 <div class="lg:h-[calc(100vh-128px)]  w-full p-4 bg-[url('/resources/images/fruit-bg.svg')] bg-cover bg-center bg-green-200">
        {{ $slot }}
    </div>
</body>
</html>