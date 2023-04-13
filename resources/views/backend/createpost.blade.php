@php
    define('PAGE','post')
@endphp
@extends('admin.admin_master')
@section('main-content')
<div class="card-body">
    <h4 class="card-title">Add New Post</h4>
<form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{route('admin.post.store')}}">
      @csrf
        <div class="row">  {{-- row start --}}
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputName1">Title Nepali</label>
                    <input type="text" class="form-control"  name="title" id="title">
                    @error('title')
                    <span class="text-danger"> {{$message}}</span>
                   @enderror
                  </div>

            </div>
            {{-- <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputName1">Title English</label>
                    <input type="text" class="form-control"  name="title_en" id="title">
                    @error('title_en')
                    <span class="text-danger"> {{$message}}</span>
                   @enderror
                  </div>

            </div> --}}
        </div>{{-- row end --}}

        <div class="row">  {{-- row start --}}
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputName1">Slug</label>
                    <input type="text" class="form-control"  name="slug" id="slug" readonly>
                    @error('slug')
                    <span class="text-danger"> {{$message}}</span>
                   @enderror
                  </div>

            </div>

        </div>{{-- row end --}}


        <div class="row">  {{-- row start --}}
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputName1">Select Category</label>

                    <select name="category" id="category" class="form-control">
                        <option value="">--select category</option>

                            @foreach ($category as $item)
                            <option value="{{$item->id}}">{{$item->category}}</option>

                            @endforeach


                        </select>
                    @error('category')
                    <span class="text-danger"> {{$message}}</span>
                   @enderror
                </div>

            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleInputName1">Select Subcategory</label>

                        <select name="subcategory" id="subcategory" class="form-control" >
                            <option value=""  >--select subcategory--</option>
                            </select>
                        @error('subcategory')
                        <span class="text-danger"> {{$message}}</span>
                       @enderror
                    </div>
                  </div>
            </div>
        </div>{{-- row end --}}
{{--         

        <div class="row"> 
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputName1">Select District</label>

                    <select name="district" id="districts" class="form-control" required>
                        <option value=""  >--select district</option>

                            @foreach ($district as $item)
                            <option value="{{$item->id}}">{{$item->district}}&nbsp;|&nbsp;{{$item->district_np}}</option>

                            @endforeach


                        </select>
                    @error('district')
                    <span class="text-danger"> {{$message}}</span>
                   @enderror
                </div>

            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleInputName1">Select Subistrict</label>

                        <select name="subdistrict" id="subdistrict" class="form-control">
                            <option value=""  >--select subcategory--</option>

                            </select>
                        @error('subdistrict')
                        <span class="text-danger"> {{$message}}</span>
                       @enderror
                    </div>
                  </div>
            </div>
        </div>
         --}}

        <div class="row">  {{-- row start --}}
            <div class="col-md-12">
                <div class="form-group">
                    <label>Image upload (500X300)</label>
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                      <span class="input-group-append">
                        <input class="file-upload-browse btn btn-primary" type="file" name="img" required>
                      </span>
                    </div>
                    @error('img')
                    <span class="text-danger"> {{$message}}</span>
                   @enderror
                  </div>
            </div>
        </div>{{-- row end --}}

        <div class="row">  {{-- row start --}}

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleTextarea1">Detail Nepali</label>
                        <textarea class="form-control" id="summernote2" rows="4" name="detail" required></textarea>
                    @error('detail')
                    <span class="text-danger"> {{$message}}</span>
                   @enderror
                  </div>
                </div>
        </div>{{-- row end --}}

        <div class="row">  {{-- row start --}}

            {{-- <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleTextarea1">Detail English</label>
                    <textarea class="form-control" id="summernote1" rows="4" name="detail_en" ></textarea>
                @error('detail_en')
                <span class="text-danger"> {{$message}}</span>
               @enderror
              </div>
            </div> --}}
    </div>{{-- row end --}}
        <br>

        <hr>
        <h4 class="text-center">Extra Option</h4>
        <hr>
       <br>

        <div class="row">
            <div class="col-md-3">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="headline" value="1"> Trending <i class="input-helper"></i></label>
            </div>
            <div class="col-md-3">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="main" value="1">Main <i class="input-helper"></i></label>
            </div>
        </div>
        {{-- row end  --}}
       <br>
      <button type="submit" class="btn btn-primary mr-2">Add</button>
    </form>
  </div>

@endsection

@push('script')
<script>

    $(document).ready(function(){

        $('#title').change(function(){

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

