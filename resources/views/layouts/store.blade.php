@extends('layouts.head')

@section('content')
<ul class="navbar-nav ms-auto">
    @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Registrar</a>
        </li>
    @else
        <li class="nav-item dropdown">
            <a id="navbarUser" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarUser">
                <a href="#" class="dropdown-item">Meu Perfil</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                </form>
            </div>
        </li>
    @endguest
</ul>
@if (session()->has('success'))
<div class="alert alert-success">{{ session()->get('success') }}</div>
@endif
@if (session()->has('error'))
<div class="alert alert-danger">{{ session()->get('error') }}</div>
@endif
@yield('content')
@endsection



</body>

</html>
