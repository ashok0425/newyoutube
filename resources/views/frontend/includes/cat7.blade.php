@php
use Krishnahimself\DateConverter\DateConverter;
$category=DB::table('categories')->orderBy('id','desc')->skip(5)->first();
$post=DB::table('posts')->where('category_id',$category->id)->where('status',1)->orderBy('id','desc')->first();

$posts=DB::table('posts')->where('category_id',$category->id)->where('status',1)->orderBy('id','desc')->limit(4)->skip(1)->get();
$random=DB::table('posts')->inRandomOrder()->limit(6)->get();
$add21=DB::table('adds')->where('page',1)->where('place',21)->orderBy('id','desc')->first();
$add22=DB::table('adds')->where('page',1)->where('place',22)->orderBy('id','desc')->first();
$add23=DB::table('adds')->where('page',1)->where('place',23)->orderBy('id','desc')->first();



@endphp


{{-- <!-- Ad section -->
@if ($add21)
<section class="container">

<a href="{{$add21->link}}" class="mx-auto">
    <img src="{{asset($add21->img)}}" alt="{{$add21->link}}" class="m-auto mb-1 img-fluid">
</a>
</section>

  @endif --}}

<!-- Bussiness -->
<section class="custom-bg-white">
    <div class="container">
        <div class="cat-title custom-text-primary custom-bg-light">
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
        <div class="flex-box">
            <div class="news-wrap ">


                <div class="row mb-5">
                    <div class="col-md-5">
                        <div class="generic-post-wrap">
                            <div class="soft-wrap bussiness ">
                                <div class="post-img ">
                                    <a href="{{route('news.detai',['category'=>$post->category_id,'id'=>$post->id,'slug'=>$post->slug])}}">
                                        <img src="{{$post->img}}" alt="" class="img-fluid" >
                                    </a>
                                </div>
                                <div class="post-info custom-fs-18 pt-3">
                                    <h2 class="custom-fs-35 custom-fw-600">
                                        <a href="{{route('news.detai',['category'=>$post->category_id,'id'=>$post->id,'slug'=>$post->slug])}}" class="custom-text-dark">
                                            @if (session()->has('language') && session()->get('language')==1)
                                    {{$post->title_en}}

                                        @else
                                        {{$post->title}}
                                    @endif
                                </a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        @foreach ($posts as $item)

                        <div class="generic-post-wrap">
                            <div class="soft-wrap row">
                                <div class="col-4">
                                    <div class="post-img">
                                        <a href="{{route('news.detai',['category'=>$item->category_id,'id'=>$item->id,'slug'=>$item->slug])}}">
                                            <img src="{{asset($item->img)}}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8">

                                    <div class="post-info custom-fs-18 ">
                                        <h2 class="custom-fs-24 custom-fw-600">
                                            <a href="{{route('news.detai',['category'=>$item->category_id,'id'=>$item->id,'slug'=>$item->slug])}}" class="custom-text-dark">
                                                @if (session()->has('language') && session()->get('language')==1)

                                                {{$item->title_en}}

                                                @else
                                                {{$item->title}}
                                            @endif
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>


                {{-- @if ($add22)
                <div class="py-3 custom-text-white custom-fs-24 custom-ad-banner-900">


                <a href="{{$add22->link}}" class="mx-auto">
                    <img src="{{asset($add22->img)}}" alt="{{$add22->link}}" class="m-auto mb-1 img-fluid">
                </a>
            </div>

                  @endif --}}


            </div>
            <aside class="abc">
                <div class="side-card">
                    <ul class="business-side">
                        @foreach ($random as $item)
                        <li><a href="{{route('news.detai',['category'=>$item->category_id,'id'=>$item->id,'slug'=>$item->slug])}}">
                            @if (session()->has('language') && session()->get('language')==1)

                            {{$item->title_en}}

                            @else
                            {{$item->title}}
                        @endif
                        </a></li>
                        @endforeach

                    </ul>
                </div>
                {{-- @if ($add23)
                <div class="aside-ad-300-125 ">

                <a href="{{$add23->link}}" class="mx-auto">
                    <img src="{{asset($add23->img)}}" alt="{{$add23->link}}" class="m-auto mb-1 img-fluid">
                </a>
            </div>

                  @endif --}}

            </aside>
        </div>
    </div>
</section>
