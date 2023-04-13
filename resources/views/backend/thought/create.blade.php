@php
    define('PAGE','district')
@endphp
@extends('admin.admin_master')
@section('main-content')


    <div class="card-body">
        <p class="card-description font-weight-bold">Edit Thought</p>
        <form class="forms-sample" action="{{route('admin.thought.store')}}" method="POST">
        @csrf
          <div class="form-group">
            <label for="exampleInputUsername1">Thought Nepali</label>
          <input type="text" class="form-control" placeholder="Thought Nepali " name="thought"  required>
            @error('thought')
             <span class="text-danger"> {{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">Thought English</label>
          <input type="text" class="form-control" placeholder="Thought Engliish " name="thought_en"  required>
            @error('thought_en')
             <span class="text-danger"> {{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">Author Nepali</label>
          <input type="text" class="form-control" placeholder="Author Engliish " name="author"  required>
            @error('thought_en')
             <span class="text-danger"> {{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">Author English</label>
          <input type="text" class="form-control" placeholder="Author Engliish " name="author_en" required>
            @error('author_en')
             <span class="text-danger"> {{$message}}</span>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary mr-2">Add</button>
        <a class="btn btn-dark" href="{{route('admin.thought')}}">Back</a>
        </form>
      </div>


@endsection
