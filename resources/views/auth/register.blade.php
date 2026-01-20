@extends('layouts.app')

@section('title', 'Registro de Usuario')

@section('styles')
<style>
    .form-container {
        max-width: 450px;
        margin: 0 auto;
    }
    h2 {
        color: #333;
        margin-bottom: 1.5rem;
        text-align: center;
    }
    .form-group {
        margin-bottom: 1rem;
    }
    label {
        display: block;
        margin-bottom: 0.3rem;
        color: #555;
        font-weight: 500;
    }
    input {
        width: 100%;
        padding: 0.6rem;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 1rem;
    }
    input:focus {
        outline: none;
        border-color: #007bff;
    }
    .error {
        color: #dc3545;
        font-size: 0.9rem;
        margin-top: 0.2rem;
    }
    .btn-primary {
        width: 100%;
        background: #007bff;
        color: white;
        border: none;
        padding: 0.7rem;
        border-radius: 4px;
        font-size: 1rem;
        cursor: pointer;
        margin-top: 0.5rem;
    }
    .btn-primary:hover {
        background: #0056b3;
    }
    .link-container {
        text-align: center;
        margin-top: 1rem;
    }
    .link-container a {
        color: #007bff;
        text-decoration: none;
    }
    .link-container a:hover {
        text-decoration: underline;
    }
</style>
@endsection

@section('content')
<div class="card form-container">
    <h2>Registro de Usuario</h2>
    
    <form action="{{ route('register') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" id="apellidos" name="apellidos" value="{{ old('apellidos') }}" required>
            @error('apellidos')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>
            @error('password')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmar Contraseña</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>

        <button type="submit" class="btn-primary">Registrarse</button>
    </form>

    <div class="link-container">
        ¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia sesión aquí</a>
    </div>
</div>
@endsection