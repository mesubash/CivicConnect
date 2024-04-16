@extends('Layouts.app')
	@section('style')
		<link href="{{ asset('css/UserProfile.css') }}" rel="stylesheet">
	@endsection

	@section('content')
	 	<div class="container">
			<div class="row gutters">
				<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
					<div class="card h-90">
						<div class="card-body">
							<div class="account-settings">
								<div class="user-profile">
									<div class="user-avatar">
										@if(Auth::user()->p_image)
											<img src="{{ asset('profile_photo/' . Auth::user()->p_image) }}"  alt="Maxwell Admin" id="myImg" class="rounded-circle">
										@else
											<img src="{{asset('profile_photo/no_profile.jpeg')}}"  alt="Maxwell Admin" id="myImg" class="rounded-circle">
										@endif	
									</div>	
								<h5 class="user-name text-success text-capitalize h3">{{Auth::user()->name}}</h5>
								<h6 class="user-email">{{Auth::user()->email}}</h6>
							</div>
						<div class="about">
							<h5 class="lead text-danger">Complain Registration list</h5>
						</div>
						@foreach($data as $item)
	            			<ul class="list-group">
								@if($item->title)
	                				<li class="list-group-item list-group-item-danger list-group-item-action text-capitalize" data-toggle="modal" data-target="#exampleModal">{{$item->title}}</li>
								@endif
	            			</ul>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
			<div class="card h-80">
				<div class="card-body">
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<h6 class="mb-2 text-primary">Personal Details</h6>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<form enctype="multipart/form-data" id="form" method="POST">
								@csrf
							<div class="form-group">
								<label for="fullName">Firstname</label>
								<input type="text" class="form-control text-danger text-capitalize" id="fullName" placeholder="First Name" name="Firstname" value="{{Auth::user()->name}}">
							</div>
						</div>
	            		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="fullName">Surname</label>
								<input type="text" class="form-control" id="fullName" placeholder="Surname" name="Surname">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="eMail">Email</label>
								<input type="email" class="form-control text-danger" id="eMail" placeholder=" Email" name="Email" value="{{Auth::user()->email}}">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="phone">Phone</label>
								<input type="text" class="form-control text-danger" id="phone" placeholder="Phone number" name="phone_number" value="{{ isset(Auth::user()->phone_number) ? Auth::user()->phone_number : '' }}"> 
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="photo">Profile Picture</label>
								<input type="file" class="form-control" id="photo" placeholder="Upload Your Proflie Photo" name="p_photo">
							</div>
						</div>
					</div>
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<h6 class="mt-3 mb-2 text-primary">Address</h6>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="Street">Address</label>
								<input type="text" class="form-control" id="Street" placeholder="Address" name="Address">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="sTate">Ward</label>
								<input type="text" class="form-control" id="sTate" placeholder="State" name="Ward">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="zIp">Zip Code</label>
								<input type="text" class="form-control" id="zIp" placeholder="Zip Code">
							</div>
						</div>
					</div>
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="text-right">
								<button type="reset" class="btn btn-secondary">Cancel</button>
								<button type="button" id="update" name="submit" class="btn btn-primary">Update</button>
							</div>
						</div>
					</div>
				</form>
				</div>
			</div>
		</div>

	  {{-- Complain Body Modal Box --}}
	  	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  		<div class="modal-dialog" role="document">
	    		<div class="modal-content">
	      			<div class="modal-header">
	        			<h5 class="modal-title" id="exampleModalLabel">Complain</h5>
	        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          				<span aria-hidden="true">&times;</span>
	        			</button>
	     		 	</div>
	      			<div class="modal-body">
	        			<form enctype="multipart/form-data" id="form">
	            			<div class="form-group">
	                			<label for="name">Name</label>
	            				<input type="text" class="form-control" name="name" id="">  
	            			</div>
							<div class="form-group">
	               		 		<label for="title">Title</label>
	                			<input type="text" class="form-control" name="title" id=""> 
	            			</div>
	            			<div class="form-group">
	                			<label for="category">Category</label>
	               				<select id="category" class="form-control" name="Category">
	                   				<option selected>Management</option>
	                    			<option>Road Infrastructure</option>
	                    			<option>Food and Water</option>
	                    			<option>Health and Sanitaion</option>
	                    			<option>Transprotation</option>
	                    			<option>Social Security</option>
	                    			<option>All</option>
	                    			<option>Others</option>
	                			</select>
	              			</div>
	        				<div class="form-group">
	            				<label for="exampleFormControlTextarea1">Problem Description</label>
	            				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
	           				</div>
	        				<div class="form-group">
	            				<label for="exampleFormControlFile1">Choose Image</label>
	           					<input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
	          				</div>
	          				<div class="form-group">
	            				<label for="status">Status:</label>
	             				<span class="badge badge-danger" id="status">Reamaining</span>
	          				</div>
	      					<div class="modal-footer">
	        					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        					<button id="btn" class="btn btn-success">Update</button>
	      				</form>
	      			</div>
	    		</div>
	  		</div>
		</div>
	@endsection
	@section('script')
		<script>
			// Get the modal
			var modal = document.getElementById("myModal");

			// Get the image and insert it inside the modal - use its "alt" text as a caption
			var img = document.getElementById("myImg");
			var modalImg = document.getElementById("img01");
			var captionText = document.getElementById("caption");
			img.onclick = function()
			{
	  			modal.style.display = "block";
	  			modalImg.src = this.src;
	  			captionText.innerHTML = this.alt;
			}	

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close1")[0];

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() 
			{ 
	  		modal.style.display = "none";
			}
	 		function openModal() 
			{
	    	    $('#photoModal2').modal('show');    
	    	}
		</script>
		<script>
			$(document).ready(function()
			{
				let user_id="{{Auth::user()->id}}"
				let updateUrl='{{route('user.profile.update',123)}}'
				updateUrl=updateUrl.replace(123,user_id)
				$("#update").click(function(e)
				{	
					e.preventDefault()
					$.ajax(
					{	
						url:updateUrl,
						type:"POST",
						data:new FormData($('#form')[0]),
						contentType:false,
						processData:false,
						success:function()
						{
							swal(
								{
									title:"Succesfully Updated",
									icon:"success",
									button:true
								})
						},
						error:function(xhr)
						{
                			console.log(xhr.responseText);
            			}  
					})

				})
			})
		</script>	
	@endsection