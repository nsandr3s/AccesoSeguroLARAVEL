<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Descripción

Este proyecto es una aplicación web que permite la autenticación de usuarios, incluyendo el registro e inicio de sesión. Los usuarios pueden registrarse con un nombre, correo electrónico, y contraseña, y luego iniciar sesión en el sistema. Dependiendo del rol del usuario, se le redirige a diferentes secciones de la aplicación.

## Instalación

1. **Clona el repositorio**:
   ```bash
   git clone https://github.com/nsandr3s/AccesoSeguroLARAVEL.git
2. **Navega a la carpeta del proyecto**:
   ```bash
   cd AccesoSeguroLARAVEL
3. **Copia el archivo de configuración del entorno**:
   ```bash
   cp .env.example .env
4. **Instala las dependencias del proyecto**:
   ```bash
    composer install
5. **Genera la clave de aplicación**:
   ```bash
    php artisan key:generate
6. **Ejecuta las migraciones para configurar la base de datos (si es necesario)**:
   ```bash
    php artisan migrate
7. **Inicia el servidor de desarrollo**:
   ```bash
    php artisan serve
