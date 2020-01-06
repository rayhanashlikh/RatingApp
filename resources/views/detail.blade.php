@extends('layouts.master')

@section('css')

<link rel="stylesheet" href="{{asset('css/detail.css')}}">

@endsection

@section('title')

<title>{{$places->place_name}}</title>

@endsection

@section('header')

{{$places->place_name}}

@endsection

@section('subheader')

Posted At {{$places->created_at}} | Updated At {{$places->updated_at}}

@endsection

@section('content')
    <div class="container">
        <div class="image-content">
            <img src="{{asset('storage/img/' . $places->picture)}}" alt="">
        </div>
        <div class="content">
            <p>{{$places->description}}</p>
        </div>
        <hr class="my-4">
        <h3>Like the place?Rate it now!</h3>
        <form class="form-horizontal poststars" action="#" id="addStar" method="POST">
        {{ csrf_field() }}
                <div class="form-group required">
                    <div class="col-sm-12">
                        <input class="fas fa-star star-5" value="5" id="star-5" type="radio" name="star"/>
                        <label class="fas fa-star star-5" for="star-5"></label>
                        <input class="fas fa-star star-4" value="4" id="star-4" type="radio" name="star"/>
                        <label class="fas fa-star star-4" for="star-4"></label>
                        <input class="fas fa-star star-3" value="3" id="star-3" type="radio" name="star"/>
                        <label class="fas fa-star star-3" for="star-3"></label>
                        <input class="fas fa-star star-2" value="2" id="star-2" type="radio" name="star"/>
                        <label class="fas fa-star star-2" for="star-2"></label>
                        <input class="fas fa-star star-1" value="1" id="star-1" type="radio" name="star"/>
                        <label class="fas fa-star star-1" for="star-1"></label>
                    </div>
                </div>
        </form>
    </div>
@endsection