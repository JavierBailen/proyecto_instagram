@extends('layouts.layout')

@section('contenido')


<table>
    <th>Nombre</th>
    <th>Email</th>


    <tr>
        @foreach ($users as $user )
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>            
        @endforeach
    </tr>
</table>

@endsection