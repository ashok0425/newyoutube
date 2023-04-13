@php
    define('PAGE','add')
@endphp
@extends('admin.admin_master')
@section('main-content')
<div class="card-body">
    <h4 class="card-title">Add New Advertisement</h4>
<form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{route('admin.add.store')}}">
      @csrf
        <div class="row">  {{-- row start --}}
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputName1">Advertisement Link </label>
                    <input type="text" class="form-control" id="exampleInputName1" name="link">
                    @error('link')
                    <span class="text-danger"> {{$message}}</span>
                   @enderror
                  </div>

            </div>

        </div>{{-- row end --}}


        <div class="row">  {{-- row start --}}
            <div class="col-md-12">
                <div class="form-group">
                    <label>Image upload </label>
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                      <span class="input-group-append">
                        <input class="file-upload-browse btn btn-primary" type="file" name="img">
                      </span>
                    </div>
                    @error('img')
                    <span class="text-danger"> {{$message}}</span>
                   @enderror
                  </div>
            </div>
        </div>{{-- row end --}}

        <div class="row">
            <div class="col-md-12">
             <div class="form-group">
                 <label for="exampleInputName1">Pages</label>
                 <select class="form-control" name="page">
                    <option value="">--Select pages--</option>

               <option value="1">Home </option>

               <option value="2">Category page</option>
               <option value="3">Single Page</option>


  </select>
                                   @error('page')
                                   <span class="text-danger"> {{$message}}</span>
                                  @enderror
               </div>
            </div>

         </div>
        <div class="row">
           <div class="col-md-12">
            <div class="form-group">
                <label for="exampleInputName1">Add Place</label>
             <input type="number" name="place" class="form-control">
                                  @error('place')
                                  <span class="text-danger"> {{$message}}</span>
                                 @enderror
              </div>
           </div>

        </div>
        {{-- row end  --}}
       <br>
      <button type="submit" class="btn btn-primary mr-2">Add</button>
    </form>
  </div>

@endsection
