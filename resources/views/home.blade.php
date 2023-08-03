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
@endsection