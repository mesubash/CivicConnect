@extends('layouts.UserNavbar')
@section('navbar')
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
    </style>
      
       <center><marquee scrollamount="35"><p class="lead" id="p">Note:Your complain are strcitly monitored please donot wrtie unecessary complain</p></center></marquee>
         <hr>
    
           <center><button type="button" class=" btn btn-outline-success btn-lg" data-toggle="modal" data-target="#exampleModal" id="btn1">
            Register a Complain
           </button>
        </center>
    

<!-- Modal -->
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
          <form enctype="multipart/form-data" id="form">
            <div class="form-group">
                <label for="name">Tile</label>
                <input type="text" class="form-control" name="title" id=""> 
            </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Problem Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
           </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Choose Image</label>
           <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="btn" class="btn btn-success">Submit</button>
      </div>
    </div>
  </div>
</div>
@endsection