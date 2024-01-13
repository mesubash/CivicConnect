@extends('layouts.Body')
@section('Content')
<div class="modal" id="myModal" style="z-index: 1050">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">File a Complain</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body">
       <form
        method="POST"
        class="w-100 rounded p-4 border bg-white"
        action="{{url('civiconnect/complain')}}"
        enctype="multipart/form-data"
      >
      @csrf
        <label class="d-block mb-4">
          <span class="d-block mb-2">Subject</span>
          <input
            name="Name"
            type="text"
            class="form-control"
            placeholder="Enter Your Issue"
          />
        </label>

        <div class="mb-4">
          <label class="d-block mb-2">Photo</label>
          <div class="form-control h-auto">
            <input name="Photo" type="file" class="form-control-file" />
          </div>
        </div>

        <label class="d-block mb-4">
          <span class="d-block mb-2">Description</span>
          <textarea
            name="Description"
            class="form-control"
            rows="3"
            placeholder="Please describe your problem"
          ></textarea>
        </label>
      </div>
       <div class="mb-3 ms-5">
         <center> <button type="submit" class="btn btn-primary px-3">Submit</button>
            <form>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></center>
        </div>
    </div>
  </div>
</div>


@endsection