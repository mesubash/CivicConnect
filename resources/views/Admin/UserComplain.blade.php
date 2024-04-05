@extends('layouts.Admin')
    @section('content')
        <main class="mt-5 pt-5 me-4" id="main">
            {{-- <div class="card">
                <div class="card-header">  --}}
                        <center><h3 class="text text-primary">User's Complain</h3></center>
                {{-- </div> --}}
                <table class="table table-bordered ms-1" id="table">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 12%" >Complain_id</th>
                            <th scope="col" style="width: 10%" >Name</th>
                            <th scope="col" style="width: 15%">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col" style="width: 40%">Issue</th>
                            <th scope="col" style="width: 10%">User_Id</th>
                            <th scope="col" style="width: 20%">Image</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                </table>
            {{-- </div> --}}
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
                        ajax:"{{route('admin.usercomplain')}}",
                        columns:[
                            {
                             data:'complain_id'
                            },
                            {
                                data:'name'
                            },
                            {
                                data:'title'
                            },
                            {
                                data:'category'
                            },
                            {
                                data:'problem'
                            },
                            {
                                data:'user_id'
                            },
                            {
                                data:'image',
                                render:function(data)
                                {
                                if(data!=null)
                                    {
                                    return'<img src="{{ asset("Image") }}/' + data + '"class="ms-2" height=75px" width="75px">';
                                    }
                                else
                                    {
                                    return '';
                                    }
                                }
                            },
                            {
                            data:'action'
                            }
                            ],
                        searchable:true,
                        orderable:true
                }) 
            })    
        </script>
    @endsection
