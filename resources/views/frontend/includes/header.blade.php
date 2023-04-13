@php
use Krishnahimself\DateConverter\DateConverter;

@endphp

  
    <!-- Logo and more ad -->
    <section class="container">
        <div class="row">

        <div class="col-md-6 justify-content-between align-items-center mb-5">
            <div class="logo me-3">
                <a href="{{route('/')}}">
                    <div class="logo-img">
                        <img src="{{asset('frontend/logoMain.png')}}" alt="Logo Main" class="img-fluid" style="height: 100px;object-fit:scale-down">
                    </div>
                </a>
                <div class="date custom-fs-16 custom-text-gray text-end">
                    @if (session()->has('language') && session()->get('language')==1)


                    <span class="ms-2 d-flex align-items-center mt-1">&nbsp; &nbsp;&nbsp;<i class="fas fa-calendar-alt text-danger font-size-20"></i> &nbsp; <strong class="pt-1"> {{ date('d M Y') }} </strong> &nbsp;  &nbsp;     <i class="fas fa-clock text-danger  font-size-20 pt-1 "></i> &nbsp;  <strong class="pt-1">{{ date('H:i:s A') }}</strong> </span>

                    @else
                   <span class="ms-2 d-flex align-items-center ">&nbsp; &nbsp;&nbsp;<i class="fas fa-calendar-alt text-danger font-size-20"></i> &nbsp; &nbsp;
                    <iframe scrolling="no" border="0" frameborder="0" marginwidth="0" marginheight="0" allowtransparency="true" src="https://www.ashesh.com.np/linknepali-time.php?dwn=only&font_color=333333&font_size=19&api=682084l492" width="210" height="32" class="pt-1"></iframe>
                    <i class="fas fa-clock text-danger  font-size-20 pt-1 d-none d-md-inline"></i> &nbsp; &nbsp;
                    <iframe scrolling="no" border="0" frameborder="0" marginwidth="0" marginheight="0" allowtransparency="true" src="https://www.ashesh.com.np/linknepali-time.php?time_only=yes&font_color=333333&aj_time=yes&font_size=19&api=682084l464" width="170" height="32" class="pt-1 d-none d-md-inline"></iframe>
                </span>
                                                            @endif
                </div>

                </div>
            </div>
{{-- <div class="col-md-6">
    <img src="{{asset('image/adds/6126e04e20e3f.gif')}}" alt="" class="img-fluid h-50">
    <img src="{{asset('image/adds/6126e04e20e3f.gif')}}" alt="" class="img-fluid mt-2">

</div> --}}
        </div>
    </section>

    <!-- Navigation Bar-->
    <nav class="navbar navbar-expand-lg custom-bg-primary custom-fs-18 p-0 sticky-top">
        <div class="container">
            {{-- <div class="bar custom-text-white" id='bar'><i class="fas fa-bars"></i></div> --}}
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item @if (Request::segment(2)=='')
                        active
                    @endif">
                        <a class="nav-link" aria-current="page" href="{{route('/')}}"><i class="fas fa-home"></i></a>
                    </li>
                   


                </ul>
            </div>
            {{-- <div class="d-flex custom-text-white ">
                <div class="search custom-bg-light-primary custom-transtion" id='search'>
                    <i class="fas fa-search"></i>
                </div>
                <div class="your-update custom-bg-dark-primary custom-transtion" id='navUpdateBtn'>
                    <i class="far fa-clock"></i>
                </div>

            </div> --}}
        </div>
        {{-- <div class="search-wrap custom-bg-lightgray" id='search-wrap'>
            <div class="container">
                <form action="{{route('search')}}" method="GET">
                    <div class="row">
                        <div class="col-md-2 ">
                            <input type="date" name="from" id="from">
                        </div>
                        <div class="col-md-2 ">
                            <input type="date" name="to" id="to">
                        </div>
                        <div class="col-md-3 ">
                            <input type="text" name="keyword" id="keyword" placeholder="Keyword">
                        </div>
                        <div class="col-md-5 ">
                            <button class="btn custom-bg-dark-primary">
                                Search
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div> --}}

       
        </div>
    </nav>

