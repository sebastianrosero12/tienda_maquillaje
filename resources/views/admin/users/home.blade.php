@extends('admin.master')

@section('Usuarios - ' , 'title')

@section('breadcrumb')
    <li class="breadcrumb-item">
    <a href="{{url('/admin/users')}}"><i class="fas fa-users-cog"></i>Usuarios</a>
    </li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="paneladmin shadow">
        <div class="headeradmin">
            <h2 class="titulo">Usuarios</h2>
        </div>
        <div class="inside">
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombres</td>
                        <td>Apellidos</td>
                        <td>Correo</td>
                        <td>Opciones</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nombre }}</td>
                    <td>{{ $user->apellido }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <div class="opciones">
                            <a href="{{ url('/admin/user/'.$user->id.'/edit') }}" data-toggle="tooltip"  data-placement="top" title="Editar">
                                <i class="fas fa-wrench"></i> 
                            </a>
                            <a href="{{ url('/admin/user/'.$user->id.'/delete') }}" data-toggle="tooltip"  data-placement="top" title="Eliminar">
                                <i class="fas fa-trash"></i> 
                            </a>
                        </div>
                    </td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection