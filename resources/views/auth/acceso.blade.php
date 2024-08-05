<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página de acceso para usuarios. Inicia sesión para acceder a tu perfil.">
    <meta name="author" content="nsandr3s">
    <title>Acceso</title>
    <!-- Incluye el archivo de estilos CSS para la página de acceso -->
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
</head>

<body>
    <div class="login-container">
        <form class="login-form" method="POST" action="{{ route('auth.iniciarSesion') }}">
            @csrf
            <h2>Acceso</h2>
            <!-- Campo para ingresar el correo electrónico -->
            <input type="email" id="campoEmail" placeholder="example@gmail.com" name="email"
                value="{{ old('email') }}" class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
                value="{{ old('email') }}">
            <br>
            <!-- Mostrar error -->
            <div class="invalid-feedback">
                @error('email')
                    {{ $message }}
                @enderror
            </div>
            <br>

            <!-- Campo para ingresar la contraseña -->
            <input type="password" id="campoClave" placeholder="Contraseña" name="password"
                class="{{ $errors->has('password') ? 'is-invalid' : '' }}" value="{{ old('password') }}">
            <!-- Mostrar error -->
            <div class="invalid-feedback">
                @error('password')
                    {{ $message }}
                @enderror
            </div>
            <br>

            <!-- Botón para enviar el formulario -->
            <button type="submit">Acceder</button>
            <!-- Enlace para registrarse si no tiene cuenta -->
            <p>¿No tienes cuenta? <a href="/registrarse">Regístrate</a></p>
        </form>
    </div>

    <script src="{{ asset('js/validarFormulario.js') }}"></script>
</body>

</html>
