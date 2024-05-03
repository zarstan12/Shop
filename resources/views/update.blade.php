<!DOCTYPE html>
<html>

<head> 
    <title>Actualizacion de usuario</title>
</head>
<body>
<h1>
Regresa a la lista de usuarios
<a href="{{ url('users') }}">Volver al listado</a>
</h1>

    <h1>Actualiza tu usuario</h1>

    <form action="{{ url('update/' . $user->id) }}" method="POST">
    @csrf
    <label for="name">Nombre</label>
    <input type= "text" name= "name" id= "name" value="{{$user->name}}">
    <label for="email">Correo</label>
    <input type="text" name="email" id="email" value="{{$user->email}}">
    <label for="password">Contraseña</label>
    <input type="password" name="password" id="password" value="{{$user->password}}">
    <button type="submit"> Guardar Usuario </button>
</body>


