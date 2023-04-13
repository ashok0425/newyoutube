@php
    define('PAGE','category')
@endphp
@extends('admin.admin_master')
@section('main-content')

 <div class="card-body">
    <div class="template-demo" style="display:flex; margin-bottom:1rem;">
        <a type="button" class="btn btn-primary btn-icon-text"style="margin-left:auto;" href="{{route('admin.category.create')}}"> <i class="mdi mdi-plus btn-icon-prepend" ></i>Add Category</a>

    </div>
                    <div class="table-responsive">
                      <table class="table-striped table text-center" id="table_id" class="display">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th> Category  </th>
                            <th>  Image </th>
                            <th> Operation </th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1
                            @endphp
                            @foreach ($arr as $item)
                            <tr>
                                <td class="py-1">
                                  {{$i++}}
                                </td>
                            <td> {{$item->category}}</td>
                            <td>   <img src='{{asset($item->image)}}' width='70' /></td>

                                <td>

                                <a href="{{route('admin.category.edit',['id'=>$item->id])}}  " class="btn btn-sm btn-info">Edit</a>
                                    <a href="{{route('admin.category.delete',['id'=>$item->id])}}" class="btn btn-sm btn-danger">Delete</a></td>

                              </tr>
                            @endforeach

                        </tbody>
                      </table>
                    </div>
                  </div>
@endsection
