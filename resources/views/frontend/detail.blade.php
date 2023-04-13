


@section('title')
{{ $post->title }}
@endsection
@section('descr')
{!! strip_tags($post->detail) !!}
@endsection
@section('keyword')
{{ $post->title }}
@endsection
@section('title')
{{ $post->title }}

@endsection
@section('img')
{{ asset($post->img) }}
@endsection


@extends('frontend.master')
@section('content')


@php
use Krishnahimself\DateConverter\DateConverter;
$add1=DB::table('adds')->where('page',3)->where('place',1)->orderBy('id','desc')->first();
$add2=DB::table('adds')->where('page',3)->where('place',2)->orderBy('id','desc')->first();
$add3=DB::table('adds')->where('page',3)->where('place',3)->orderBy('id','desc')->first();
$add4=DB::table('adds')->where('page',3)->where('place',4)->orderBy('id','desc')->first();
$add5=DB::table('adds')->where('page',3)->where('place',5)->orderBy('id','desc')->first();
$add6=DB::table('adds')->where('page',3)->where('place',6)->orderBy('id','desc')->first();
$add7=DB::table('adds')->where('page',3)->where('place',7)->orderBy('id','desc')->first();
$add8=DB::table('adds')->where('page',3)->where('place',8)->orderBy('id','desc')->first();
$add9=DB::table('adds')->where('page',3)->where('place',9)->orderBy('id','desc')->first();
$add10=DB::table('adds')->where('page',3)->where('place',10)->orderBy('id','desc')->first();
$add11=DB::table('adds')->where('page',3)->where('place',11)->orderBy('id','desc')->first();
$add12=DB::table('adds')->where('page',3)->where('place',12)->orderBy('id','desc')->first();



@endphp
    <!-- News Breadcrum -->
    <section>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb news-breadcrum">
                    <li class="breadcrumb-item"><a href="{{route('/')}}"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{route('category',['id'=>$post->cid,'slug'=>$post->slug])}}">

                        @if (session()->has('language') && session()->get('language')==1)
                        {{$post->category_en}}

                            @else
                            {{$post->category}}
                        @endif
                    </a></li>
                    @if ($post->subcategory)
                    <li class="breadcrumb-item active" aria-current="page">

                        @if (session()->has('language') && session()->get('language')==1)
                        {{$post->subcategory_en}}

                            @else
                            {{$post->subcategory}}
                        @endif
                    </li>
                    @endif

                </ol>
            </nav>
        </div>
    </section>

    <!--  News Headline -->
    <section>
        <div class="container">
            <div class=" py-4 custom-text-black relative">
                <h1 class=" custom-fs-50 custom-fw-600 text-darke">

                        @if (session()->has('language') && session()->get('language')==1)
                        {{$post->title_en}}

                            @else
                            {{$post->title}}
                        @endif
                </h1>
            </div>

        </div>
    </section>


    <!-- News -->
    <section>
        <div class="container">

            <div class="post-info custom-b-bottom-gray">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 col-md-5">
                                <div class="author-wrap">
                                    <img src="{{asset($logo->logo)}}" alt="Logo" class="img-fluid">

                                </div>
                            </div>
                            <div class="col-sm-6 col-md-7 d-flex">
                                <div class="post-time">
                                    <span>
                                        @if (session()->has('language') && session()->get('language')==1)


                                    <span class="ms-2">{{carbon\carbon::parse($post->pc)->diffForHumans() }}</span>

                                    @else
                                    <span class="ms-2">{{ DateConverter::fromEnglishDate(carbon\carbon::parse($post->pc)->format('Y') ,carbon\carbon::parse($post->pc)->format('m'), carbon\carbon::parse($post->pc)->format('d'))->toFormattedNepaliDate() }}</span>
                                                                            @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
$comment=DB::table('comments')->where('post_id',$post->pid)->get();
@endphp
                    <div class="col-md-6 d-flex justify-content-end">
                        <div class="num-of-comments">
                            <span class="custom-text-primary">
                                {{count($comment)}}
                            </span>
                            प्रतिक्रिया
                        </div>
                        <div class="shares">

                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-box">
                <div class="">

                    <div class="news-wrap">
                        <!-- AD 900*100 -->
                        @if ($add1)
                        <section >

                            <div
                                class=" py-3 custom-text-white custom-fs-24 custom-ad-banner-900">
                        <a href="{{$add1->link}}" class="mx-auto">
                            <img src="{{asset($add1->img)}}" alt="{{$add1->link}}" class="m-auto mb-1 img-fluid">
                        </a>
                            </div>
                        </section>

                          @endif

                        <div class="soft-wrap ">
                            <div class="post-img">
                                <a href="#"><img src="{{asset($post->img)}}" alt=""></a>
                            </div>
                            <div class="post-heading custom-fs-22 text-start px-0 custom-b-bottom-gray">
                                @if (session()->has('language') && session()->get('language')==1)
                                {!! $post->detail_en!!}

                                    @else
                                    {!! $post->detail!!}
                                @endif

                            </div>

                            <!-- AD Section -->

                            {{-- <section>
                                <div class="text-center">
                                    <p class="custom-text-gray custom-fs-12">ADVERTISEMENT</p>
                                </div>
                                <div class="d-flex justify-content-center align-items-center flex-column flex-sm-row">
                                    <div class="aside-ad-250-250 custom-bg-secondary me-3">
                                        (250px*250px)
                                    </div>
                                    <div class="aside-ad-250-250 custom-bg-secondary me-3">
                                        (250px*250px)
                                    </div>
                                    <div class="aside-ad-250-250 custom-bg-secondary">
                                        (250px*250px)
                                    </div>
                                </div>
                            </section>

                            <div class="post-heading custom-fs-14 text-start px-0 custom-b-bottom-gray">
                                <p class="custom-fs-20 custom-text-black">
                                    वि.सं. २०२४ सालदेखि सांगीतिक क्षेत्रमा प्रवेश गरेका टुहुरेले १ सय ५० भन्दा बढी गीत
                                    रेकर्ड गराएका छन् । ‘आमा दिदीबहिनी हो, कति बस्छौ दासी भई, सुखको सधैं प्यासी बनेर’
                                    बोलको गीत उनले २०३४ सालदेखि गाउँदै आएको सबैभन्दा चर्चित गीत हो ।
                                </p>
                                <p class="custom-fs-20 custom-text-black">
                                    उनको अर्को चर्चित गीत ‘बसाइँ हिँड्नको ताँतीले बस्नेको मन रुँद छ, लाखौंको लागि उजाड छ
                                    यो देश मुठ्ठीभरलाई त स्वर्ग छ’ पनि हो ।
                                </p>
                                <p class="custom-fs-20 custom-text-black">
                                    सुनसरीको धरान घर भएका टुहुरेको वास्तविक नाम जुठबहादुर खड्गी हो । उनी दोस्रो
                                    संविधानसभामा तत्कालीन एनेकपा माओवादीबाट समानुपातिक सभासदसमेत बनेका थिए । २०७५ सालमा
                                    उनको नाममा जेबी टुहुरे फाउण्डेसन स्थापना गरिएको छ । फाण्डेसनको अध्यक्ष उनकी छोरी
                                    निर्भीका छिन् ।
                                </p>


                            </div> --}}

                            <div class="cat-title custom-text-primary">
                                <div class="custom-fs-28">
                                    <div class="shares">
                                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
                                    </div>
                                </div>

                            </div>

                            <div class="review custom-b-bottom">
                                <h4>
                                    @if (session()->has('language') && session()->get('language')==1)
                                    Who you feel after reading?

                                        @else
                                        यो खबर पढेर तपाईलाई कस्तो महसुस भयो ?
                                    @endif

                                </h4>
                                <div class="emotes text-center">
                                    <div class="w-57 mx-auto">
                                         <!-- ShareThis BEGIN --><div class="sharethis-inline-reaction-buttons"></div><!-- ShareThis END -->

                                    </div>


                                </div>
                            </div>

                            <!-- AD Section -->
                            @if ($add12)
                            <section >

                                <div
                                    class=" py-3 custom-text-white custom-fs-24 custom-ad-banner-900">
                            <a href="{{$add12->link}}" class="mx-auto">
                                <img src="{{asset($add12->img)}}" alt="{{$add12->link}}" class="m-auto mb-1 img-fluid">
                            </a>
                                </div>
                            </section>

                              @endif

                            <div class="comments-section">
                                <div class="cat-title custom-text-primary">
                                    <div class="custom-fs-35">
                                        @if (session()->has('language') && session()->get('language')==1)
                        Write Comment

                            @else
                            प्रतिक्रिया दिनुहोस्

                        @endif
                                    </div>

                                </div>

                                <div class="form custom-bg-light">
                                    <form action="{{route('comment.store')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="post_id" value="{{$post->pid}}">
                                        <div class="form-input">
                                            <label for="name">

                                                @if (session()->has('language') && session()->get('language')==1)
                                                Full Name

                                                    @else

                                                    पुरानाम
@endif

                                                *</label>
                                            <input type="text" name="name" id="name" required>
                                        </div>
                                        <div class="form-input">
                                            <label for="email">

                                                @if (session()->has('language') && session()->get('language')==1)
                                                Email

                                                    @else

                                                    इमेल
@endif

                                                *</label>
                                            <input type="email" name="email" id="email" required>
                                        </div>
                                        <div class="form-input">
                                            <label for="comment">
                                                @if (session()->has('language') && session()->get('language')==1)
                                                Comment

                                                    @else
                                                    प्रतिकृया
@endif

                                                *</label>
                                            <input type="text" name="comment" id="comment" required class="text-area">
                                        </div>
                                        <button class="btn">
                                            @if (session()->has('language') && session()->get('language')==1)
                                            Send

                                                @else
                                                पठाउनुहोस

@endif
                                        </button>
                                    </form>


                                            <div class="custom-fs-35 mt-3">
                                        @if (session()->has('language') && session()->get('language')==1)
                                          Comments

                                    @else
                                        प्रतिक्रिया

                                             @endif
                                    </div>
                                    @php
                                        $comment=DB::table('comments')->where('post_id',$post->pid)->orderBy('id','desc')->paginate(6);
                                    @endphp

                                          @foreach ($comment as $item)
                                           <div class="border-bottom pt-1">
                                            <h5 class="py-0 my-0">{{$item->name}}</h5>
                                            <p class="pt-0 mt-0">{{$item->comment}}</p>
                                           </div>
                                          @endforeach
                              <div class="w-25 mx-auto mt-2">
                                  {{$comment->links()}}
                              </div>

                                </div>
                            </div>

                            <div class="related-news">
                                <div class="cat-title custom-text-primary custom-bg-light">
                                    <div class="custom-fs-35">

                                        @if (session()->has('language') && session()->get('language')==1)
                                        Related News

                                            @else
                                            सम्बन्धित खवर
                                        @endif

                                    </div>
                                </div>
                                <div class="news-wrap  custom-b-bottom-gray">
                                    <div class="row">
                                        @foreach ($related as $item)
                                        <div class="col-md-4">
                                            <div class="generic-post-wrap">
                                                <div class="soft-wrap">
                                                    <div class="post-img">
                                                        <a href="{{route('news.detai',['category'=>$item->category_id,'id'=>$item->id,'slug'=>$item->slug])}}">
                                                            <img src="{{asset($item->img)}}" alt=""
                                                                srcset="">
                                                        </a>
                                                    </div>
                                                    <div class="post-heading p-0 pt-3">
                                                        <h2 class="custom-fs-22 text-start">
                                                            <a href="{{route('news.detai',['category'=>$item->category_id,'id'=>$item->id,'slug'=>$item->slug])}}" class="custom-text-dark">
                                                                @if (session()->has('language') && session()->get('language')==1)
                                                                {{$item->title_en}}

                                                        @else
                                                        {{$item->title}}
                                                    @endif
                                                            </a>
                                                            <div
                                                                class="post-date d-flex justify-content-start align-items-center mb-2 custom-fs-16">
                                                                <i
                                                                    class="far fa-calendar-alt custom-text-secondary"></i>
                                                                    @if (session()->has('language') && session()->get('language')==1)


                                                                    <span class="ms-2">{{carbon\carbon::parse($item->created_at)->diffForHumans() }}</span>

                                                                    @else
                                                                    <span class="ms-2">{{ DateConverter::fromEnglishDate(carbon\carbon::parse($item->created_at)->format('Y') ,carbon\carbon::parse($item->created_at)->format('m'), carbon\carbon::parse($item->created_at)->format('d'))->toFormattedNepaliDate() }}</span>
                                                                                                            @endif
                                                            </div>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach


                                    </div>

                                </div>
                            </div>






                        </div>
                    </div>
                </div>
                <aside class="">
                    <div class="ads">
                        @if ($add2)

                            <div class="aside-ad-300-200 my-5 my-md-2 custom-bg-secondary">

                        <a href="{{$add2->link}}" class="mx-auto">
                            <img src="{{asset($add2->img)}}" alt="{{$add2->link}}" class="m-auto mb-1 img-fluid">
                        </a>
                            </div>

                          @endif

                        @if ($add3)

                            <div class="aside-ad-300-200 my-5 my-md-2 custom-bg-secondary">

                        <a href="{{$add3->link}}" class="mx-auto">
                            <img src="{{asset($add3->img)}}" alt="{{$add3->link}}" class="m-auto mb-1 img-fluid">
                        </a>
                            </div>

                          @endif

                          @if ($add4)

                          <div class="aside-ad-300-200 my-5 my-md-2 custom-bg-secondary">

                      <a href="{{$add4->link}}" class="mx-auto">
                          <img src="{{asset($add4->img)}}" alt="{{$add4->link}}" class="m-auto mb-1 img-fluid">
                      </a>
                          </div>

                        @endif

                        @if ($add5)

                        <div class="aside-ad-300-200 my-5 my-md-2 custom-bg-secondary">

                    <a href="{{$add5->link}}" class="mx-auto">
                        <img src="{{asset($add5->img)}}" alt="{{$add5->link}}" class="m-auto mb-1 img-fluid">
                    </a>
                        </div>

                      @endif

                      @if ($add6)

                      <div class="aside-ad-300-200 my-5 my-md-2 custom-bg-secondary">

                  <a href="{{$add6->link}}" class="mx-auto">
                      <img src="{{asset($add6->img)}}" alt="{{$add6->link}}" class="m-auto mb-1 img-fluid">
                  </a>
                      </div>

                    @endif


                    @if ($add7)

                    <div class="aside-ad-300-200 my-5 my-md-2 custom-bg-secondary">

                <a href="{{$add7->link}}" class="mx-auto">
                    <img src="{{asset($add7->img)}}" alt="{{$add7->link}}" class="m-auto mb-1 img-fluid">
                </a>
                    </div>

                  @endif

                  @if ($add8)

                  <div class="aside-ad-300-200 my-5 my-md-2 custom-bg-secondary">

              <a href="{{$add8->link}}" class="mx-auto">
                  <img src="{{asset($add8->img)}}" alt="{{$add8->link}}" class="m-auto mb-1 img-fluid">
              </a>
                  </div>

                @endif

                @if ($add9)

                <div class="aside-ad-300-200 my-5 my-md-2 custom-bg-secondary">

            <a href="{{$add9->link}}" class="mx-auto">
                <img src="{{asset($add9->img)}}" alt="{{$add9->link}}" class="m-auto mb-1 img-fluid">
            </a>
                </div>

              @endif

              @if ($add10)

              <div class="aside-ad-300-200 my-5 my-md-2 custom-bg-secondary">

          <a href="{{$add10->link}}" class="mx-auto">
              <img src="{{asset($add10->img)}}" alt="{{$add10->link}}" class="m-auto mb-1 img-fluid">
          </a>
              </div>

            @endif

            @if ($add11)

            <div class="aside-ad-300-200 my-5 my-md-2 custom-bg-secondary">

        <a href="{{$add11->link}}" class="mx-auto">
            <img src="{{asset($add11->img)}}" alt="{{$add11->link}}" class="m-auto mb-1 img-fluid">
        </a>
            </div>

          @endif

          @if ($add3)

          <div class="aside-ad-300-200 my-5 my-md-2 custom-bg-secondary">

      <a href="{{$add3->link}}" class="mx-auto">
          <img src="{{asset($add3->img)}}" alt="{{$add3->link}}" class="m-auto mb-1 img-fluid">
      </a>
          </div>

        @endif
                    </div>

                </aside>
            </div>
        </div>
    </section>


    @endsection
@push('script')
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60c809a3e6cdb001"></script>

@endpush
