@php
    define('PAGE','role')
@endphp
@extends('admin.admin_master')
@section('main-content')


<div class="content-wrapper">





<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Writer List </h4>


              <div class="template-demo">
  <a href="{{ route('add.writer')  }}"><button type="button" class="btn btn-primary btn-fw" style="float: right;">Add Writer</button></a>
              </div>


                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th>Name </th>
                            <th>Role </th>
                            <th> Action </th>

                          </tr>
                        </thead>
                        <tbody>
               @php($i = 1)
           @foreach($writer as $row)
      <tr>
        <td> {{ $i++ }} </td>
        <td> {{ $row->name }} </td>

        <td>

          @if($row->category == 1)
          <span class="badge badge-success">Category</span>
          @else
          @endif

           @if($row->district == 1)
          <span class="badge badge-info">District</span>
          @else
          @endif


           @if($row->post == 1)
          <span class="badge badge-primary">Post</span>
          @else
          @endif


           @if($row->setting == 1)
          <span class="badge badge-danger">Setting</span>
          @else
          @endif




           @if($row->gallery == 1)
          <span class="badge badge-info">Gallery</span>
          @else
          @endif

           @if($row->ads == 1)
          <span class="badge badge-primary">Ads</span>
          @else
          @endif

            @if($row->role == 1)
          <span class="badge badge-danger">Role</span>
          @else
          @endif

          @if($row->thought == 1)
          <span class="badge badge-danger">Thought</span>
          @else
          @endif

          @if($row->livetv == 1)
          <span class="badge badge-danger">Live tv</span>
          @else
          @endif

        </td>







        <td>
    <a href="{{ route('edit.writer',$row->id) }}" class="btn btn-info">Edit</a>
    <a href="{{route('delete.writer',$row->id)}} " onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>

         </td>
      </tr>
      @endforeach

                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>
              </div>









@endsection
