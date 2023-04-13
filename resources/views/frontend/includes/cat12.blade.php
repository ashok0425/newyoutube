
@php
use Krishnahimself\DateConverter\DateConverter;
// use Stichoza\GoogleTranslate\GoogleTranslate;
$category=DB::table('categories')->orderBy('id','desc')->skip(10)->first();
// $post=DB::table('posts')->where('category_id',$category->id)->where('status',1)->latest()->first();
$posts=DB::table('posts')->where('category_id',$category->id)->where('status',1)->orderBy('id','desc')->limit(10)->get();
$add30=DB::table('adds')->where('page',1)->where('place',30)->orderBy('id','desc')->first();
$add25=DB::table('adds')->where('page',1)->where('place',31)->orderBy('id','desc')->first();

$add26=DB::table('adds')->where('page',1)->where('place',32)->orderBy('id','desc')->first();
$add27=DB::table('adds')->where('page',1)->where('place',33)->orderBy('id','desc')->first();
$add28=DB::table('adds')->where('page',1)->where('place',34)->orderBy('id','desc')->first();


@endphp
    <!-- Ad section -->
    @if ($add30)
    <section class="container">

    <a href="{{$add30->link}}" class="mx-auto">
        <img src="{{asset($add30->img)}}" alt="{{$add30->link}}" class="m-auto mb-1 img-fluid img-fluid img-fluid img-fluid img-fluid">
    </a>
    </section>

      @endif

    <!-- News -->
    <section>
        <div class="container">
            <div class="flex-box">
                <div class="news-wrap ">

                    <div class="row">
                        @foreach ($posts as $item)
                        <div class="col-sm-12 col-md-6">
                            <div class="generic-post-wrap">
                                <div class="soft-wrap d-flex">
                                    <div class="post-img img-sm me-3">
                                        <a href="{{route('news.detai',['category'=>$item->category_id,'id'=>$item->id,'slug'=>$item->slug])}}">
                                            <img src="{{asset($item->img)}}" alt="" srcset="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="post-heading p-0">
                                        <h2 class="custom-fs-18 text-start custom-fw-600">
                                            <a href="{{route('news.detai',['category'=>$item->category_id,'id'=>$item->id,'slug'=>$item->slug])}}" class="custom-text-dark">
                                                @if (session()->has('language') && session()->get('language')==1)
                                                {{$item->title_en}}

                                                    @else
                                                    {{$item->title}}
                                                @endif
                                            </a>
                                            <div
                                                class="item-date d-flex justify-content-start align-items-center mb-2 custom-text-gray custom-fs-16">
                                                <i class="far fa-calendar-alt custom-text-secondary"></i>
                                                @if (session()->has('language') && session()->get('language')==1)


                                                <span class="ms-2">{{carbon\carbon::parse($item->created_at)->diffForHumans() }}</span>

                                                @else
                                                <span class="ms-2 custom-fw-400 mt-2">{{ DateConverter::fromEnglishDate(carbon\carbon::parse($item->created_at)->format('Y') ,carbon\carbon::parse($item->created_at)->format('m'), carbon\carbon::parse($item->created_at)->format('d'))->toFormattedNepaliDate() }}</span>
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
                {{-- <aside>


                      @if ($add28)
                      <div class="aside-ad-300-125 my-5 my-md-2">


                      <a href="{{$add28->link}}" class="mx-auto">
                          <img src="{{asset($add28->img)}}" alt="{{$add28->link}}" class="m-auto mb-1 img-fluid img-fluid img-fluid img-fluid img-fluid">
                      </a>
                  </div>

                        @endif

                        @if ($add25)
                        <div class="aside-ad-300-125 my-5 my-md-2">


                        <a href="{{$add25->link}}" class="mx-auto">
                            <img src="{{asset($add25->img)}}" alt="{{$add25->link}}" class="m-auto mb-1 img-fluid img-fluid img-fluid img-fluid img-fluid">
                        </a>
                    </div>

                          @endif

                          @if ($add26)
                          <div class="aside-ad-300-125 my-5 my-md-2">


                          <a href="{{$add26->link}}" class="mx-auto">
                              <img src="{{asset($add26->img)}}" alt="{{$add26->link}}" class="m-auto mb-1 img-fluid img-fluid img-fluid img-fluid img-fluid">
                          </a>
                      </div>

                            @endif


                            @if ($add27)
                            <div class="aside-ad-300-125 my-5 my-md-2">


                            <a href="{{$add27->link}}" class="mx-auto">
                                <img src="{{asset($add27->img)}}" alt="{{$add27->link}}" class="m-auto mb-1 img-fluid img-fluid img-fluid img-fluid img-fluid">
                            </a>
                        </div>

                              @endif

                </aside> --}}
            </div>
        </div>
    </section>
