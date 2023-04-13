@section('title')
    dashboard
@endsection
@php
    $logo=DB::table('seos')->first();
@endphp
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset($logo->logo)}}" type="image/icon type">

    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">
    <!-- End layout styles -->
    {{-- toster --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
     {{-- summernote --}}
     <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  </head>
  <body>

    <div class="container-scroller">
      <!-- sidebar -->
      @include('admin.templates.sidebar')
      <!-- -------sidebar--------------- -->
      <div class="container-fluid page-body-wrapper">
        <!-- navbar -->
      @include('admin.templates.header')

        <div class="main-panel">

        <!-- main content -->
        <div class="content-wrapper">
        <div class="card">
<x-pagetitle />
@yield('main-content')
</div>
        </div>
          <!---XX----- main content---XX-- -->
                 <!-- footer -->

      @include('admin.templates.footer')
                 <!-- XX----footer--XX -->

        </div>


      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    {{-- jquery  --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- plugins:js -->
    <script src="{{asset('backend/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('backend/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('backend/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('backend/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('backend/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('backend/assets/js/misc.js')}}"></script>
    <script src="{{asset('backend/assets/js/settings.js')}}"></script>
    <script src="{{asset('backend/assets/js/todolist.js')}}"></script>
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <!-- endinject -->
    {{-- toster --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
    {{-- summernote --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <!-- Custom js for this page -->

    <script src="{{asset('backend/assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
  @stack('script')

    <script>

$(document).ready( function () {
      $('#table_id').DataTable();
  } );
@if(session('message'))
var type="{{session('alert-type','info')}}"
switch(type){
  case 'success':toastr.success("{{session('message')}}");
break;
case 'info':toastr.info("{{session('message')}}");
break;
case 'warning':toastr.warning("{{session('message')}}");
break;
case 'error':toastr.error("{{session('message')}}");
break;
}
@endif
$(document).ready(function() {
        $('#summernote1').summernote();
        $('#summernote2').summernote();
        $('#summernote3').summernote();


$("#category").on("change",function(){
var cat_id=$(this).val();
if(cat_id){
  $.ajax({
    url:"{{url('/get/subcategory')}}/"+cat_id,
    type:"GET",
    dataType:"json",
    success:function(data){
      $("#subcategory").empty();

     $.each(data,function(key,value){
      $("#subcategory").append('<option value="'+value.id+'">'+value.subcategory+'</option>');

  })
    }
  })
}

})
$("#districts").on("change",function(){
var cat_id=$(this).val();
if(cat_id){
  $.ajax({
    url:"{{url('/get/subdistrict')}}/"+cat_id,
    type:"GET",
    dataType:"json",
    success:function(data){
      $("#subdistrict").empty();

     $.each(data,function(key,value){
      $("#subdistrict").append('<option value="'+value.id+'">'+value.city+'</option>');


     })
    }
  })
}

})
    });
    </script>
  </body>
</html>
