@extends('layouts.Admin')
@section('content')
<main class="mt-5 pt-3" id="main">
<table class="table table-bordered" id="table">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
</table>
</main>
@endsection
@section('script')
<script>
  $(document).ready(function()
  {
    $("#table").DataTable(
      {
       processing:true,
       serverSide:true,
       ajax:{
        url:"{{route('admin.user')}}"
       },
       columns:[
        {
          data:'id'
  
        },
        {
          data:'name'
  

        },
        {
          data:'email',

        },
        {
          data:'action',
          searchable:true,
          orderable:true
        }
       ]
      }
    )
  })
  </script>
@endsection



            





