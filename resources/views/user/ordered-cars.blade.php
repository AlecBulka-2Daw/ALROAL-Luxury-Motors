<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('style/user/ordered.css') }}>
</head>

<body>
    <x-header />
    <div class="menu">
        <div class="dashboard">
            <a href="{{ route('user-dashboard') }}" aria-label="Dashboard">Dashboard</a>
        </div>
        <div class="saved-cars">
            <a href="{{ route('user-saved-cars') }}" aria-label="Saved Cars">Saved Cars</a>
        </div>
        <div class="ordered-cars">
            <a href="#" aria-label="Ordered Cars">Ordered Cars</a>
        </div>
        <div class="logout">
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>
    <h1>Ordered Cars</h1>
                <div class="container">
                    <img src="/img/main-img1.jpg" alt="">
                    <div class="text">
                        <div class="seccion">
                            <div class="left-seccion">
                                <h3>Lamborghini STO</h3>
                                <p>Order Number: LS098884930</p>
                                <h3>€250,000.00</h3>
                                <p>09/05/2023</p>
                            </div>
                            <div class="right-seccion">
                                <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink" style="max-width: 100%;height: auto;" width="1023" height="1023" viewBox="0 0 1023 1023">
                                    <defs><mask id="qrmask"><g fill="#ffffff"><g>
                                    <g transform="translate(310,62) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(341,62) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(434,62) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(527,62) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(589,62) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(620,62) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(310,93) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(341,93) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(372,93) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(403,93) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(496,93) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(527,93) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(589,93) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(310,124) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(434,124) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(465,124) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(496,124) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(527,124) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(620,124) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(682,124) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(372,155) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(403,155) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(465,155) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(527,155) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(558,155) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(589,155) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(341,186) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(372,186) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(403,186) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(465,186) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(496,186) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(589,186) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(620,186) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(651,186) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(310,217) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(372,217) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(465,217) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(496,217) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(558,217) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(589,217) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(310,248) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(372,248) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(434,248) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(496,248) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(558,248) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(620,248) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(682,248) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(310,279) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(372,279) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(465,279) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(558,279) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(589,279) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(620,279) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(651,279) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(124,310) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(155,310) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(186,310) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(248,310) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(310,310) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(341,310) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(372,310) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(403,310) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(465,310) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(682,310) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(713,310) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(744,310) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(775,310) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(868,310) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(899,310) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(930,310) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(62,341) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(310,341) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(434,341) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(496,341) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(558,341) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(620,341) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(651,341) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(682,341) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(744,341) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(775,341) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(806,341) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(837,341) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(930,341) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(62,372) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(93,372) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(124,372) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(217,372) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(248,372) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(310,372) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(341,372) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(372,372) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(558,372) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(589,372) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(620,372) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(682,372) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(713,372) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(744,372) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(775,372) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(155,403) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(186,403) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(341,403) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(372,403) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(403,403) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(465,403) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(527,403) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(558,403) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(589,403) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(620,403) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(651,403) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(713,403) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(744,403) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(775,403) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(837,403) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(899,403) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(93,434) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(124,434) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(155,434) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(186,434) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(217,434) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(248,434) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(496,434) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(527,434) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(620,434) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(682,434) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(713,434) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(775,434) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(868,434) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(899,434) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(930,434) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(93,465) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(124,465) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(155,465) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(217,465) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(279,465) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(372,465) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(465,465) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(496,465) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(527,465) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(620,465) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(651,465) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(682,465) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(713,465) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(744,465) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(806,465) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(837,465) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(899,465) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(930,465) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(93,496) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(217,496) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(248,496) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(279,496) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(372,496) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(403,496) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(434,496) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(465,496) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(558,496) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(620,496) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(682,496) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(713,496) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(775,496) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(62,527) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(93,527) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(124,527) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(310,527) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(465,527) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(527,527) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(558,527) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(806,527) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(837,527) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(930,527) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(62,558) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(155,558) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(186,558) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(217,558) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(248,558) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(372,558) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(434,558) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(837,558) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(868,558) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(930,558) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(62,589) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(186,589) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(279,589) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(434,589) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(527,589) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(558,589) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(589,589) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(651,589) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(682,589) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(713,589) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(775,589) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(806,589) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(837,589) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(899,589) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(930,589) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(62,620) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(186,620) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(217,620) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(248,620) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(279,620) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(310,620) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(372,620) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(403,620) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(589,620) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(682,620) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(744,620) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(775,620) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(837,620) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(62,651) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(155,651) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(186,651) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(217,651) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(341,651) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(527,651) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(589,651) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(620,651) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(651,651) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(682,651) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(744,651) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(775,651) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(837,651) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(930,651) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(62,682) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(124,682) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(155,682) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(186,682) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(217,682) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(248,682) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(279,682) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(372,682) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(434,682) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(465,682) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(589,682) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(682,682) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(713,682) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(744,682) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(775,682) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(806,682) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(837,682) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(868,682) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(310,713) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(341,713) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(403,713) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(620,713) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(651,713) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(682,713) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(806,713) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(837,713) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(899,713) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(930,713) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(341,744) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(434,744) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(496,744) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(527,744) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(620,744) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(651,744) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(682,744) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(744,744) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(806,744) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(341,775) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(403,775) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(558,775) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(589,775) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(620,775) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(651,775) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(682,775) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(806,775) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(837,775) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(930,775) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(310,806) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(341,806) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(372,806) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(434,806) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(589,806) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(620,806) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(682,806) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(713,806) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(744,806) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(775,806) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(806,806) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(837,806) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(868,806) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(899,806) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(310,837) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(403,837) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(434,837) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(558,837) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(620,837) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(651,837) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(682,837) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(713,837) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(775,837) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(310,868) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(341,868) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(372,868) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(434,868) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(465,868) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(527,868) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(558,868) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(620,868) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(651,868) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(682,868) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(713,868) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(744,868) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(775,868) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(806,868) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(837,868) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(868,868) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(899,868) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(372,899) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(496,899) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(558,899) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(589,899) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(620,899) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(682,899) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(806,899) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(899,899) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(341,930) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(372,930) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(465,930) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(496,930) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(620,930) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(651,930) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(744,930) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(806,930) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    <g transform="translate(868,930) scale(5.3216666666667)"><rect width="6" height="6"/></g>
                                    </g></g></mask></defs>
                                    <rect width="1023" height="1023" fill="#ffffff" x="0" y="0" />
                                    <rect x="0" y="0" width="1023" height="1023" mask="url(#qrmask)" fill="#000000" />
                                    <g><g transform="translate(62,62)"  fill="#000000"><g transform="scale(15.5)"><path d="M0,0v14h14V0H0z M12,12H2V2h10V12z"/></g></g>
                                    <g transform="translate(124,124)"  fill="#000000"><g transform="scale(15.5)"><rect width="6" height="6"/></g></g>
                                    <g transform="translate(744,62)"  fill="#000000"><g transform="scale(15.5)"><path d="M0,0v14h14V0H0z M12,12H2V2h10V12z"/></g></g>
                                    <g transform="translate(806,124)"  fill="#000000"><g transform="scale(15.5)"><rect width="6" height="6"/></g></g>
                                    <g transform="translate(62,744)"  fill="#000000"><g transform="scale(15.5)"><path d="M0,0v14h14V0H0z M12,12H2V2h10V12z"/></g></g>
                                    <g transform="translate(124,806)"  fill="#000000"><g transform="scale(15.5)"><rect width="6" height="6"/></g></g></g>
                                    </svg>
                            </div>
                        </div>
                    </div>
                </div>
    <x-footer />
</body>

</html>