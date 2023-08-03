<header>
    {{-- Container --}}
    <div class="container">
        <div class="nav-bar">
            {{-- LOGO --}}
            <figure>
                <a href="{{route("home")}}"><img src="{{Vite::asset("resources/img/dc-logo.png")}}" alt="DC Logo"></a>
            </figure>
            {{-- NAV BAR --}}
            <nav>
                <ul>
                    {{-- Navbar links --}}
                    <li><a href="">CARACTERS</a></li>
                    <li><a href="{{route("comics")}}">COMICS</a></li>
                    <li><a href="#">MOVIES</a></li>
                    <li><a href="#">TV</a></li>
                    <li><a href="#">GAMES</a></li>
                    <li><a href="#">COLLECTIBLES</a></li>
                    <li><a href="#">VIDEOS</a></li>
                    <li><a href="#">FANS</a></li>
                    <li><a href="#">NEWS</a></li>
                    <li><a href="#">SHOP</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>