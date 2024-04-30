@extends('layouts.Admin')
    @section('content')
        <main class="mt-5 pt-5 me-4" id="main">
            <div class="container">
		        <div class="main-body">
			        <div class="row">
				        <div class="col-lg-4">
					        <div class="card">
						        <div class="card-body">
							        <div class="d-flex flex-column align-items-center text-center">
                                        @if($user->p_image)
								            <img src="{{asset('profile_photo/' . $user->p_image)}}" alt="Admin" class="rounded-circle p-1" width="110">
                                        @else
                                            <img src="{{asset('profile_photo/no_profile.jpeg')}}" alt="Admin" class="rounded-circle p-1" width="110">
                                        @endif    
								        <div class="mt-3">
									        <h4 class="text-danger text-capitalize">{{$user->name}}</h4>
									        <p class="text-secondary mb-1">Citizen</p>
									        <p class="text-muted text-capitalize font-size-sm">{{isset($user->address)? $user->address : 'Not Addressed'}}</p>
									        <button class="btn btn-outline-primary">Message</button>
								        </div>
							        </div>
							        <hr class="my-4">
							        <ul class="list-group list-group-flush">
								        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text text-danger" id="basic-addon1">Joined Date</span>
                                                </div>
                                                <input type="text" class="form-control" value="{{$user->created_at}}" aria-label="Username" aria-describedby="basic-addon1" readonly>
                                            </div>
								        </li>
								        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text text-danger" id="basic-addon1">Verified At</span>
                                                </div>
                                                <input type="text" class="form-control" value="{{$user->email_verified_at}}" aria-label="Verified At" aria-describedby="basic-addon1" readonly>
                                            </div>
								        </li>
								        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text text-danger" id="basic-addon1">Id Number:</span>
                                                </div>
                                                <input type="text" class="form-control" value="{{$user->id}}" aria-label="Id Number" aria-describedby="basic-addon1" readonly>
                                            </div>
								        </li>
								        {{-- <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
									        <span class="text-secondary">bootdey</span>
								        </li>
								        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
									        <span class="text-secondary">bootdey</span>
								        </li> --}}
							        </ul>
						        </div>
					        </div>
				        </div>
				        <div class="col-lg-8">
					        <div class="card">
						        <div class="card-body">
							        <div class="row mb-3">
								        <div class="col-sm-3">
									        <h6 class="mb-0">First Name</h6>
								        </div>
								        <div class="col-sm-9 text-secondary">
									        <input type="text" class="form-control text-capitalize" value="{{$user->name}}" readonly>
								        </div>
							        </div>
                                    <div class="row mb-3">
								        <div class="col-sm-3">
									        <h6 class="mb-0">Middle Name</h6>
								        </div>
								        <div class="col-sm-9 text-secondary">
									        <input type="text" class="form-control" value="">
								        </div>
							        </div>
                                    <div class="row mb-3">
								        <div class="col-sm-3">
									        <h6 class="mb-0">Last Name</h6>
								        </div>
								        <div class="col-sm-9 text-secondary">
									        <input type="text" class="form-control" value="">
								        </div>
							        </div>
							        <div class="row mb-3">
								        <div class="col-sm-3">
									        <h6 class="mb-0">Email</h6>
								        </div>
								        <div class="col-sm-9 text-secondary">
									        <input type="text" class="form-control" value="{{$user->email}}" readonly>
								        </div>
							        </div>
							        <div class="row mb-3">
								        <div class="col-sm-3">
									        <h6 class="mb-0">Phone</h6>
								        </div>
								        <div class="col-sm-9 text-secondary">
									        <input type="text" class="form-control" value="{{$user->phone_number}}" readonly>
								        </div>
							        </div>
							        <div class="row mb-3">
								        <div class="col-sm-3">
									        <h6 class="mb-0">Mobile</h6>
								        </div>
								        <div class="col-sm-9 text-secondary">
									        <input type="text" class="form-control" value="{{$user->phone_number}}" readonly>
								        </div>
							        </div>
							        <div class="row mb-3">
								        <div class="col-sm-3">
									        <h6 class="mb-0">Address</h6>
								        </div>
								        <div class="col-sm-9 text-secondary">
									        <input type="text" class="form-control text-capitalize" value="{{isset($user->address)?$user->address:'Not Addressed'}}" readonly>
								    	</div>
									</div>
									<div class="row mb-3">
								        <div class="col-sm-3">
									        <h6 class="mb-0">Ward No:</h6>
								        </div>
								        <div class="col-sm-9 text-secondary">
									        <input type="text" class="form-control text-capitalize" value="{{isset($user->ward_no)?$user->ward_no:'Not Addressed'}}" readonly>
								    	</div>
									</div>
							    </div>
						    </div>
					    </div>
					    <div class="row">
						    <div class="col-sm-12">
							    <div class="card">
								    <div class="card-body">
									    <h5 class="d-flex align-items-center mb-3 text-danger">Registered Complain</h5>
									    @foreach($complain as $item)
	            			                <ul class="list-group">
								                @if($item->title)
	                				                <li class="list-group-item list-group-item-danger list-group-item-action text-capitalize">{{$item->title}}</li>
								                @endif
	            			                </ul>
						                @endforeach
								    </div>
							    </div>
						    </div>
					    </div>
				    </div>
			    </div>
		    </div>
        </main>
    @endsection