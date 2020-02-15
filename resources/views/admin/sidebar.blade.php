<div class="sidebar shadow">
    <div class="section-top">
        <div class="logo">
            <img src="{{asset('images/logo.png')}}" class="img-fluid">
        </div>
        <div class="user">
            <span class = "subtitle">Hola: </span>
            <div class="nombre">
                {{Auth::user()->nombre}} {{Auth::user()->apellido}}
                <a href="{{url('/logout')}}"><i class="fas fa-sign-out-alt"></i></a>
            </div>
            <div class="email"></div>
        </div>
    </div>
</div>