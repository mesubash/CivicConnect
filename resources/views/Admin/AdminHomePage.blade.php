@extends("layouts.GovBody")
@section('Content') 

<div class="table-container m-1">
  <table class="table table-bordered table-hover">
    <!-- Table Header -->
    <thead class="thead-dark">
      <tr>
        <th scope="col-lg">TopVotedIssue</th>
        <th scope="col">Description</th>
        <th scope="col">No of voted</th>
        {{-- <th scope="col">Photo</th>
        <th scope="col">Complain_Id</th>
        <th scope="col">RegsTimeStamp</th>
        <th scope="col">Modify</th> --}}
      </tr>
    </thead>
    <tbody>
      @foreach($data as $item)
      <tr>
        <th scope="row">{{$item->Name}}</th>
        <td>{{$item->Description}}</td>
        <td>{{$item->Vote}}</td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection