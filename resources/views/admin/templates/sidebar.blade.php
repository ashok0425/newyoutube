<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      @php
          $table=DB::table('seos')->first();
      @endphp
      <a class="sidebar-brand brand-logo" href="{{route('dashboard')}}"><img src="{{asset($table->logo)}}" alt="logo" /></a>

    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="{{asset('storage/'.Auth::user()->profile_photo_path)}}" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
            <h5 class="mb-0 font-weight-normal">{{Auth::user()->name}}</h5>
              <span>Super Admin</span>
            </div>
          </div>
          <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>

        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
      <a class="nav-link" href="{{route('dashboard')}}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
@if(Auth::user()->category==1)

      <li class="nav-item menu-items @if(PAGE=='category') active @endif">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class=" mdi mdi-arrow-all"></i>
          </span>
          <span class="menu-title">Manage Categories</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse " id="ui-basic">
          <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('admin.category')}}">Category</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.subcategory')}}">Subcategory</a></li>

          </ul>
        </div>
      </li>

      @else
      @endif
{{-- @if(Auth::user()->district==1)

      <li class="nav-item menu-items @if(PAGE=='district') active @endif">
        <a class="nav-link" data-toggle="collapse" href="#district" aria-expanded="false" aria-controls="district">
          <span class="menu-icon">
            <i class=" mdi mdi-comment-account-outline"></i>
          </span>
          <span class="menu-title">Manage district</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="district">
          <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('admin.district')}}">Distrirct</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.subdistrict')}}">Subdistrict</a></li>

          </ul>

        </div>
      </li>
      @else
      @endif --}}
@if(Auth::user()->post==1)

      <li class="nav-item menu-items @if(PAGE=='post') active @endif">
        <a class="nav-link" data-toggle="collapse" href="#post" aria-expanded="false" aria-controls="post">
          <span class="menu-icon">
            <i class=" mdi mdi-comment-account-outline"></i>
          </span>
          <span class="menu-title">Manage Post</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="post">
          <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('admin.post.create')}}">Add Post</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.post')}}">All Post</a></li>

          </ul>
        </div>
      </li>
      @else
      @endif

@if(Auth::user()->setting==1)

      <li class="nav-item menu-items @if(PAGE=='setting') active @endif">
        <a class="nav-link" data-toggle="collapse" href="#setting" aria-expanded="false" aria-controls="setting">
          <span class="menu-icon">
            <i class="mdi mdi-settings"></i>
          </span>
          <span class="menu-title">Setting</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="setting">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.seo.edit')}}"> Website Setting</a></li>
          </ul>
        </div>
      </li>
      @else
      @endif

      @if(Auth::user()->thought==1)

      <li class="nav-item menu-items @if(PAGE=='thought') active @endif">
        <a class="nav-link" data-toggle="collapse" href="#thought" aria-expanded="false" aria-controls="thought">
          <span class="menu-icon">
            <i class="mdi mdi-envelope"></i>
          </span>
          <span class="menu-title">Thought</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="thought">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.thought')}}"> Thought</a></li>
          </ul>
        </div>
      </li>
      @else
      @endif




      @if(Auth::user()->gallery==1)

      <li class="nav-item menu-items @if(PAGE=='gallery') active @endif">
        <a class="nav-link" data-toggle="collapse" href="#gallery" aria-expanded="false" aria-controls="gallery">
          <span class="menu-icon">
            <i class="mdi mdi-arrange-send-backward"></i>
          </span>
          <span class="menu-title">Gallery</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="gallery">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.photogallery')}}"> Photo Gallery</a></li>


          </ul>
        </div>
      </li>
      @else
      @endif
      @if(Auth::user()->ads==1)

      <li class="nav-item menu-items @if(PAGE=='add') active @endif">
        <a class="nav-link" data-toggle="collapse" href="#add" aria-expanded="false" aria-controls="add">
          <span class="menu-icon">
            <i class="mdi mdi-adjust"></i>
          </span>
          <span class="menu-title">Advertisement</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="add">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.add.create')}}"> Add New</a></li>

          <li class="nav-item"> <a class="nav-link" href="{{route('admin.addlist')}}">Add List </a></li>

          </ul>
        </div>
      </li>
      @else
      @endif


      @if(Auth::user()->role==1)

      <li class="nav-item menu-items @if(PAGE=='role') active @endif">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <span class="menu-icon">
            <i class="mdi mdi-security"></i>
          </span>
          <span class="menu-title">User Roles</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('add.writer') }}"> Add Writer </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('all.writer') }}"> All Writer </a></li>

          </ul>
        </div>
      </li>
@endif

{{-- @if(Auth::user()->livetv==1)

<li class="nav-item menu-items @if(PAGE=='livetv') active @endif">
  <a class="nav-link" data-toggle="collapse" href="#livetv" aria-expanded="false" aria-controls="auth">
    <span class="menu-icon">
      <i class="mdi mdi-security"></i>
    </span>
    <span class="menu-title">Live tv</span>
    <i class="menu-arrow"></i>
  </a>
  <div class="collapse" id="livetv">
    <ul class="nav flex-column sub-menu">

      <li class="nav-item"> <a class="nav-link" href="{{ route('admin.livetv.edit') }}"> Live tv </a></li>

    </ul>
  </div>
</li>



@endif --}}

    </ul>
  </nav>
