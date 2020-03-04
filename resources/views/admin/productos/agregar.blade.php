@extends('admin.master')

@section('Agregar Productos - ','title')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{url('/admin/productos')}}"><i class="fas fa-box-open"></i> Productos</a>
    </li>
    
    <li class="breadcrumb-item">
        <a href="{{url('/admin/productos/agregar')}}"><i class="fas fa-plus"></i> Productos</a>
    </li>
@endsection


@section('content')
<div class="container-fluid">
    <div class="paneladmin shadow">
        <div class="headeradmin">
            <h2 class="titulo">Agregar Productos</h2>
        </div>
        <div class="inside">
            {!! Form::open(['url' => '/admin/productos/agregar']) !!}
            <div class="row">
                <div class="col-md-8">
                    <label for="nombre">Nombre del Producto</label>
                    {!! Form::text('nombre', null, ['class' => 'form-controll']) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection