


<form action="{{route('users.store') }}" method="POST">
    @csrf
    
    <label for="name">Nombre: <input type="text" name="name"></label>
    <label for="email">Email: <input type="text" name="email"></label>
    <label for="password">Contraseña: <input type="password" name="password"></label>
    <button type="submit">
        Crear user
    </button>

</form>