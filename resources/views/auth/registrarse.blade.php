<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página de registro de usuario. Completa el formulario para crear una nueva cuenta.">
    <meta name="author" content="nsandr3s">
    <title>Registrarse</title>
    <!-- Incluye el archivo de estilos CSS para la página de registro -->
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
</head>

<body>
    <div class="login-container">
        <form class="login-form" method="POST" action="{{ route('auth.registrarUsuario') }}">
            @csrf
            <h2>Registrarse</h2>

            <!-- Campo para ingresar el nombre -->
            <input type="text" name="name" placeholder="Nombre" id="campoNombre"
                class="{{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name') }}">
            <!-- Mostrar error -->
            <div class="invalid-feedback">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <br>

            <!-- Campo para ingresar el correo electrónico -->
            <input type="email" id="campoEmail" placeholder="example@gmail.com" name="email"
                value="{{ old('email') }}" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}">
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

            <!-- Selector para elegir el rol del usuario -->
            <select name="rol">
                <option value="Cliente">Cliente</option>
                <option value="Administrador">Administrador</option>
            </select>
            <!-- Botón para enviar el formulario -->
            <button type="submit">Registrarse</button>
            <!-- Enlace para acceder a la página de inicio de sesión si ya tiene cuenta -->
            <p>¿Ya tienes cuenta? <a href="/">Accede aquí</a></p>
        </form>
    </div>

    <script src="{{ asset('js/validarFormularioRegistro.js') }}"></script>
</body>

</html>
