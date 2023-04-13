@php
use Krishnahimself\DateConverter\DateConverter;
$category=DB::table('categories')->orderBy('id','desc')->skip(7)->first();
$post=DB::table('posts')->where('category_id',$category->id)->where('status',1)->orderBy('id','desc')->first();
$posts=DB::table('posts')->where('category_id',$category->id)->where('status',1)->orderBy('id','desc')->limit(4)->skip(1)->get();
$postes=DB::table('posts')->where('category_id',$category->id)->where('status',1)->orderBy('id','asc')->limit(2)->skip(1)->get();
$add20=DB::table('adds')->where('page',1)->where('place',20)->orderBy('id','desc')->first();
@endphp

    {{-- <!-- Ad section -->
    @if ($add20)
    <section class="container">

    <a href="{{$add20->link}}" class="mx-auto">
        <img src="{{asset($add20->img)}}" alt="{{$add20->link}}" class="m-auto mb-1 img-fluid">
    </a>
    </section>

      @endif --}}

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
                        <div class="col-sm-12 col-md-4">
                            <div class="generic-post-wrap">
                                <div class="soft-wrap">
                                    <div class="post-img ">
                                        <a href="{{route('news.detai',['category'=>$post->category_id,'id'=>$post->id,'slug'=>$post->slug])}}">
                                            <img src="{{$post->img}}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-heading p-0 custom-fs-18 pt-3 text-start">
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
                                    <span class="ms-2">{{ DateConverter::fromEnglishDate(carbon\carbon::parse($post->created_at)->format('Y') ,carbon\carbon::parse($post->created_at)->format('m'), carbon\carbon::parse($post->created_at)->format('d'))->toFormattedNepaliDate() }}</span>
                                                                            @endif
                                        </div>
                                        @if (session()->has('language') && session()->get('language')==1)
                                        {!! Strip_tags(Str::limit($post->detail_en,320))!!}

                                            @else
                                            {!! Strip_tags(Str::limit($post->detail,320))!!}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
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
                                                <h2 class="custom-fs-20 custom-fw-600">
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
                                                    <span class="ms-2">{{ DateConverter::fromEnglishDate(carbon\carbon::parse($item->created_at)->format('Y') ,carbon\carbon::parse($item->created_at)->format('m'), carbon\carbon::parse($item->created_at)->format('d'))->toFormattedNepaliDate() }}</span>
                                                                                            @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach


                            </div>

                        </div>






<div class="col-md-4">
                    <div class="row">
                        @foreach ($postes as $item)
                        <div class="col-sm-12">
                            <div class="generic-post-wrap">
                                <div class="soft-wrap">
                                    <div class="post-img ">
                                        <a href="{{route('news.detai',['category'=>$item->category_id,'id'=>$item->id,'slug'=>$item->slug])}}">
                                            <img src="{{asset($item->img)}}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-heading p-0 custom-fs-18 pt-3 text-start">
                                        <h2 class="custom-fs-20 custom-fw-600">
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
                                            <span class="ms-2">{{ DateConverter::fromEnglishDate(carbon\carbon::parse($item->created_at)->format('Y') ,carbon\carbon::parse($item->created_at)->format('m'), carbon\carbon::parse($item->created_at)->format('d'))->toFormattedNepaliDate() }}</span>
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
    </section>
