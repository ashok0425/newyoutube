@php
    define('PAGE','district')
@endphp
@extends('admin.admin_master')
@section('main-content')


    <div class="card-body">
        <p class="card-description font-weight-bold">Edit District</p>
        <form class="forms-sample" action="{{route('admin.district.update',['id'=>$dist->id])}}" method="POST">
        @csrf
          <div class="form-group">
            <label for="exampleInputUsername1">District Nepali</label>
          <input type="text" class="form-control" placeholder="District " name="district" value="{{$dist->district}}" required>
            @error('district')
             <span class="text-danger"> {{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">District English</label>
          <input type="text" class="form-control" placeholder="District " name="district_en" value="{{$dist->district_en}}" required>
            @error('district_en')
             <span class="text-danger"> {{$message}}</span>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary mr-2">Add</button>
        <a class="btn btn-dark" href="{{route('admin.district')}}">Back</a>
        </form>
      </div>


@endsection
