@extends('layout.main')

@section('title',"Comics")

@php
$comics= config("comics");    
@endphp

@section('main-content')
    {{-- Background --}}
    <div class="background">
        <div class="container container-card">
            <div class="series">CURRENT SERIES</div>
            <div class="content">
                {{-- Card --}}
                @foreach ($comics as $comic)
                <div class="card">
                    <img src="{{$comic["thumb"]}}" alt='{{ $comic["series"] }}'>
                    <h3>{{ $comic["series"] }}</h3>
                </div>
                @endforeach
            </div>
            <button>LOAD MORE</button>
        </div>
    </div>
    <div class="main-links">
        <div class="container">
            <ul>
                <li>
                    <a href="#">
                        <img src="{{Vite::asset("resources/img/buy-comics-digital-comics.png")}}" alt="DC">
                        <h3>DIGITAL COMICS</h3>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{Vite::asset("resources/img/buy-comics-merchandise.png")}}" alt="DC">
                        <h3>DC MERCHANDISE</h3>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{Vite::asset("resources/img/buy-comics-subscriptions.png")}}" alt="DC">
                        <h3>SUBSCRIPTION</h3>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{Vite::asset("resources/img/buy-comics-shop-locator.png")}}" alt="DC">
                        <h3>COMIC SHOP LOCATOR</h3>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{Vite::asset("resources/img/buy-dc-power-visa.svg")}}" alt="DC">
                        <h3>DC POWER VISA</h3>
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection