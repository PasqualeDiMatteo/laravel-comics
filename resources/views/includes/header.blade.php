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
                    <li><a href="{{route("caracters")}}">CARACTERS</a></li>
                    <li><a href="{{route("comics")}}">COMICS</a></li>
                    <li><a href="{{route("movies")}}">MOVIES</a></li>
                    <li><a href="{{route("tv")}}">TV</a></li>
                    <li><a href="{{route("games")}}">GAMES</a></li>
                    <li><a href="{{route("collectibles")}}">COLLECTIBLES</a></li>
                    <li><a href="{{route("videos")}}">VIDEOS</a></li>
                    <li><a href="{{route("fans")}}">FANS</a></li>
                    <li><a href="#">NEWS</a></li>
                    <li><a href="#">SHOP</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>