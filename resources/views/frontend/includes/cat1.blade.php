@php
use Krishnahimself\DateConverter\DateConverter;
$post=DB::table('posts')->where('status',1)->inRandomOrder()->first();
$posts=DB::table('posts')->where('status',1)->orderBy('id','desc')->limit(4)->skip(1)->get();
$add5=DB::table('adds')->where('page',1)->where('place',5)->orderBy('id','desc')->first();
$add6=DB::table('adds')->where('page',1)->where('place',6)->orderBy('id','desc')->first();
$add7=DB::table('adds')->where('page',1)->where('place',7)->orderBy('id','desc')->first();
$add8=DB::table('adds')->where('page',1)->where('place',8)->orderBy('id','desc')->first();
$add9=DB::table('adds')->where('page',1)->where('place',9)->orderBy('id','desc')->first();

@endphp

   <!-- Samachar -->
    <section>
        <div class="container">
            <div class="flex-box">
                <div class="news-wrap ">
                    <div class="row">
            <div class="col-md-7">

                    <div class="generic-post-wrap shadow 4">
                   
                        <div class="soft-wrap ">
                            <div class="post-img ">
                                <a href="{{route('news.detai',['category'=>$post->category_id,'id'=>$post->id,'slug'=>$post->slug])}}">
                                    <img src="{{asset($post->img)}}" alt="">
                                </a>
                            </div>
                            <h2 class="custom-fs-35 custom-fw-600 mt-2 text-center px-3">
                                <a href="{{route('news.detai',['category'=>$post->category_id,'id'=>$post->id,'slug'=>$post->slug])}}" class="custom-text-dark">
                                    @if (session()->has('language') && session()->get('language')==1)
                                    {{$post->title_en}}
    
                                        @else
                                        {{$post->title}}
                                    @endif
                                </a>
                            </h2>
                            <div class="post-info  custom-fs-18 pt-3 pb-3 text-center">
                                <div
                                    class="post-date d-flex justify-content-center align-items-center custom-fs-16 mb-2">
                                    <i class="far fa-calendar-alt custom-text-secondary"></i>
                                    @if (session()->has('language') && session()->get('language')==1)


                                    <span class="ms-2">{{carbon\carbon::parse($post->created_at)->diffForHumans() }}</span>

                                    @else
                                    <span class="ms-2">{{ DateConverter::fromEnglishDate(carbon\carbon::parse($post->created_at)->format('Y') ,carbon\carbon::parse($post->created_at)->format('m'), carbon\carbon::parse($post->created_at)->format('d'))->toFormattedNepaliDate() }}</span>
                                                                            @endif
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>

            <div class="col-md-5">
                    <div class="row">
                      @foreach ($posts as $item)
                      <div class="col-sm-12">
                        <div class="generic-post-wrap">
                            <div class="soft-wrap row">
                                <div class="post-img col-5">
                                    <a href="{{route('news.detai',['category'=>$item->category_id,'id'=>$item->id,'slug'=>$item->slug])}}">
                                        <img src="{{asset($item->img)}}" alt="" srcset="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="  col-7">
                                    <h2 class="custom-fs-18 custom-fw-700 ">
                                        <a href="{{route('news.detai',['category'=>$item->category_id,'id'=>$item->id,'slug'=>$item->slug])}}" class="custom-text-dark">
                                            @if (session()->has('language') && session()->get('language')==1)
                                            {{$item->title_en}}

                                    @else
                                    {{$item->title}}
                                @endif
                                        </a>
                                        <div
                                            class="post-date d-flex justify-content-start align-items-center mb-2 custom-fs-16">
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
            </div>

                </div>
            <aside>

                    @if ($add5)
                    <div class="aside-ad-300-250 my-5 my-md-2">

                    <a href="{{$add5->link}}" class="mx-auto">
                        <img src="{{asset($add5->img)}}" alt="{{$add5->link}}" class="m-auto mb-1 img-fluid">
                    </a>
                    </div>
                      @endif

                      @if ($add6)
                      <div class="aside-ad-300-250 my-5 my-md-2">

                      <a href="{{$add6->link}}" class="mx-auto">
                          <img src="{{asset($add6->img)}}" alt="{{$add6->link}}" class="m-auto mb-1 img-fluid">
                      </a>
                      </div>
                        @endif

                        {{-- @if ($add7)
                        <div class="aside-ad-300-150 my-5 my-md-2">

                        <a href="{{$add7->link}}" class="mx-auto">
                            <img src="{{asset($add7->img)}}" alt="{{$add7->link}}" class="m-auto mb-1 img-fluid">
                        </a>
                        </div>
                          @endif --}}

                </aside>



            </div>
        </div>
    </section>
