@extends('layouts.base')


<nav class="py-6 w-11/12 m-auto">
    @auth
        <div class="flex gap-2 justify-end">
            <a href="{{ route('crud.livewire') }}">Crud Livewire</a>
            <a href="/">Home</a>
            <form action="{{ route('logout') }}" method='POST'>
                @csrf
                <button>Log out</button>
            </form>
        </div>
    @endauth
    @guest
        <div class="flex gap-2 justify-end">
            <a href="{{ route('register') }}">Register</a>
            <a href="{{ route('login') }}">Login</a>
        </div>
    @endguest
</nav>
@section('body')
    @yield('content')

    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
