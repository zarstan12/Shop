<!DOCTYPE html>
<html>

<head> 
    <title>Registro</title>
</head>

<body>
<h1>
Regresa a la lista de usuarios
<a href="{{ url('users') }}">Volver al listado</a>
</h1>

    <h1>Registrate con tus datos</h1>
    <form action="{{ url('register/store') }}" method="POST">
    @csrf
    <label for="name">Nombre</label>
    <input type= "text" name= "name" id= "name">
    <label for="email">Correo</label>
    <input type="text" name="email" id="email">
    <label for="password">Contraseña</label>
    <input type="password" name="password" id="password">
    <button type="submit"> Guardar Usuario </button>


</body>



















</html>