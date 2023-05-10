<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('style/purchase-page/style.css') }}>
</head>

<body>
    <x-header />
        <div class="box">
            <img src="/img/main-img1.jpg">
            <h1>CAR PURCHASED SUCCESFULLY</h1>
            <h3>Your order number is: 00000001</h3>
            <button class="order">VIEW ORDER</button>
        </div>
    <x-footer />
</body>

</html>