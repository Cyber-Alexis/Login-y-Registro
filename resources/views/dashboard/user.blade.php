@extends('layouts.app')

@section('title', 'Mi Perfil')

@section('styles')
<style>
    .profile-container {
        max-width: 500px;
        margin: 0 auto;
    }
    h2 {
        color: #333;
        margin-bottom: 1.5rem;
        text-align: center;
    }
    .profile-header {
        text-align: center;
        margin-bottom: 2rem;
    }
    .avatar {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background: #007bff;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
        font-size: 2.5rem;
        color: white;
        font-weight: bold;
    }
    .profile-info {
        background: #f8f9fa;
        border-radius: 8px;
        padding: 1.5rem;
    }
    .info-group {
        margin-bottom: 1.2rem;
        padding-bottom: 1.2rem;
        border-bottom: 1px solid #dee2e6;
    }
    .info-group:last-child {
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: none;
    }
    .info-label {
        display: block;
        font-weight: 600;
        color: #555;
        margin-bottom: 0.3rem;
        font-size: 0.9rem;
    }
    .info-value {
        font-size: 1.1rem;
        color: #333;
    }
    .welcome-message {
        text-align: center;
        color: #666;
        margin-top: 1.5rem;
        padding: 1rem;
        background: #fff3cd;
        border-radius: 4px;
        border: 1px solid #ffc107;
    }
</style>
@endsection

@section('content')
<div class="card profile-container">
    <div class="profile-header">
        <div class="avatar">
            {{ strtoupper(substr($user->name, 0, 1)) }}
        </div>
        <h2>Mi Perfil</h2>
    </div>

    <div class="profile-info">
        <div class="info-group">
            <span class="info-label">Usuario</span>
            <div class="info-value">{{ $user->name }}</div>
        </div>

        <div class="info-group">
            <span class="info-label">Nombre</span>
            <div class="info-value">{{ $user->name }}</div>
        </div>

        <div class="info-group">
            <span class="info-label">Apellidos</span>
            <div class="info-value">{{ $user->apellidos }}</div>
        </div>

        <div class="info-group">
            <span class="info-label">Email</span>
            <div class="info-value">{{ $user->email }}</div>
        </div>
    </div>

    <div class="welcome-message">
        Bienvenido a tu panel de usuario. Aquí puedes ver tu información personal.
    </div>
</div>
@endsection