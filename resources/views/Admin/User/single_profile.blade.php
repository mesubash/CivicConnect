@extends('layouts.app')
    @section('content')
      @foreach( $complains as $complain)
        <div class="container py-5 h-100" style="margin-top:-40px">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-9 col-xl-7">
              <div class="card">
                <div class="rounded-top text-white d-flex flex-row" style="background-color:black; height:200px;">
                  <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                    @if($complain->user->p_image)
                    <img src="{{asset('profile_photo/'. $complain->user->p_image)}}"
                      alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                      style="width: 150px; z-index: 1">
                      @else
                      <img src="{{asset('profile_photo/no_profile.jpeg')}}"
                      alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                      style="width: 150px; z-index: 1">
                      @endif
                    <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-success" data-mdb-ripple-color="dark"
                      style="z-index: 1;">
                      Follow
                    </button>
                  </div>
                  <div class="ms-3" style="margin-top: 130px;">
                    <h5 class="text-capitalize">{{$complain->user->name}}</h5>
                    <p>{{$complain->user->email}}</p>
                  </div>
                </div>
                <div class="p-4 text-black" style="background-color: #f8f9fa;">
                  <div class="d-flex justify-content-end text-center py-1">
                    <div>
                      <p class="mb-1 h5">253</p>
                      <p class="small text-muted mb-0">Complains</p>
                    </div>
                    <div class="px-5">
                      <p class="mb-1 h5">1026</p>
                      <p class="small text-muted mb-0">Followers</p>
                    </div>
                    <div>
                      <p class="mb-1 h5">478</p>
                      <p class="small text-muted mb-0">Following</p>
                    </div>
                  </div>
                </div>
                <div class="card-body p-4 text-black">
                    <div class="mb-5">
                        <p class="lead fw-normal mb-1 text-danger">Compalin Registered</p>
                        <div class="p-2 text-center" style="background-color: #f8f9fa;">
                            <ul class="list-group">
							    @if($complain->title)
	                			    <li class="list-group-item list-group-item-danger list-group-item-action text-capitalize" data-toggle="modal" data-target="#exampleModal">{{$complain->title}}</li>
							    @endif
	            		    </ul>
                        </div>
                    </div>
                  <div class="d-flex justify-content-between align-items-center mb-4">
                    <p class="lead fw-normal mb-0">All Complain Photo</p>
                    <p class="mb-0"><a href="#!" class="text-muted">Show all</a></p>
                  </div>
                  <div class="row g-2">
                    <div class="col mb-2">
                        @if($complain->image)
                      <img src="{{asset('image/'. $complain->image)}}"
                        alt="image 1" class="w-50 rounded-3">
                        @endif
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
    @endsection
