
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="fb:app_id" content="457897745217012" />
    <meta property="og:url"                content="@yield('url')" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="@yield('title')" />
    <meta property="og:description"        content="@yield('descr')" />
    <meta property="og:image"              content="@yield('img')" />

        <meta name="csrf_token" content="{{csrf_token()}}">
        <meta name="keyword" content="BFM">
        <title>@yield('title')</title>

    <!-- IMPORTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"     />

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css\bootstrap.min.css')}}">
      {{-- toaster  --}}
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
  <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5fbdac601a28c100125479d8&product=inline-share-buttons-buttons' async='async'></script>
</head>

<body class="custom-bg-white custom-font-mukta">
   
@include('frontend.includes.header')

@yield('content')
@include('frontend.includes.footer')

 
</body>

</html>

