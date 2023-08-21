@extends('layout.main')

@section('title',$comic["series"])

@section('main-content')
<div id="comic">
    <div class="bg-blue">
        <div class="container">
            <div class="card-comic">
                <img src="{{$comic["thumb"]}}" alt='{{ $comic["series"] }}'>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="card-left">
                <h2>{{$comic["title"]}}</h2>
                <div class="availability">
                    <div class="availability-left">
                        <div class="price"> U.S. Price: {{ $comic["price"]}}</div>
                        <div class="status">AVAILABLE</div>
                    </div>
                    <div class="availability-right"></div>
                </div>
                <p class="description">{{ $comic["description"]}}</p>
            </div>
            <div class="card-right">
                <h5>ADVERTISEMENT</h5>
                <img src="{{Vite::asset("resources/img/adv.jpg")}}" alt="ADV">
            </div>
        </div>
    </div>
</div>
@endsection