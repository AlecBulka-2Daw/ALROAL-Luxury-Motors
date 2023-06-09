<div class="nav">
    <img src="{{ asset('img/logo/logo-color.svg') }}">
    <div class="links">
        @if (Route::has('register'))
            @auth
                <a href="{{ route('home') }}" class="" aria-label="Home">Home</a>

                <a href="{{ route('buy-cars') }}" class="" aria-label="Buy cars">Buy Cars</a>

                <a href="{{ route('sell-cars') }}" class="" aria-label="Sell cars">Sell Cars</a>

                <a href="{{ route('tunning') }}" class="" aria-label="Tunning">Tunning</a>

                <a href="{{ route('contact') }}" class="" aria-label="Contact">Contact</a>

                @if (Auth::user()->role_id == 1)
                    <a href="{{ route('user-dashboard') }}" class="">
                        <svg width='24' height='24' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'
                            xmlns:xlink='http://www.w3.org/1999/xlink'>
                            <rect width='24' height='24' stroke='none' fill='#000000' opacity='0' />
                            <g transform="matrix(0.78 0 0 0.78 12 12)">
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-12.5, -12.93)"
                                    d="M 2.101563 23 C 2.101563 23 2.101563 21.5 2.101563 21.300781 C 2.101563 19.101563 5.398438 17.101563 9 16.398438 C 9 16.398438 10.101563 15.800781 9.800781 14.699219 C 8.699219 13.300781 8.398438 11.800781 8.398438 11.800781 C 8.199219 11.699219 7.898438 11.5 7.699219 11.300781 C 7.398438 10.898438 7 9.699219 7.101563 8.800781 C 7.199219 8 7.398438 8.300781 7.5 8.101563 C 6.699219 6.300781 7.101563 4 8 2.300781 C 9.898438 -1 13.898438 0 14.5 1.199219 C 18.300781 0.5 18.199219 6.5 17.601563 8 C 17.601563 8 17.898438 8.101563 17.898438 9.5 C 17.800781 11 16.601563 11.898438 16.601563 11.898438 C 16.601563 12.300781 16.101563 13.5 15.300781 14.601563 C 14.601563 16 16 16.300781 16 16.300781 C 19.601563 17 22.898438 19 22.898438 21.199219 C 22.898438 21.398438 22.898438 22.898438 22.898438 22.898438 C 22.898438 24.300781 17.5 25.800781 12.5 25.800781 C 7.601563 25.800781 2.101563 25.300781 2.101563 23 Z"
                                    stroke-linecap="round" />
                            </g>
                        </svg>
                    </a>
                @elseif (Auth::user()->role_id == 2)
                    <a href="{{ route('employee-view-cars') }}" class="">
                        <svg width='24' height='24' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'
                            xmlns:xlink='http://www.w3.org/1999/xlink'>
                            <rect width='24' height='24' stroke='none' fill='#000000' opacity='0' />
                            <g transform="matrix(0.78 0 0 0.78 12 12)">
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-12.5, -12.93)"
                                    d="M 2.101563 23 C 2.101563 23 2.101563 21.5 2.101563 21.300781 C 2.101563 19.101563 5.398438 17.101563 9 16.398438 C 9 16.398438 10.101563 15.800781 9.800781 14.699219 C 8.699219 13.300781 8.398438 11.800781 8.398438 11.800781 C 8.199219 11.699219 7.898438 11.5 7.699219 11.300781 C 7.398438 10.898438 7 9.699219 7.101563 8.800781 C 7.199219 8 7.398438 8.300781 7.5 8.101563 C 6.699219 6.300781 7.101563 4 8 2.300781 C 9.898438 -1 13.898438 0 14.5 1.199219 C 18.300781 0.5 18.199219 6.5 17.601563 8 C 17.601563 8 17.898438 8.101563 17.898438 9.5 C 17.800781 11 16.601563 11.898438 16.601563 11.898438 C 16.601563 12.300781 16.101563 13.5 15.300781 14.601563 C 14.601563 16 16 16.300781 16 16.300781 C 19.601563 17 22.898438 19 22.898438 21.199219 C 22.898438 21.398438 22.898438 22.898438 22.898438 22.898438 C 22.898438 24.300781 17.5 25.800781 12.5 25.800781 C 7.601563 25.800781 2.101563 25.300781 2.101563 23 Z"
                                    stroke-linecap="round" />
                            </g>
                        </svg>
                    </a>
                @elseif (Auth::user()->role_id == 3)
                    <a href="{{ route('admin-dashboard') }}" class="">
                        <svg width='24' height='24' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'
                            xmlns:xlink='http://www.w3.org/1999/xlink'>
                            <rect width='24' height='24' stroke='none' fill='#000000' opacity='0' />
                            <g transform="matrix(0.78 0 0 0.78 12 12)">
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-12.5, -12.93)"
                                    d="M 2.101563 23 C 2.101563 23 2.101563 21.5 2.101563 21.300781 C 2.101563 19.101563 5.398438 17.101563 9 16.398438 C 9 16.398438 10.101563 15.800781 9.800781 14.699219 C 8.699219 13.300781 8.398438 11.800781 8.398438 11.800781 C 8.199219 11.699219 7.898438 11.5 7.699219 11.300781 C 7.398438 10.898438 7 9.699219 7.101563 8.800781 C 7.199219 8 7.398438 8.300781 7.5 8.101563 C 6.699219 6.300781 7.101563 4 8 2.300781 C 9.898438 -1 13.898438 0 14.5 1.199219 C 18.300781 0.5 18.199219 6.5 17.601563 8 C 17.601563 8 17.898438 8.101563 17.898438 9.5 C 17.800781 11 16.601563 11.898438 16.601563 11.898438 C 16.601563 12.300781 16.101563 13.5 15.300781 14.601563 C 14.601563 16 16 16.300781 16 16.300781 C 19.601563 17 22.898438 19 22.898438 21.199219 C 22.898438 21.398438 22.898438 22.898438 22.898438 22.898438 C 22.898438 24.300781 17.5 25.800781 12.5 25.800781 C 7.601563 25.800781 2.101563 25.300781 2.101563 23 Z"
                                    stroke-linecap="round" />
                            </g>
                        </svg>
                    </a>
                @endif
            @else
                <a href="{{ route('home') }}" class="" aria-label="Home">Home</a>

                <a href="{{ route('buy-cars') }}" class="" aria-label="Buy cars">Buy Cars</a>

                <a href="{{ route('sell-cars') }}" class="" aria-label="Sell cars">Sell Cars</a>

                <a href="{{ route('tunning') }}" class="" aria-label="Tunning">Tunning</a>

                <a href="{{ route('contact') }}" class="" aria-label="COntact">Contact</a>

                <a href="{{ route('login') }}" class="">
                    <svg width='24' height='24' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'
                        xmlns:xlink='http://www.w3.org/1999/xlink'>
                        <rect width='24' height='24' stroke='none' fill='#000000' opacity='0' />
                        <g transform="matrix(0.78 0 0 0.78 12 12)">
                            <path
                                style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                transform=" translate(-12.5, -12.93)"
                                d="M 2.101563 23 C 2.101563 23 2.101563 21.5 2.101563 21.300781 C 2.101563 19.101563 5.398438 17.101563 9 16.398438 C 9 16.398438 10.101563 15.800781 9.800781 14.699219 C 8.699219 13.300781 8.398438 11.800781 8.398438 11.800781 C 8.199219 11.699219 7.898438 11.5 7.699219 11.300781 C 7.398438 10.898438 7 9.699219 7.101563 8.800781 C 7.199219 8 7.398438 8.300781 7.5 8.101563 C 6.699219 6.300781 7.101563 4 8 2.300781 C 9.898438 -1 13.898438 0 14.5 1.199219 C 18.300781 0.5 18.199219 6.5 17.601563 8 C 17.601563 8 17.898438 8.101563 17.898438 9.5 C 17.800781 11 16.601563 11.898438 16.601563 11.898438 C 16.601563 12.300781 16.101563 13.5 15.300781 14.601563 C 14.601563 16 16 16.300781 16 16.300781 C 19.601563 17 22.898438 19 22.898438 21.199219 C 22.898438 21.398438 22.898438 22.898438 22.898438 22.898438 C 22.898438 24.300781 17.5 25.800781 12.5 25.800781 C 7.601563 25.800781 2.101563 25.300781 2.101563 23 Z"
                                stroke-linecap="round" />
                        </g>
                    </svg>
                </a>

            @endauth
    </div>
    @endif
</div>
</div>
</div>
</div>
