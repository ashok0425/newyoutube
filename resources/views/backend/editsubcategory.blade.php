@php
    define('PAGE','category')
@endphp
@extends('admin.admin_master')
@section('main-content')

    <div class="card-body">
        <p class="card-description font-weight-bold">Edit Subcategory</p>
    <form class="forms-sample" action="{{route('admin.subcategory.update',['id'=>$sub->id])}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputUsername1">Select Category </label>
            <select name="category" id="" class="form-control" required>
            <option value="">--select category</option>

                @foreach ($category as $item)
                <option value="{{$item->id}}" {{$item->id==$sub->cat->id ? 'selected':''}} >{{$item->category}}</option>

                @endforeach


            </select>
            @error('category')
             <span class="text-danger"> {{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">Subategory </label>
          <input type="text" class="form-control" placeholder="Subcategory English" name="subcategory" value="{{$sub->subcategory}}" required>
            @error('subcategory')
             <span class="text-danger"> {{$message}}</span>
            @enderror
          </div>
          {{-- <div class="form-group">
            <label for="exampleInputUsername1">Subategory </label>
          <input type="text" class="form-control" placeholder="Subcategory English" name="subcategory_en" value="{{$sub->subcategory_en}}" required>
            @error('subcategory_en')
             <span class="text-danger"> {{$message}}</span>
            @enderror
          </div> --}}

          <button type="submit" class="btn btn-primary mr-2">save</button>
        <a class="btn btn-dark" href="{{route('admin.subcategory')}}">Back</a>
        </form>
      </div>

@endsection
