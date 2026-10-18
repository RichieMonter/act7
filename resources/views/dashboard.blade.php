@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Dashboard de Usuario</h4>
        </div>
        <div class="card-body">
            <h3>Hola, {{ Auth::user()->name }}</h3>
            <p>Has accedido exitosamente al área privada protegida por autenticación.</p>
        </div>
    </div>
</div>
@endsection
