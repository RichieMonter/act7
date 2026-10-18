@extends('layouts.app')

@section('content')
<div class="container text-center py-5">
    <h1 class="display-4 fw-bold">Bienvenido a Nuestra Aplicación</h1>
    <p class="lead">Página pública de bienvenida. Inicia sesión o regístrate para acceder al panel privado.</p>
    <div class="mt-4">
        <a href="{{ route('login') }}" class="btn btn-primary btn-lg me-2">Iniciar Sesión</a>
        <a href="{{ route('register') }}" class="btn btn-outline-secondary btn-lg">Registrarse</a>
    </div>
</div>
@endsection