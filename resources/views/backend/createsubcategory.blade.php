@php
    define('PAGE','category')
@endphp
@extends('admin.admin_master')
@section('main-content')

    <div class="card-body">
        <p class="card-description font-weight-bold">Create New Subcategory</p>
        <form class="forms-sample" action="{{route('admin.subcategory.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputUsername1">Select Category </label>
            <select name="category" id="" class="form-control">
            <option value=""  >--select category</option>

                @foreach ($category as $item)
                <option value="{{$item->id}}">&nbsp;{{$item->category}}</option>

                @endforeach


            </select>
            @error('category')
             <span class="text-danger"> {{$message}}</span>
            @enderror
          </div>
          {{-- <div class="form-group">
            <label for="exampleInputUsername1">Subcategory English</label>
            <input type="text" class="form-control" placeholder="Subcategory English" name="subcategory_en">
            @error('subcategory_en')
             <span class="text-danger"> {{$message}}</span>
            @enderror
          </div> --}}
          <div class="form-group">
            <label for="exampleInputEmail1">Subcategory </label>
            <input type="text" class="form-control"  placeholder="Subcategory Nepali" name="subcategory" id="subcategory">
            @error('subcategory')
            <span class="text-danger"> {{$message}}</span>
           @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Slug </label>
            <input type="text" class="form-control"  placeholder="Slug" name="slug" readonly id="slug">
            @error('slug')
            <span class="text-danger"> {{$message}}</span>
           @enderror
          </div>
          <button type="submit" class="btn btn-primary mr-2">Add</button>
        <a class="btn btn-dark" href="{{route('admin.subcategory')}}">Back</a>
        </form>
      </div>

@endsection



@push('script')
<script>

    $(document).ready(function(){
        $('#subcategory').change(function(){
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
