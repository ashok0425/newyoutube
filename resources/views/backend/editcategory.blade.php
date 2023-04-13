@php
    define('PAGE','category')
@endphp
@extends('admin.admin_master')
@section('main-content')


    <div class="card-body">
        <p class="card-description font-weight-bold">Edit Category</p>
        <form class="forms-sample" action="{{route('admin.category.update',['id'=>$cat->id])}}" method="POST" enctype="multipart/form-data">
        @csrf


          <div class="form-group">
            <label for="exampleInputEmail1">Category Nepali</label>
            <input type="text" class="form-control"  placeholder="Category Nepali" name="category" value="{{$cat->category}}">
            @error('category')
            <span class="text-danger"> {{$message}}</span>
           @enderror
          </div>

          {{-- <div class="form-group">
            <label for="exampleInputEmail1">Category English</label>
            <input type="text" class="form-control"  placeholder="Category English" name="category_en" value="{{$cat->categor_en}}">
            @error('category_en')
            <span class="text-danger"> {{$message}}</span>
           @enderror
          </div> --}}

           <div class="form-group">
            <label for="exampleInputEmail1">Category image</label>
            <input type="file" class="form-control"  name="file">
            @error('file')
            <span class="text-danger"> {{$message}}</span>
           @enderror
           <img src='{{asset($cat->image)}}' width='70' />
          </div>
          <button type="submit" class="btn btn-primary mr-2">Save</button>
        <a class="btn btn-dark" href="{{route('admin.category')}}">Back</a>
        </form>
      </div>


@endsection
