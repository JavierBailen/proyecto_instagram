
@section('contenido')
<h1>Menu</h1>



<!--Solo visible para invitados-->
@guest
    <nav>
        <a href="/login">Login</a>
        <a href="/register">Registro</a>
    </nav>
@endguest



<!--Solo para autenticados-->
@auth
    <form action="/logout" method="POST">
    @csrf
    <button type="submit">
        Logout
    </button>
</form>
@endauth


@endsection