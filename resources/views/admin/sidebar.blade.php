<div class="sidebar shadow">
    {{-- <div class="section-top">
        <div class="logo">
            <img src="{{asset('images/logo.png')}}" class="img-fluid">
        </div>
        <div class="user" align ="center">
            <span class = "subtitle">Hola: </span>
            <div class="nombre">
                {{Auth::user()->nombre}} {{Auth::user()->apellido}}
                <a href="{{url('/logout')}}" data-toggle="tooltip"  data-placement="top" title="Salir">    <i class="fas fa-sign-out-alt"></i></a>
            </div>
            <div class="email">{{Auth::user()->email}}</div>
        </div>
    </div> --}}

    <div class="main">
        <ul>
            <li>
                <a href="{{ url('/admin') }}"><i class="fas fa-home"></i>Tablero</a>
            </li>
            <li>
                <a href="{{ url('/admin/products') }}"><i class="fas fa-box-open"></i>Productos</a>
            </li>
            <li>
                <a href="{{ url('/admin') }}"><i class="fas fa-users-cog"></i>Usuarios</a>
            </li>
        </ul>
    </div>
</div>