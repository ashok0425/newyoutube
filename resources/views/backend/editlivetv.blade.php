@php
    define('PAGE','livetv')
@endphp
@extends('admin.admin_master')
@section('main-content')


    <div class="card-body">
        <p class="card-description font-weight-bold">Edit LiveTv</p>
        <form class="forms-sample" action="{{route('admin.livetv.update')}}" method="POST">
        @csrf

        <div class="form-group">
          @if ($livetv->status==1)
          <a href="{{route('livetv.deactive')}}" class="btn btn-danger btn-fw">Deactive</a>
          <br>
          <small class="text-success mt-2">LiveTv is Actived now</small>
@else

      <a href="{{route('livetv.active')}}" class="btn btn-success btn-fw">Active</a>
      <br>
          <small class="text-danger mt-2">LiveTv is Deactived now</small>
      @endif
        </div>


        <div class="form-group">
            <div class="input-group">
                <textarea type="text" class="form-control" placeholder="google verification" aria-label="Recipient's username" aria-describedby="basic-addon2" name="embed_link" >{{$livetv->embed_link}}</textarea>
                <div class="input-group-append">
                  <button class="btn btn-sm btn-facebook" type="button">
                    LiveTV Link
                  </button>
                </div>
              </div>

            @error('embed_link')
             <span class="text-danger"> {{$message}}</span>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary mr-2">Save</button>
        </form>
      </div>


@endsection
