@php
    define('PAGE','district')
@endphp
@extends('admin.admin_master')
@section('main-content')

    <div class="card-body">
        <p class="card-description font-weight-bold">Edit Subdistrict</p>
    <form class="forms-sample" action="{{route('admin.subdistrict.update',['id'=>$sub->id])}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputUsername1">Select District </label>
            <select name="district" id="" class="form-control">
            <option value="">--select category</option>

                @foreach ($category as $item)
                <option value="{{$item->id}}" {{$item->id==$sub->cat->id ? 'selected':''}} >{{$item->district}}</option>

                @endforeach


            </select>
            @error('district')
             <span class="text-danger"> {{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">City Nepali</label>
          <input type="text" class="form-control" placeholder="City " name="city" value="{{$sub->city}}" required>
            @error('city')
             <span class="text-danger"> {{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">City English</label>
          <input type="text" class="form-control" placeholder="City " name="city_en" value="{{$sub->city}}" required>
            @error('city_en')
             <span class="text-danger"> {{$message}}</span>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary mr-2">save</button>
        <a class="btn btn-dark" href="{{route('admin.subcategory')}}">Back</a>
        </form>
      </div>

@endsection
