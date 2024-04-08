@extends('layouts.Admin')
    @section('style')
        <style>
            #myImg {
              border-radius: 5px;
              cursor: pointer;
              transition: 0.3s;
              width:200px;
              height:200px;
            }
            
            #myImg:hover {opacity: 0.7;}
            
            /* The Modal (background) */
            .modal {
              display: none; /* Hidden by default */
              position: fixed; /* Stay in place */
              z-index: 1; /* Sit on top */
              padding-top: 100px; /* Location of the box */
              left: 0;
              top: 0;
              width: 100%; /* Full width */
              height: 100%; /* Full height */
              overflow: auto; /* Enable scroll if needed */
              background-color: rgb(0,0,0); /* Fallback color */
              background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
            }
            
            /* Modal Content (Image) */
            .modal-content {
              margin:auto;
              display: block;
              width: 600px;
              height: 600px;
            }
            
            /* Caption of Modal Image (Image Text) - Same Width as the Image */
            #caption {
              margin: auto;
              display: block;
              width: 80%;
              max-width: 700px;
              text-align: center;
              color: #ccc;
              padding: 10px 0;
              height: 150px;
            }
            
            /* Add Animation - Zoom in the Modal */
            .modal-content, #caption {
              animation-name: zoom;
              animation-duration: 0.6s;
            }
            
            @keyframes zoom {
              from {transform:scale(0)}
              to {transform:scale(1)}
            }
            
            /* The Close Button */
            .close {
              position: absolute;
              top: 100px;
              right: 150px;
              color: #f1f1f1;
              font-size: 40px;
              font-weight: bold;
              transition: 0.3s;
            }
            
            .close:hover,
            .close:focus {
              color: #bbb;
              text-decoration: none;
              cursor: pointer;
            }
            
            /* 100% Image Width on Smaller Screens */
            @media only screen and (max-width:1000px){
              .modal-content {
                width: 60%;
                height:400px;
                
              }
              .close{
                position: absolute;
                top: 70px;
                right:50px;
              }
            }
        </style>
    @endsection
    @section('content')
        <main class="mt-5  pt-5 me-4" id="main"> 
            <!-- Trigger the Modal -->
            @foreach($data as $item)
            
                @if($item->image)
                    <img id="myImg" src="{{asset('image/'.$item->image)}}">
                @endif    
            @endforeach
            <!-- The Modal -->
            <div id="myModal" class="modal">
            
              <!-- The Close Button -->
            <span class="close">&times;</span>
            
              <!-- Modal Content (The Image) -->
             
            <img class="modal-content" id="img01" class="me-1">
            
              <!-- Modal Caption (Image Text) -->
            <div id="caption"></div>
            </div>
            <hr>
            <div class="card card-lg">
                <div class="card-header">
                   Complain Data
                </div>
                <div class="card-body">
                    <div class="table-responsive"> 
                        <table class="table table-bordered" id="table">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 12%" >Complain_id</th>
                                    <th scope="col" style="width: 10%" >Name</th>
                                    <th scope="col" style="width: 15%">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col" style="width: 40%">Issue</th>
                                    <th scope="col" style="width: 10%">User_Id</th>
                                    {{-- <th scope="col" style="width: 20%">Image</th>
                                    <th scope="col">Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)
                                    <tr>
                                        <td>{{$item->complain_id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->category}}</td>
                                        <td>{{$item->problem}}</td>
                                        <td>{{$item->user_id}}</td>
                                    </tr>      
                                @endforeach
                            </tbody>
                        </table>
                    </div>    
                </div>
            </div>
        </main>
    @endsection
    @section('script')
        <script>
            var modal = document.getElementById("myModal");
            var img = document.getElementById("myImg");
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");
            img.onclick = function(){
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }
            var span = document.getElementsByClassName("close")[0];
            span.onclick = function() {
                modal.style.display = "none";
            }
        </script>   
    @endsection
