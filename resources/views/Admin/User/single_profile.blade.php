@extends('layouts.app')
    @section('style')
      <style>
        /* Override background color for success notifications */
        .toast-success {
          background-color: green !important;
        }

        /* Override text color for success notifications */
        .toast-success .toast-message {
          color: white !important;
        }
        .custom-toast-container {
           position: fixed;
          top: 100px; /* adjust top position as needed */
          right: 10px; /* adjust right position as needed */
        }
       </style>
    @endsection
    @section('content')
        <div class="container py-5 h-100" style="margin-top:-40px">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-9 col-xl-7">
              <div class="card">
                <div class="rounded-top text-white d-flex flex-row" style="background-color:black; height:200px;">
                  <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                    @if($user->p_image)
                      <img src="{{asset('profile_photo/'. $user->p_image)}}"
                        alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                        style="width: 150px; z-index: 1">
                    @else
                      <img src="{{asset('profile_photo/no_profile.jpeg')}}"
                      alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                      style="width: 150px; z-index: 1">
                    @endif
                    @if(Auth::user()->id == $user->id)
                        <a class="btn btn-outline-success" data-mdb-ripple-color="dark"
                        style="z-index: 1;" href="{{ route('user.profile', Auth::user()->id) }}">
                        Edit Profile
                        </a>
                    @else
                      @php
                        $is_following=(in_array($user->id ,$following_ids))
                      @endphp
                      @if($is_following)
                         <button type="button" class="btn btn-outline-danger" data-mdb-ripple-color="dark"
                          style="z-index:1;" id="unfollow" data-user_id="{{ $user->id }}">
                          Unfollow
                        </button>
                         <button type="button" class="btn btn-outline-success" data-mdb-ripple-color="dark"
                          style="z-index: 1;display:none;" id="follow" data-user_id="{{ $user->id }}">
                          Follow
                        </button>
                      @else
                        <button type="button" class="btn btn-outline-success" data-mdb-ripple-color="dark"
                        style="z-index: 1;" id="follow" data-user_id="{{ $user->id }}">
                        Follow
                        </button>
                        <button type="button" class="btn btn-outline-danger" data-mdb-ripple-color="dark"
                          style="z-index:1;display:none;" id="unfollow" data-user_id="{{ $user->id }}">
                          Unfollow
                        </button>
                      @endif  
                    @endif
                  </div>
                  <div class="ms-3" style="margin-top: 130px;">
                    <h5 class="text-capitalize">{{$user->name}}</h5>
                    <p>{{$user->email}}</p>
                  </div>
                </div>
                <div class="p-4 text-black" style="background-color: #f8f9fa;">
                  <div class="d-flex justify-content-end text-center py-1">
                    <div>
                      <p class="mb-1 h5">253</p>
                      <p class="small text-muted mb-0">Complains</p>
                    </div>
                    <div class="px-4">
                      <p class="mb-1 h5" id="followers">1026</p>
                      <p class="small text-muted mb-0">Followers</p>
                    </div>
                    <div>
                      <p class="mb-1 h5">{{ $user->followings()->count() ?? 0 }}</p>
                      <p class="small text-muted mb-0">Following</p>
                    </div>
                  </div>
                </div>
                <div class="card-body p-4 text-black">
                  <div class="mb-5">
                      <p class="lead fw-normal mb-1 text-danger">Compalin Registered</p>
                      <div class="p-2 text-center" style="background-color: #f8f9fa;">
                        <ul class="list-group">
                          @foreach( $complains as $complain)
							              @if($complain->title)
	                		        <li class="list-group-item list-group-item-danger list-group-item-action text-capitalize mb-1" data-toggle="modal" data-target="#exampleModal">{{$complain->title}}</li>                          
							              @endif
                          @endforeach
	            		      </ul>
                      </div>
                    </div>
                  <div class="d-flex justify-content-between align-items-center mb-4">
                    <p class="lead fw-normal mb-0 ms-2 text-danger">All Post</p>
                  </div>
                  {{-- <div class="row g-2">
                    <div class="col mb-2">
                        @foreach( $complains as $complain)
                        @if($complain->image)
                      <img src="{{asset('image/'. $complain->image)}}"
                        alt="image 1" class="w-100 rounded-3">
                        <hr>
                        @endif
                        @endforeach
                    </div>
                  </div> --}}
                  @foreach($complains as $item) 
                    <center>
                      <div class="card" style="max-width: 42rem;postion:relative;top:2em;">
                        <div class="card-body">
                          <div class="d-flex mb-3">
                            <a href="">
                              @if($item->user->p_image)
                                <img src="{{asset('profile_photo/' . $item->user->p_image)}}" class="border rounded-circle me-2" alt="Avatar" style="height: 50px; width:50px;"/>
                              @else
                                <img src="{{asset('profile_photo/no_profile.jpeg')}}" class="border rounded-circle me-2" alt="Avatar" style="height: 50px; width:50px;"/>
                              @endif
                            </a>
                          <div>
                          <a href="{{route('user.profile.individual',$item->user_id)}}" style="text-decoration: none"> <p class="text-capitalize text-danger" style="position:relative;left:-40px"data-user_id="{{ $item->user_id }}">{{$item->name}}</p></a>
                          <p class="text-muted d-block text-decoration-underline" style="margin-top: -10px">
                            <small>{{$item->created_at}}</small>
                          </p>
                        </div>
                      </div>
                      <!-- Description -->
                      <div>
                        <p class="lead">
                          {{$item->problem}}
                        </p>
                      </div>
                      <!-- Media -->
                      <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                        @if($item->image)
                          <img src="{{asset('image/' . $item->image)}}" class="w-100" />
                        @endif
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                        </a>
                      </div>
                        <!-- Media -->
                        <!-- Interactions -->
                      <div class="card-body">
                        <!-- Reactions -->
                        <div class="d-flex justify-content-between mb-3">
                          <div>
                            <a href="">
                              <i class="fas fa-thumbs-up text-primary"></i>
                              <i class="fas fa-heart text-danger"></i>
                              <span>124</span>
                            </a>
                        </div>
                        <div>
                          <a href="" class="text-muted"> 8 comments </a>
                        </div>
                      </div>
                          <!-- Reactions -->
                        <!-- Buttons -->
                      <div class="d-flex justify-content-between text-center border-top border-bottom mb-4">
                        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-lg" data-mdb-ripple-color="dark">
                          <i class="fas fa-thumbs-up me-2"></i>Like
                        </button>
                        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-lg" data-mdb-ripple-color="dark">
                          <i class="bi bi-chat-dots"></i>Comment
                        </button>
                        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-lg" data-mdb-ripple-color="dark">
                          <i class="fas fa-share me-2"></i>Share
                        </button>
                      </div>
                    </center>
                    <br>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
    @endsection
    @section('script')
      <script>
        $(document).ready(function()
        {
          $('#follow').click(function()
          { 
            var user_id=$(this).data('user_id')
            var action="follow"
            update_url='{{route('user.profile.individual',123)}}'
            update_url=update_url.replace(123,user_id)
            $.ajax(
              {
                url:update_url,
                type:"GET",
                data:{action:action},
                success:function(res)
                {
                  toastr.options = 
                  {
                    "positionClass": "toast-top-right",
                    "toastClass": "custom-toast",
                    "timeOut": 3000,
                    "closeButton": true,
                    "progressBar": true,
                    "showDuration": "300",
                    "hideDuration": "2000",
                    // "showEasing": "swing",
                    "hideEasing": "linear",
                    "positionClass": "custom-toast-container"
                  };
                    toastr.success(res.message)
                    $('#follow').hide()
                    $('#unfollow').show()
                  },
                error:function(xhr,error)
                {
                  console.error(error)
                }
              })
          })  
          $('#unfollow').click(function()
          {
            var user_id=$(this).data('user_id')
            var action="unfollow"
            update_url='{{route('user.profile.individual',123)}}'
            update_url=update_url.replace(123,user_id)
            $.ajax(
            {
              url:update_url,
              type:"GET",
              data:{action:action},
              success:function(res)
              {
                toastr.options = 
                  {
                    "positionClass": "toast-top-right",
                    "toastClass": "custom-toast",
                    "timeOut": 3000,
                    "closeButton": true,
                    "progressBar": true,
                    "showDuration": "300",
                    "hideDuration": "2000",
                    // "showEasing": "swing",
                    "hideEasing": "linear",
                    "positionClass": "custom-toast-container"
                  };
                $('#follow').show()
                $('#unfollow').hide() 
                toastr.error('unfollowed successfully') 
              },
              error:function(xhr,error)
                {
                  console.error(error)
                }
            })
          })
        })
      </script>
    @endsection
