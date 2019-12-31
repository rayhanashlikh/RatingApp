@extends('layouts.stisla')
@section('css')
    <style>
        .container{
            background: white;
            border-radius: 4px
        }
    </style>
@endsection
@section('header')
    <h1>Add Place</h1>
@endsection
@section('content') 
    <div class="container p-4">
    <h1 class="text-center">Add Place</h1>
        <form class="" action="/admin/places" method="post">
        {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-6 form-group">
                    <label for="place_name">Place Name</label>
                    <input id="place_name" type="text" name="place_name" placeholder="Place Name" autocomplete="off"
                        class="form-control @error('place_name') is-invalid @enderror">
                    @error('place_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <label for="location">Location</label>
                    <input id="location" type="text" name="location" placeholder="Location" autocomplete="off"
                        class="form-control @error('location') is-invalid @enderror">
                    @error('location')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                </div>
                <div class="col-lg-6">
                    <label for="date_opened">Date Opened</label>
                    <input id="date_opened" type="date" name="date_opened" placeholder="Date Opened" autocomplete="off"
                        class="form-control @error('date_opened') is-invalid @enderror">
                    @error('date_opened')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <label for="description">Description</label>
                    <input id="description" type="text" name="description" placeholder="Description" autocomplete="off"
                        class="form-control @error('description') is-invalid @enderror">
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                </div>
                <div class="col-lg-6">
                    <label for="picture">Picture</label>
                    <input id="picture" type="file" name="picture" placeholder="Picture" autocomplete="off"
                        class="form-control @error('picture') is-invalid @enderror">
                    @error('picture')
                        <div class="invalid-feed">{{ $message }}</div>
                    @enderror

                </div>
            </div><br>
        <input type="submit" name="submit" value="Add Place" class="btn btn-md btn-primary">
        <a href="/admin/places" class="btn btn-md btn-danger">Batalkan</a>
        </form><br><br>
    </div>
@endsection
