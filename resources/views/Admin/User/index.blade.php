@extends('layouts.Admin')
  @section('content')
    <main class="mt-5 pt-5 me-3" id="main">
      <table class="table table-bordered ms-1" id="table">
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
        viewUrl='{{route('admin.user.view',123)}}'
        viewUrl=viewUrl.replace(123,'')
        $("#table").DataTable(
        {
          processing:true,
          serverSide:true,
          ajax:
          {
            url:"{{route('admin.user')}}"
          },
          columns:
          [{
            data:'id'
          },
          {
            data:'name'
          },
          {
            data:'email',
          },
          {
            data:function(row)
            {
              return '<a class="btn btn-success btn-sm" href="'+viewUrl+row.id+'"><i class="bi bi-eye"></i></a>';
            },
            searchable:true,
            orderable:true
          }]
        })
      })
    </script>
  @endsection



            





