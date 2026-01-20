@extends('layouts.app')

@section('title', 'Panel de Administración')

@section('styles')
<style>
    h2 {
        color: #333;
        margin-bottom: 1.5rem;
    }
    .stats {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1rem;
        margin-bottom: 2rem;
    }
    .stat-card {
        background: #007bff;
        color: white;
        padding: 1.5rem;
        border-radius: 8px;
        text-align: center;
    }
    .stat-card h3 {
        font-size: 2rem;
        margin-bottom: 0.5rem;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 1rem;
    }
    thead {
        background: #f8f9fa;
    }
    th {
        text-align: left;
        padding: 0.8rem;
        font-weight: 600;
        color: #555;
        border-bottom: 2px solid #dee2e6;
    }
    td {
        padding: 0.8rem;
        border-bottom: 1px solid #dee2e6;
    }
    tr:hover {
        background: #f8f9fa;
    }
    .badge {
        display: inline-block;
        padding: 0.3rem 0.8rem;
        border-radius: 12px;
        font-size: 0.85rem;
    }
    .badge-admin {
        background: #007bff;
        color: white;
    }
    .badge-user {
        background: #28a745;
        color: white;
    }
    .no-data {
        text-align: center;
        padding: 2rem;
        color: #888;
    }
</style>
@endsection

@section('content')
<div class="card">
    <h2>Panel de Administración</h2>
    
    <div class="stats">
        <div class="stat-card">
            <h3>{{ $users->count() }}</h3>
            <p>Total de Usuarios</p>
        </div>
        <div class="stat-card">
            <h3>{{ $users->where('rol', 'administrador')->count() }}</h3>
            <p>Administradores</p>
        </div>
        <div class="stat-card">
            <h3>{{ $users->where('rol', 'usuario')->count() }}</h3>
            <p>Usuarios Regulares</p>
        </div>
    </div>

    <h3>Lista de Usuarios</h3>

    @if($users->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Rol</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td><strong>{{ $user->name }}</strong></td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->apellidos }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if($user->rol === 'administrador')
                            <span class="badge badge-admin">Administrador</span>
                        @else
                            <span class="badge badge-user">Usuario</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="no-data">No hay usuarios registrados</div>
    @endif
</div>
@endsection