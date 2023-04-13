@php
    define('PAGE','category')
@endphp
@extends('admin.admin_master')
@section('main-content')


    <div class="card-body">
        <p class="card-description font-weight-bold">Create New Category</p>
        <form class="forms-sample" action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

          <div class="form-group">
            <label for="exampleInputEmail1">Category Nepali</label>
            <input type="text" class="form-control"  placeholder="Category Nepali" name="category"  value="{{old('category')}}" required id="category">
            @error('category')
            <span class="text-danger"> {{$message}}</span>
           @enderror
          </div>
          {{-- <div class="form-group">
            <label for="exampleInputEmail1">Category English </label>
            <input type="text" class="form-control"  placeholder="Category English" name="category_en" id="category" required>
            @error('category_en')
            <span class="text-danger"> {{$message}}</span>
           @enderror
          </div> --}}
          <div class="form-group">
            <label for="exampleInputEmail1">Slug </label>
            <input type="text" class="form-control"  placeholder="Slug" name="slug" readonly id="slug">
            @error('slug')
            <span class="text-danger"> {{$message}}</span>
           @enderror
          </div>

           <div class="form-group">
            <label for="exampleInputEmail1"> image</label>
            <input type="file" class="form-control"  name="file">
            @error('file')
            <span class="text-danger"> {{$message}}</span>
           @enderror
          </div>
          <button type="submit" class="btn btn-primary mr-2">Add</button>
        <a class="btn btn-dark" href="{{route('admin.category')}}">Back</a>
        </form>
      </div>


@endsection

@push('script')
<script>

    $(document).ready(function(){
        $('#category').change(function(){
           let $value=$(this).val();
        $.ajax({
            url:'{{url('admin/loadslug')}}/'+$value,
            type:'GET',
            dataType:'json',
            success:function(data){
                console.log(data)
                $('#slug').val(data);
            }
        })
    })
    })
</script>

@endpush
