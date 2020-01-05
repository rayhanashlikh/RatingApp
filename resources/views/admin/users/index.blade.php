@extends('layouts.stisla')
@section('css')
    <style>
        .container{
            background: white;
            border-radius: 4px;
        }
    </style>
@endsection
@section('header')
User
@endsection
@section('content')
    <div class="container p-4">
    <h1 class="text-center">U S E R S</h1>
        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Opsi</th>
                <?php
                    $nomor = 1;
                ?>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{$nomor++}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                <form action="users/{{$user->id}}" method="post">
                @method('delete')
                {{ csrf_field() }}
                    <button type="submit" class="btn btn-sm btn-danger" name="button"
                    onclick="confirm('Yakin ingin menghapus ?')"> <i class="fa fa-trash"></i> Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
