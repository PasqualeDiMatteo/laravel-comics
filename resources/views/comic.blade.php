@extends('layout.main')

@section('title',$comic["series"])

@section('main-content')
{{-- Comic --}}
<div id="comic">
    <div class="bg-blue">
        {{-- Container --}}
        <div class="container">
            {{-- Card Comic --}}
            <div class="card-comic">
                <img src="{{$comic["thumb"]}}" alt='{{ $comic["series"] }}'>
            </div>
        </div>
    </div>
    <div class="container">
        {{-- Row --}}
        <div class="row">
            {{-- Card Left --}}
            <div class="card-left">
                {{-- Title --}}
                <h2>{{$comic["title"]}}</h2>
                {{-- Availability --}}
                <div class="availability">
                    <div class="availability-left">
                        {{-- Price --}}
                        <div class="price"> U.S. Price: <span>{{ $comic["price"]}}</span></div>
                        {{-- Status --}}
                        <div class="status">AVAILABLE</div>
                    </div>
                    {{-- Check --}}
                    <div class="availability-right">Check Availability</div>
                </div>
                {{-- Desciption --}}
                <p class="description">{{ $comic["description"]}}</p>
            </div>
            {{-- Card Right --}}
            <div class="card-right">
                <h5>ADVERTISEMENT</h5>
                <img src="{{Vite::asset("resources/img/adv.jpg")}}" alt="ADV">
            </div>
        </div>
    </div>
</div>
@endsection