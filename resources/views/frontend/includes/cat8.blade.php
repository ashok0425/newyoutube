@php
use Krishnahimself\DateConverter\DateConverter;
$category=DB::table('categories')->orderBy('id','desc')->skip(6)->first();
$post=DB::table('posts')->where('category_id',$category->id)->where('status',1)->orderBy('id','desc')->first();

$posts=DB::table('posts')->where('category_id',$category->id)->where('status',1)->orderBy('id','desc')->limit(4)->skip(1)->get();
$random=DB::table('posts')->where('status',1)->inRandomOrder()->limit(6)->get();
$add19=DB::table('adds')->where('page',1)->where('place',18)->orderBy('id','desc')->first();
@endphp

    <!-- Entertainment -->
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
            <div class="news-wrap  entertainment">
                <div class="thumb-over-layer me-3 mb-3">
                    <div class="img-wrap">
                        <img src="{{asset($post->img)}}" alt="" class="img-fuild">
                        <div class="post-heading">
                            <h3 class="custom-fs-35">
                                <a href="{{route('news.detai',['category'=>$post->category_id,'id'=>$post->id,'slug'=>$post->slug])}}">
                                    @if (session()->has('language') && session()->get('language')==1)
                                    {{$post->title_en}}

                                        @else
                                        {{$post->title}}
                                    @endif
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="me-3 mb-3">
                    @foreach ($posts as $item)
                    <div class="generic-post-wrap">
                        <div class="soft-wrap d-flex">
                            <div class="post-img img-sm me-3">
                                <a href="{{route('news.detai',['category'=>$item->category_id,'id'=>$item->id,'slug'=>$item->slug])}}">
                                    <img src="{{asset($item->img)}}">
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
                                </h2>
                            </div>
                        </div>
                    </div>
                    @endforeach


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
                    {{-- @if ($add19)
                    <div class="aside-ad-300-125 custom-bg-secondary">


                    <a href="{{$add19->link}}" class="mx-auto">
                        <img src="{{asset($add19->img)}}" alt="{{$add19->link}}" class="m-auto mb-1 img-fluid">
                    </a>
                </div>

                      @endif --}}

                </aside>
            </div>

            </div>
        </div>
    </section>
