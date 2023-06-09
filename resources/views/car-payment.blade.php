<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/svg" href="{{ asset('img/logo/logo-color.svg') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('style/car-payment/style.css') }}>
</head>

<body>
    <x-header />
    <div class="payment">
        <div class="car-info">
            <div class="name">
                <h3>{{ $order->car->name }}</h3>
            </div>
            <div class="image">
                <img src="{{ asset('img/cars/' . $order->car->image) }}" alt="">
            </div>
            <div class="price">
                @if ($order->finance)
                    <h3>{{ number_format($order->monthlyCost, 2) }} €/monthly</h3>
                @else
                    <h3>{{ number_format($order->totalCost, 2) }} €</h3>
                @endif
            </div>
        </div>
        <div class="user-info">
            <div class="text">
                <h2>Pay with Card</h2>
            </div>
            <div class="card">
                <p>Card</p>
            </div>
            <form action="{{route('car-payment-post', $order)}}" method="post" id="form-user">
                @csrf
                <label for="">Email</label><br>
                <input type="email" name="email" id="email" placeholder="Email" value="{{Auth::user()->email}}" required><br><br>
                <div class="card-information">
                    <label for="">Card Information</label><br>
                    <input type="number" name="card-info" id="card-info" placeholder="1234 1234 1234 1234" required><br>
                    <input type="month" name="card-date" id="card-date" required>
                    <input type="number" name="card-cvc" id="card-cvc" placeholder="CVC" required><br><br>
                </div>
                <label for="">Name on card</label><br>
                <input type="text" name="name-card" id="name-card" placeholder="Name on card" required><br><br>
                <label for="">Country or region</label><br>
                <select name="country" id="country" required>
                    <option>Select a Country</option>
                </select><br><br>
                <div class="btnpay">
                    <input type="text" name="status" value="Paid" hidden>
                    <button aria-label="Pay now">Pay Now</button>
                </div>
            </form>
        </div>
    </div>

    <x-footer />
    <script src="{{ asset('js/countries.js') }}"></script>
</body>

</html>
