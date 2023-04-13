@php
    define('PAGE','setting')
@endphp
@extends('admin.admin_master')
@section('main-content')


    <div class="card-body">
        <p class="card-description font-weight-bold">Edit Setting</p>
        <form class="forms-sample" action="{{route('admin.seo.update')}}" method="POST" enctype="multipart/form-data">
        @csrf


          <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="meta author" aria-label="Recipient's username" aria-describedby="basic-addon2" name="meta_author" value="{{$seo->meta_author}}">
                <div class="input-group-append">
                  <button class="btn btn-sm btn-facebook" type="button">
                    Meta Author
                  </button>
                </div>
              </div>

            @error('meta_author')
             <span class="text-danger"> {{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <div class="input-group">
            <input type="text" class="form-control" placeholder="meta title" aria-label="Recipient's username" aria-describedby="basic-addon2" name="meta_title" value="{{$seo->meta_title}}">
                <div class="input-group-append">
                  <button class="btn btn-sm btn-twitter" type="button">
                   Meta Title
                  </button>
                </div>
              </div>

            @error('meta_title')
             <span class="text-danger"> {{$message}}</span>
            @enderror
          </div>  <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="meta keyword" aria-label="Recipient's username" aria-describedby="basic-addon2" name="meta_keyword" value="{{$seo->meta_keyword}}">
                <div class="input-group-append">
                  <button class="btn btn-sm btn-instagram" type="button">
                    Meta Keyword
                  </button>
                </div>
              </div>

            @error('meta_keyword')
             <span class="text-danger"> {{$message}}</span>
            @enderror
          </div>  <div class="form-group">
            <div class="input-group">
                <textarea type="text" class="form-control" placeholder="meta description" aria-label="Recipient's username" aria-describedby="basic-addon2" name="meta_description" id="1">
                    {{$seo->meta_description}}
                </textarea>
                <div class="input-group-append">
                  <button class="btn btn-sm btn-linkedin" type="button">
                    Meta Description
                  </button>
                </div>
              </div>

            @error('meta_description')
             <span class="text-danger"> {{$message}}</span>
            @enderror
          </div>  <div class="form-group">
            <div class="input-group">
                <textarea type="text" class="form-control" placeholder="google analytics" aria-label="Recipient's username" aria-describedby="basic-addon2" name="google_analytics" id="2">{{$seo->google_analytics}}</textarea>
                <div class="input-group-append">
                  <button class="btn btn-sm btn-youtube" type="button">
                    Google Analytics
                  </button>
                </div>
              </div>

            @error('google_analytics')
             <span class="text-danger"> {{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <div class="input-group">
                <textarea type="text" class="form-control" placeholder="alexa analytics" aria-label="Recipient's username" aria-describedby="basic-addon2" name="alexa_analytics" id="3">{{$seo->alexa_analytics}}</textarea>
                <div class="input-group-append">
                  <button class="btn btn-sm btn-twitter" type="button">
                    Alexa Analytics
                  </button>
                </div>
              </div>

            @error('alexa_analytics')
             <span class="text-danger"> {{$message}}</span>
            @enderror
          </div>
        <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="google verification" aria-label="Recipient's username" aria-describedby="basic-addon2" name="google_verification" value="{{$seo->google_verification}}">
                <div class="input-group-append">
                  <button class="btn btn-sm btn-facebook" type="button">
                    Google Verification
                  </button>
                </div>
              </div>


          </div>
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control"  aria-label="Recipient's username" aria-describedby="basic-addon2" name="facebook" value="{{$seo->facebook}}">
                            <div class="input-group-append">
                              <button class="btn btn-sm btn-facebook" type="button">
                                <i class="fab fa-facebook-square fa-2x"></i>
                              </button>
                            </div>
                          </div>


                      </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2" name="twitter" value="{{$seo->twitter}}">
                            <div class="input-group-append">
                              <button class="btn btn-sm btn-facebook" type="button">
                                <i class="fab fa-twitter-square fa-2x"></i>
                              </button>
                            </div>
                          </div>


                      </div>
                  </div> <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control"  aria-label="Recipient's username" aria-describedby="basic-addon2" name="instagram" value="{{$seo->instagram}}">
                            <div class="input-group-append">
                              <button class="btn btn-sm btn-facebook" type="button">
                                <i class="fab fa-instagram-square fa-2x"></i>
                              </button>
                            </div>
                          </div>


                      </div>
                  </div> <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control"  aria-label="Recipient's username" aria-describedby="basic-addon2" name="youtube" value="{{$seo->youtube}}">
                            <div class="input-group-append">
                              <button class="btn btn-sm btn-facebook" type="button">
                                <i class="fab fa-youtube-square fa-2x"></i>
                              </button>
                            </div>
                          </div>


                      </div>
                  </div> <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2" name="email" value="{{$seo->email}}" placeholder="Email" >
                            <div class="input-group-append">
                              <button class="btn btn-sm btn-facebook" type="button">
                                <i class="fas fa-envelope-square fa-2x"></i>
                              </button>
                            </div>
                          </div>


                      </div>
                  </div> <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Phone" aria-label="Recipient's username" aria-describedby="basic-addon2" name="phone" value="{{$seo->phone}}">
                            <div class="input-group-append">
                              <button class="btn btn-sm btn-facebook" type="button">
                                <i class="fas fa-phone-square fa-2x"></i>
                              </button>
                            </div>
                          </div>


                      </div>
                  </div> <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Address" aria-label="Recipient's username" aria-describedby="basic-addon2" name="address" value="{{$seo->address}}">
                            <div class="input-group-append">
                              <button class="btn btn-sm btn-facebook" type="button">
                                <i class="fas fa-location-alt fa-2x"></i>
                              </button>
                            </div>
                          </div>


                      </div>
                  </div>
<div class="col-md-12">
    <label>Logo</label>
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image" >
                      <span class="input-group-append">
                        <input class="file-upload-browse btn btn-primary" type="file" name="logo">

                      </span>
                    </div>
                <img src="{{asset($seo->logo)}}" alt=""  width="70">

</div>
<div class="col-md-12">
    <label>Fev </label>
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                      <span class="input-group-append">
                        <input class="file-upload-browse btn btn-primary" type="file" name="fev">
                      </span>

                    </div>
                <img src="{{asset($seo->fev)}}" alt="" width="70">

</div>
                  <div class="col-md-12">
                    <div class="form-group">
                        <div class="input-group">
                            <textarea type="text" class="form-control" placeholder="About us" aria-label="Recipient's username" aria-describedby="basic-addon2" name="aboutus" value=""  id="summernote2">{{$seo->aboutus}}</textarea>
                            <div class="input-group-append">
                              <button class="btn btn-sm btn-facebook" type="button">
                                About us
                              </button>
                            </div>
                          </div>


                      </div>
                  </div>



                  <div class="col-md-12">
                    <div class="form-group">
                        <div class="input-group">
                            <textarea type="text" class="form-control" placeholder="Term & Conditions" aria-label="Recipient's username" aria-describedby="basic-addon2" name="term"  id="summernote1">{{$seo->term}}</textarea>
                            <div class="input-group-append">
                              <button class="btn btn-sm btn-facebook" type="button">
                               Term & Conditions
                              </button>
                            </div>
                          </div>


                      </div>
                  </div>
              </div>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Save</button>
        </form>
      </div>


@endsection
