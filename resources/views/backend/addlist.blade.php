@php
    define('PAGE','add')
@endphp
@extends('admin.admin_master')
@section('main-content')
 <div class="card-body">
    <div class="template-demo" style="display:flex; margin-bottom:1rem;">
        <a type="button" class="btn btn-primary btn-icon-text"style="margin-left:auto;" href="{{route('admin.add.create')}}"> <i class="mdi mdi-plus btn-icon-prepend" ></i>Add New Photo</a>

    </div>
                    <div class="table-responsive">
                      <table class="table-striped table text-center" id="table_id" class="display">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th> Image</th>
                            <th>Link</th>
                            <th>page</th>
                            <th>Place</th>

                            <th> Operation </th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1
                            @endphp
                            @foreach ($add as $item)
                            <tr>
                                <td class="py-1">
                                  {{$i++}}
                                </td>
                            <td> <img src="{{asset($item->img)}}" alt="{{asset($item->img)}}"></td>
                            <td > {{Str::limit($item->link,40) }}</td>

                            <td >
@if ($item->page==1)
<span>Home </span>
@elseif($item->page==2)
<span >Category </span>
@elseif($item->page==3)
<span >Single</span>


@endif

                            </td>

<td>
  {{ $item->place }}
</td>
                                <td>

                                    <a href="{{route('admin.add.delete',['id'=>$item->id])}}" class="btn btn-sm btn-danger">Delete</a></td>

                              </tr>

                            @endforeach

                        </tbody>
                      </table>
                    </div>
                  </div>
@endsection
