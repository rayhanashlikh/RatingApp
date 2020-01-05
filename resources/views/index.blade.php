@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection
@section('title')
<title>Uni Places</title>
@endsection
@section('header')
Places
@endsection
@section('subheader')
Discover great places around the globe
@endsection
@section('content')
    <div class="card mb-3" style="max-width: 1000px;">
        @foreach($places as $pc)
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{asset('storage/img/' . $pc->picture)}}" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <a href="/places/detail/{{$pc->id}}" class="">
                    <h2 class="card-title">{{$pc->place_name}}</h2>
                    </a>
                    <p class="card-text">{{$pc->description}}</p>
                    <p class="card-text"><small class="text-muted">Opened At {{$pc->date_opened}}</small></p>
                </div>
            </div>
        </div>
        <br>
        @endforeach
    </div>
@endsection