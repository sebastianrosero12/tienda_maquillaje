@extends('admin.master')

@section('Productos - ','title')

@section('breadcrumb')
    <li class="breadcrumb-item">
    <a href="{{url('/admin/productos')}}"><i class="fas fa-box-open"></i> Productos</a>
    </li>
@endsection


@section('content')
<div class="container-fluid">
    <div class="paneladmin shadow">
        <div class="headeradmin">
            <h2 class="titulo">Productos</h2>
        </div>
        <div class="inside">
            <div class="btns">
            <a href="{{ url('/admin/productos/agregar') }}" class="btn btn-success">
                <i class="fas fa-plus"></i> Agregar producto
            </a>
            </div>
            <table class="table">
                
            </table>
        </div>
    </div>
</div>
@endsection