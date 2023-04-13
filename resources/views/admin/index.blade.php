@php
    define('PAGE','dashboard')
@endphp

@extends('admin.admin_master')
@section('main-content')
<div class="content-wrapper">

    <div class="row">
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  @php
                      $post=DB::table('posts')->get();
                  @endphp
                  <h3 class="mb-0">{{count($post)}} post</h3>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success ">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Total Post</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  @php
                       $add=DB::table('adds')->get();
                  @endphp
                  <h3 class="mb-0">{{count($add)}} adds</h3>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Total avertisement</h6>
          </div>
        </div>
      </div>
      {{-- <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class=" align-self-start">
                  <h3>
                  @php
                  $livetv=DB::table('livetvs')->first();
             @endphp
                    @if($livetv->status==1)
                    <button type="button" class="btn btn-success btn-fw">Active</button>

                    @else
                    <button type="button" class="btn btn-danger btn-fw">Deactive</button>

                    @endif
                  </h3>
                </div>
              </div>
              <div class="col-3">

              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Live Tv</h6>
          </div>
        </div>
      </div> --}}

      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  @php
                      $post=DB::table('categories')->get();
                  @endphp
                  <h3 class="mb-0">{{count($post)}} post</h3>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success ">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Total category</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  @php
                      $post=DB::table('districts')->get();
                  @endphp
                  <h3 class="mb-0">{{count($post)}} District</h3>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success ">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Total District</h6>
          </div>
        </div>
      </div> <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  @php
                      $post=DB::table('subcategories')->get();
                  @endphp
                  <h3 class="mb-0">{{count($post)}} Sub-category</h3>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success ">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Total Sub-category</h6>
          </div>
        </div>
      </div> <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  @php
                      $post=DB::table('subdistricts')->get();
                  @endphp
                  <h3 class="mb-0">{{count($post)}} sub-district</h3>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success ">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Total Sub-disrict</h6>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
