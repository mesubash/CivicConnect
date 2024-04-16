@extends('layouts.app')
@section('style')
<style>
    #btn1{
        position: relative;
        top:4em;
    }
    #p{
        font-size: 3em;
        margin-top:1em; 
        color: red;
        
    }
    #p:hover{
        opacity: 0.6;
    }
    body{
      background-color: #f8f9fa;
    }
    </style>
  @endsection
   
     @section('content')
       <center><marquee scrollamount="15"><p class="lead" id="p">Note:Your complain are strcitly monitored please donot wrtie unecessary complain</p></center></marquee>
         <hr>
    
           <center><button type="button" class=" btn btn-outline-primary btn-lg" data-toggle="modal" data-target="#exampleModal" id="btn1">
            Register a Complain
           </button>
        </center>
    


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
        <form enctype="multipart/form-data" method="POST"  id="form">
          @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control text-capitalize" name="name" id="" value="{{Auth::user()->name}}" readonly> 
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id=""> 
            </div>
            <div class="form-group">
               <label for="category">Category</label>
                <select id="category" class="form-control" name="category">
                    <option value="Management">Management</option>
                    <option value="RoadInfrastructure">Road Infrastructure</option>
                    <option value="FoodWater">Food and Water</option>
                    <option value="HealthSanitation">Health and Sanitaion</option>
                    <option value="Transportation">Transprotation</option>
                    <option value="SocialSecurity">Social Security</option>
                    <option value="All">All</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Problem Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="problem"></textarea>
           </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Choose Image</label>
           <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="btn" class="btn btn-primary">Submit</button>
    </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
  <script>
$(document).ready(function(){
    $("#btn").click(function(e){
        e.preventDefault(); 
        $.ajax({
            url: "{{ route('user.storecomplain') }}",
            type: "POST",
            data: new FormData($('#form')[0]),
            contentType:false,
            processData:false,
            success: function(response) {
                swal({
                  title:"Registered Sucessfully",
                  icon:"success",
                  button:true,
                })
                $("#form")[0].reset();
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }  
        });
    });
});
  </script>
@endsection
