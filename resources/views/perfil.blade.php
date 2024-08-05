<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página de perfil del usuario. Muestra la información del usuario y opciones según su rol.">
    <meta name="author" content="nsandr3s">
    <title>Perfil</title>
    <!-- Incluye el archivo de estilos CSS para la página de perfil -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/perfil.css') }}">
</head>
<body>
    <div class="profile-container">
        <!-- Muestra el nombre del usuario -->
        <h1>Bienvenido, {{ auth()->user()->name }}</h1>
        <!-- Muestra el correo electrónico del usuario -->
        <p>Email: {{ auth()->user()->email }}</p>
        <!-- Muestra el rol del usuario -->
        <p>Rol: {{ auth()->user()->rol }}</p>

        <!-- Mostrar botones y enlaces según el rol del usuario -->
        @if (auth()->user()->rol === 'Administrador')
            <!-- Apartados visibles solo para administradores -->
            <a href="#">Apartado administrador 1</a>
            <a href="#">Apartado administrador 2</a>
        @else
            <!-- Apartados visibles solo para clientes -->
            <a href="#">Apartado cliente 1</a>
            <a href="#">Apartado cliente 2</a>
        @endif

        <!-- Formulario para cerrar sesión -->
        <form action="{{ route('auth.cerrarSesion') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit">Cerrar sesión</button>
        </form>
    </div>
</body>
</html>
