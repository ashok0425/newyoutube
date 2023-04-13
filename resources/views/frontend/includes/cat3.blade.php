@php
use Krishnahimself\DateConverter\DateConverter;
$category=DB::table('categories')->orderBy('id','desc')->skip(2)->first();
$post=DB::table('posts')->where('category_id',$category->id)->where('status',1)->orderBy('id','desc')->first();
$posts=DB::table('posts')->where('category_id',$category->id)->where('status',1)->orderBy('id','desc')->limit(4)->skip(1)->get();
$trending1=DB::table('posts')->where('headline',1)->where('status',1)->orderBy('id','desc')->first();
$trending2=DB::table('posts')->where('headline',1)->where('status',1)->orderBy('id','desc')->skip(1)->first();

$trending3=DB::table('posts')->where('headline',1)->where('status',1)->orderBy('id','desc')->skip(2)->first();

$trending4=DB::table('posts')->where('headline',1)->where('status',1)->orderBy('id','desc')->skip(3)->first();

$trending5=DB::table('posts')->where('headline',1)->where('status',1)->orderBy('id','desc')->skip(4)->first();
$add15=DB::table('adds')->where('page',1)->where('place',15)->orderBy('id','desc')->first();


@endphp

    <!-- Ad section -->
    @if ($add15)
    <section class="container">

    <a href="{{$add15->link}}" class="mx-auto">
        <img src="{{asset($add15->img)}}" alt="{{$add15->link}}" class="m-auto mb-1 img-fluid">
    </a>
</section>

      @endif

    <!--Desh News -->
    <section>
        <div class="container">
            <div class="flex-box">
                <div class="news-wrap">
                    <div class="cat-title custom-text-primary">
                        <div class="custom-fs-35">


                            @if (session()->has('language') && session()->get('language')==1)
                            {{$category->category_en}}

                                @else
                                {{$category->category}}
                            @endif
                        </div>
                        <div class="right">

                            <a href="{{route('category',['id'=>$category->id,'slug'=>$category->slug])}}">
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
                        <div class="col-sm-12 col-md-6">
                            <div class="generic-post-wrap">
                                <div class="soft-wrap">
                                    <div class="post-img ">
                                        <a href="{{route('news.detai',['category'=>$post->category_id,'id'=>$post->id,'slug'=>$post->slug])}}">
                                            <img src="{{$post->img}}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-heading p-0 custom-fs-18 pt-3 text-start custom-fw-600">
                                        <h2 class="custom-fs-35 custom-fw-600">
                                            <a href="{{route('news.detai',['category'=>$post->category_id,'id'=>$post->id,'slug'=>$post->slug])}}" class="custom-text-dark">
                                                @if (session()->has('language') && session()->get('language')==1)
                                                {{$post->title_en}}

                                                    @else
                                                    {{$post->title}}
                                                @endif
                                            </a>
                                        </h2>
                                        <div
                                            class="post-date d-flex justify-content-start align-items-center custom-text-gray custom-fs-16 mb-2">
                                            <i class="far fa-calendar-alt custom-text-secondary"></i>
                                            @if (session()->has('language') && session()->get('language')==1)
                                    <span class="ms-2">{{carbon\carbon::parse($post->created_at)->diffForHumans() }}</span>

                                    @else
                                    <span class="ms-2 mt-1 custom-fw-400">{{ DateConverter::fromEnglishDate(carbon\carbon::parse($post->created_at)->format('Y') ,carbon\carbon::parse($post->created_at)->format('m'), carbon\carbon::parse($post->created_at)->format('d'))->toFormattedNepaliDate() }}</span>
                                                                            @endif
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="row">
                                @foreach ($posts as $item)
                                <div class="col-sm-6">
                                    <div class="generic-post-wrap">
                                        <div class="soft-wrap">
                                            <div class="post-img ">
                                                <a href="{{route('news.detai',['category'=>$item->category_id,'id'=>$item->id,'slug'=>$item->slug])}}">
                                                    <img src="{{asset($item->img)}}" alt="">
                                                </a>
                                            </div>
                                            <div class="post-heading p-0 custom-fs-18 pt-3 text-start">
                                                <h2 class="custom-fs-20 custom-fs-600">
                                                    <a href="{{route('news.detai',['category'=>$item->category_id,'id'=>$item->id,'slug'=>$item->slug])}}" class="custom-text-dark">
                                                        @if (session()->has('language') && session()->get('language')==1)
                                                        {{$item->title_en}}

                                                @else
                                                {{$item->title}}
                                            @endif
                                                    </a>
                                                </h2>
                                                <div
                                                    class="post-date d-flex justify-content-start align-items-center custom-text-gray custom-fs-16 mb-2">
                                                    <i class="far fa-calendar-alt custom-text-secondary"></i>
                                                    @if (session()->has('language') && session()->get('language')==1)


                                                    <span class="ms-2">{{carbon\carbon::parse($item->created_at)->diffForHumans() }}</span>

                                                    @else
                                                    <span class="ms-2 custom-fw-400 mt-2">{{ DateConverter::fromEnglishDate(carbon\carbon::parse($item->created_at)->format('Y') ,carbon\carbon::parse($item->created_at)->format('m'), carbon\carbon::parse($item->created_at)->format('d'))->toFormattedNepaliDate() }}</span>
                                                                                            @endif
                                                </div>
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
                    <div class="side-card">
                        <div class="title">
                      @if (session()->has('language') && session()->get('language')==1)
                       Treanding

                      @else
                      ट्रेन्डिङ
                      @endif

                        </div>
                        <ul class="trending">
                            <li class="custom-b-bottom custom-fs-18">
                                <span class="custom-fs-50 custom-text-lightgray">
                                    @if (session()->has('language') && session()->get('language')==1)
                                   1.

                             @else
                             १.
                         @endif

                                    </span>
                                <a href="{{route('news.detai',['category'=>$trending1->category_id,'id'=>$trending1->id,'slug'=>$trending1->slug])}}" class="custom-text-gray custom-fw-600 ">
                                       @if (session()->has('language') && session()->get('language')==1)
                                    {{$trending1->title_en}}

                            @else
                            {{$trending1->title}}
                        @endif
                    </a>
                            </li>
                            <li class="custom-b-bottom custom-fs-18">
                                <span class="custom-fs-50 custom-text-lightgray">
                                    @if (session()->has('language') && session()->get('language')==1)
                                    2.

                              @else
                              २.

                          @endif
                                </span>
                                <a href="{{route('news.detai',['category'=>$trending2->category_id,'id'=>$trending2->id,'slug'=>$trending2->slug])}}" class="custom-text-gray custom-fw-600 ">
                                    @if (session()->has('language') && session()->get('language')==1)
                                    {{$trending2->title_en}}

                            @else
                            {{$trending2->title}}
                        @endif
                                </a>
                            </li>
                            <li class="custom-b-bottom custom-fs-18">
                                <span class="custom-fs-50 custom-text-lightgray">

                                    @if (session()->has('language') && session()->get('language')==1)
                                    3.

                              @else
                              ३.

                          @endif
                                    </span>
                                <a href="{{route('news.detai',['category'=>$trending3->category_id,'id'=>$trending3->id,'slug'=>$trending3->slug])}}" class="custom-text-gray custom-fw-600 ">
                                    @if (session()->has('language') && session()->get('language')==1)
                                    {{$trending3->title_en}}

                            @else
                            {{$trending3->title}}
                        @endif
                                </a>
                            </li>
                            <li class="custom-b-bottom custom-fs-18">
                                <span class="custom-fs-50 custom-text-lightgray">
                                    @if (session()->has('language') && session()->get('language')==1)
                                    4.

                              @else
                              ४.

                          @endif
                                </span>
                                <a href="{{route('news.detai',['category'=>$trending4->category_id,'id'=>$trending4->id,'slug'=>$trending4->slug])}}" class="custom-text-gray custom-fw-600 ">
                                    @if (session()->has('language') && session()->get('language')==1)
                                    {{$trending4->title_en}}

                            @else
                            {{$trending4->title}}
                        @endif
                                </a>
                            </li>
                            <li class="custom-b-bottom custom-fs-18">
                                <span class="custom-fs-50 custom-text-lightgray">
                                    @if (session()->has('language') && session()->get('language')==1)
                                    5.

                              @else
                              ५.

                          @endif
                                </span>
                                <a href="{{route('news.detai',['category'=>$trending5->category_id,'id'=>$trending5->id,'slug'=>$trending5->slug])}}" class="custom-text-gray custom-fw-600 ">
                                    @if (session()->has('language') && session()->get('language')==1)
                                    {{$trending5->title_en}}

                            @else
                            {{$trending5->title}}
                        @endif
                                </a>
                            </li>
                        </ul>
                    </div>


                </aside>
            </div>
        </div>
    </section>
