@php
    define('PAGE','district')
@endphp
@extends('admin.admin_master')
@section('main-content')

    <div class="card-body">
        <p class="card-description font-weight-bold">Create New City</p>
        <form class="forms-sample" action="{{route('admin.subdistrict.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputUsername1">Select District </label>
            <select name="district" id="" class="form-control">
            <option value=""  >--select category</option>

                @foreach ($district as $item)
                <option value="{{$item->id}}">{{$item->district}}</option>

                @endforeach


            </select>
            @error('district')
             <span class="text-danger"> {{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">City English</label>
            <input type="text" class="form-control" placeholder="Subdistrict English" name="subdistrict_en">
            @error('subdistrict_en')
             <span class="text-danger"> {{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">City </label>
            <input type="text" class="form-control"  placeholder="City" name="city">
            @error('city')
            <span class="text-danger"> {{$message}}</span>
           @enderror
          </div>

          <button type="submit" class="btn btn-primary mr-2">Add</button>
        <a class="btn btn-dark" href="{{route('admin.subdistrict')}}">Back</a>
        </form>
      </div>

@endsection
