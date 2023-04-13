
@php
    $gallery=DB::table('photogalleries')->where('status',1)->orderBy('id','desc')->limit(6)->get();
@endphp
<!-- Ramro Nepal -->
<section class="custom-bg-white">
    <div class="container">
        <div class="cat-title custom-text-primary custom-bg-light">
            <div class="custom-fs-35">
                @if (session()->has('language') && session()->get('language')==1)

                Gallery
                                @else
                                ग्यालरी
                            @endif
            </div>
            <div class="right">
                <a href="#">
                    @if (session()->has('language') && session()->get('language')==1)
                    View All
                        @else
                        सबै
                    @endif
                    <span class="dot-wrap">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
            </div>
        </div>

        <div class="row">
            @foreach ($gallery as $item)
            <div class="col-lg-3 col-md-6 mb-2">
                <div class="soft-wrap custom-bs">
                    <div class="post-img" style="    height: 170px;">
                        <a href="{{asset($item->img)}}"  target="_blank"><img src="{{asset($item->img)}}" alt=""></a>
                    </div>
                    <div class="post-heading custom-fs-18 d-flex custom-text-gray">
                        <i class="fas fa-file-image me-3 "></i>
                        <h2 class="custom-fs-18 custom-fw-600">
                            @if (session()->has('language') && session()->get('language')==1)
                            {{$item->title_en}}

                                @else
                                {{$item->title}}
                            @endif
                             </h2>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
