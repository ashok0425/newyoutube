@php
    define('PAGE','role')
@endphp
@extends('admin.admin_master')
@section('main-content')



<div class="content-wrapper">


<div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Insert User Role</h4>

<form class="forms-sample" method="POST" action="{{ route('store.writer') }}">
  @csrf
  <div class="form-group">
    <label for="exampleInputUsername1">Name</label>
    <input type="text" class="form-control" name="name" required>
    @error('name')
  <span style="color: rgb(82, 2, 2)">{{$message}}</span>
    @enderror
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="email"  required>
    @error('email')
    <span style="color: rgb(82, 2, 2)">{{$message}}</span>
      @enderror
  </div>

 <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" class="form-control" name="password" required>
    @error('password')
    <span style="color: rgb(82, 2, 2)">{{$message}}</span>
      @enderror
  </div>
  <div class="row">

  	<div class="col-md-6">
          <div class="form-group">
            <div class="form-check form-check-primary">
              <label class="form-check-label">
 <input type="checkbox" class="form-check-input" name="category" value="1" > Category <i class="input-helper"></i></label>
            </div>
            <div class="form-check form-check-success">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="district" value="1" > District <i class="input-helper"></i></label>
            </div>
            <div class="form-check form-check-info">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="post" value="1" > Posts <i class="input-helper"></i></label>
            </div>
            <div class="form-check form-check-danger">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="setting" value="1" > Setting <i class="input-helper"></i></label>
            </div>
            <div class="form-check form-check-danger">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="livetv" value="1" > Live tv <i class="input-helper"></i></label>
              </div>
          </div>
        </div>

<div class="col-md-6">
          <div class="form-group">

            <div class="form-check form-check-success">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="gallery" value="1" > Gallery <i class="input-helper"></i></label>
            </div>
            <div class="form-check form-check-info">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="ads" value="1"> Advertisement <i class="input-helper"></i></label>
            </div>
            <div class="form-check form-check-danger">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="thought" value="1" > Thought <i class="input-helper"></i></label>
            </div>
            <div class="form-check form-check-danger">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="role" value="1" > Role <i class="input-helper"></i></label>
              </div>
          </div>
        </div>

  </div> <!--  End Row  -->






  <button type="submit" class="btn btn-primary mr-2">Submit</button>

</form>
                  </div>
                </div>
              </div>










@endsection
