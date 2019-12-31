@extends('layouts.stisla')
@section('css')
    <style>
        #header{
            background: white;
            border-radius: 6px;
            padding-top: 3px;
            outline: 1;
        }
        .container{
            background: white;
            border-radius: 4px;
        }
    </style>
@endsection
@section('header')
    Place List
@endsection
@section('content')
    <div class="container p-4">
        <h1 class="text-center">P L A C E S</h1>
        <a class="btn btn-md btn-success" href="places/create" >Add Place</a><br><br>
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Place Name</th>
                    <th>Location</th>
                    <th>Description</th>
                    <th>Picture</th>
                    <th>Opsi</th>
                    <?php 
                        $nomor = 1;
                    ?>
                </tr>
                @foreach($place as $pc)
                <tr>
                    <td>{{$nomor++}}</td>
                    <td>{{$pc->place_name}}</td>
                    <td>{{$pc->location}}</td>
                    <td>{{$pc->description}}</td>
                    <td>{{$pc->picture}}</td>
                    <td>
                        <form action="places/{{$pc->id}}" method="post">
                        @method('delete')
                        {{ csrf_field() }}
                            <button type="button" class="btn btn-sm btn-primary" name="button" onclick="location.href='places/{{$pc->id}}/edit'"> <i class="fa
                            fa-pencil"></i> Edit</button>
                            <button type="submit" class="btn btn-sm btn-danger" name="button" 
                             onclick="confirm('Yakin ingin menghapus?')"><i class="fa fa-trash"></i> Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
    </div>
@endsection