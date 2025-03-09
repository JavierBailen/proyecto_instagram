@extends('layouts.layout')
@section('contenido')

<h1>Er Login</h1>

<form action="/login" method="POST">
    @csrf
    <label for="email">Email: <input type="text" name="email"></label>
    <label for="password">Contraseña <input type="password" name="password"></label>
    <button type="submit">
        Acceder
    </button>
</form>

@endsection