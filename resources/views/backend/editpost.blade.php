@php
    define('PAGE','post')
@endphp
@extends('admin.admin_master')
@section('main-content')
<div class="card-body">
    <h4 class="card-title">Edit Post</h4>
<form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{route('admin.post.update',['id'=>$post->id])}}">
      @csrf
        <div class="row">  {{-- row start --}}
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputName1">Title Nepali</label>
                <input type="text" class="form-control"  name="title" value="{{ $post->title}} ">
                    @error('title')
                    <span class="text-danger"> {{$message}}</span>
                   @enderror
                  </div>

            </div>
            {{-- <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputName1">Title English</label>
                <input type="text" class="form-control"  name="title_en" value="{{ $post->title_en}} ">
                    @error('title_en')
                    <span class="text-danger"> {{$message}}</span>
                   @enderror
                  </div>

            </div> --}}
        </div>{{-- row end --}}
        <div class="row">  {{-- row start --}}
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputName1">Select Category</label>

                    <select name="category" id="category" class="form-control" required>

                            @foreach ($category as $item)
                            <option value="{{$item->id}}" {{$item->id==$post->category_id ?'selected':''}}>{{$item->category}}</option>

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

                        <select name="subcategory" id="subcategory" class="form-control">
                            @foreach ($subcategory as $item)
                            <option value="{{$item->id}}" {{$item->id==$post->subcategory_id ?'selected':''}}>{{$item->subcategory}}</option>

                            @endforeach
                            </select>
                        @error('subcategory')
                        <span class="text-danger"> {{$message}}</span>
                       @enderror
                    </div>
                  </div>
            </div>
        </div>{{-- row end --}}
        <div class="row">  {{-- row start --}}
            {{-- <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputName1">Select District</label>

                    <select name="district" id="districts" class="form-control" required>

                            @foreach ($district as $item)
                            <option value="{{$item->id}}" {{$item->id==$post->district_id ?'selected':''}}>{{$item->district}}</option>

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

                            @foreach ($subdistrict as $item)
                            <option value="{{$item->id}}" {{$item->id==$post->subdistrict_id ?'selected':''}}>{{$item->city}}</option>

                            @endforeach

                            </select>
                        @error('subdistrict')
                        <span class="text-danger"> {{$message}}</span>
                       @enderror
                    </div>
                  </div>
            </div> --}}
        </div>{{-- row end --}}
        <div class="row">  {{-- row start --}}
            <div class="col-md-12">
                <div class="form-group">
                    <label>Image New upload (500X300)</label>
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                      <span class="input-group-append">
                        <input class="file-upload-browse btn btn-primary" type="file" name="img">
                      </span>
                    </div>
                <div class="form-group">
<br>
                    <label>Present Image</label>
                    <br>
                <img src="{{asset($post->img)}}" alt="" width="200" width="100">
                <input type="hidden" name="oldimage" value="{{$post->img}}">
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
                        <textarea class="form-control" id="summernote2" rows="4" name="detail" required>{!!$post->detail!!}</textarea>
                    @error('detail')
                    <span class="text-danger"> {{$message}}</span>
                   @enderror
                  </div>
                </div>

{{-- 
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleTextarea1">Detail English</label>
                        <textarea class="form-control" id="summernote1" rows="4" name="detail_en" required>{!!$post->detail_en!!}</textarea>
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
                    <input type="checkbox" class="form-check-input" name="headline" value="1" {{$post->headline==1 ? "checked":''}}> Trending <i class="input-helper"></i></label>
            </div>
            <div class="col-md-3">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="main" value="1" {{$post->main==1 ? "checked":''}}> Main <i class="input-helper"></i></label>
            </div>
        </div>
        {{-- row end  --}}
       <br>
      <button type="submit" class="btn btn-primary mr-2">Save</button>
    </form>
  </div>

@endsection
