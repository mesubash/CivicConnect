@extends('layouts.Frame')
    @section('main')
    <nav class="navbar navbar-expand-xl navbar-light " style="position: -webkit-sticky; position: sticky; top: 0;z-index:1020; background-color:#245ebb;">
        <a class="navbar-brand link-light" style="font-family:monospace; font-size:30px">CivicConnect</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link {{ (request()->path() == 'home' || request()->path()== '/') ? 'link-dark' : 'link-light' }}" href="{{route('home')}}" style="font-family:monospace; font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;Home<span class="sr-only">(current)</span></a>                                                                   
                </li>
                <li class="nav-item">
                   <a class="nav-link {{ (request()->path() == 'aboutus') ? 'link-dark' : 'link-light' }}" href="{{ route('user.aboutus') }}" style="font-family: monospace; font-size: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;AboutUs</a>
                    </a>
                </li>
                
                @auth
                <li class="nav-item">
                    <a class="nav-link {{(request()->path()=='contactus') ? 'link-dark' : 'link-light'}}" href="{{route('user.contactus',['id'=>Auth::user()->id])}}" style="font-family:monospace; font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;ContactUs</a>
                </li>
                @endauth
                @auth
                <li class="nav-item">
                    <a class="nav-link {{(request()->path() == 'complain') ? 'link-dark':'link-light'}}" href="{{route('user.complain')}}" style="font-family:monospace; font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;Complain</a>
                </li>
                @endauth
                <li class="nav-item">
                    <a class="nav-link link-light" href="#" style="font-family:monospace; font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;Blog</a>
                </li>
                <li class="nav-item">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link {{(request()->path()=='login') ? 'link-dark':'link-light'}}" href="{{ route('login') }}" style="font-family:monospace; font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link {{(request()->path() == 'register') ? 'link-dark':'link-light'}}" href="{{ route('register') }}" style="font-family:monospace; font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Register') }} </a>
                        </li>
                         @endif
                        @else
                            <li class="nav-item dropdown ">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle link-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="font-family:monospace; font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;
                                Profile
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{url('profile/'. Auth::user()->id)}}">View</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    @endguest
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')
     @endsection
