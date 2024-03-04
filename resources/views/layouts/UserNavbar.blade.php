@extends('layouts.Frame')
    @section('main')
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary" style="position: -webkit-sticky; position: sticky; top: 0;z-index:1020;">
        <a class="navbar-brand" style="font-family:monospace; font-size:30px">CivicConnect</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('user.homepage')}}" style="font-family:monospace; font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;Home<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.aboutus')}}" style="font-family:monospace; font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;AboutUs
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.contactus')}}" style="font-family:monospace; font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;ContactUs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.complain')}}" style="font-family:monospace; font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;Complain</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#" style="font-family:monospace; font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;Blog</a>
                </li>
            </ul>
            @if(request()->is('civiconnect/homepage'))
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 btn-sm" type="submit">Search</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </form>
            @endif
            <img src="{{ asset('image/ignito.png') }}" class="rounded-circle" height="40" width="40" id="modalTrigger" onclick="openModal()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    </nav>
    <div class="modal fade" id="photoModal" tabindex="-1" role="dialog" aria-labelledby="photoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="photoModalLabel">User's Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul>
                   <li> <a href="" class="btn btn-info m-2">Register As Admin</a></li>
                   <li> <a href="" class="btn btn-primary m-2">View Profile</a></li>
                   <li> <a href="{{route('user.login')}}" class="btn btn-success m-2">Login As Admin</a></li>
                   <li> <a href="" class="btn btn-danger m-2">LogOut</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
            @yield('navbar')
    @endsection
       @section('script')
        function openModal() {
            $('#photoModal').modal('show');
            
        }
        @endsection
        
   
