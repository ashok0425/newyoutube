@php
use Krishnahimself\DateConverter\DateConverter;
$category=DB::table('categories')->orderBy('id','desc')->skip(3)->first();
$post=DB::table('posts')->where('category_id',$category->id)->where('status',1)->orderBy('id','desc')->first();
$posts=DB::table('posts')->where('category_id',$category->id)->where('status',1)->orderBy('id','desc')->limit(4)->skip(1)->get();
$trending1=DB::table('thoughts')->where('status',1)->orderBy('id','desc')->first();
$trending2=DB::table('thoughts')->where('status',1)->orderBy('id','desc')->skip(1)->first();

$trending3=DB::table('thoughts')->where('status',1)->orderBy('id','desc')->skip(2)->first();
$trending4=DB::table('thoughts')->where('status',1)->orderBy('id','desc')->skip(3)->first();

$add16=DB::table('adds')->where('page',1)->where('place',16)->orderBy('id','desc')->first();



@endphp
    <!-- Ad section -->
    {{-- @if ($add16)
    <section class="container">

    <a href="{{$add16->link}}" class="mx-auto">
        <img src="{{asset($add16->img)}}" alt="{{$add16->link}}" class="m-auto mb-1 img-fluid">
    </a>
</section>

      @endif --}}

    <!-- Suchana Prabhidhi -->
    <section class="custom-bg-white">
        <div class="container">
            <div class="flex-box">
                <div class="news-wrap ">
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
                    <div class="row">
                        <div class="col-md-7">
                            <div class="generic-post-wrap">
                                <div class="soft-wrap">
                                    <div class="post-img ">
                                        <a href="{{route('news.detai',['category'=>$post->category_id,'id'=>$post->id,'slug'=>$post->slug])}}">
                                            <img src="{{$post->img}}" alt="">

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
                        <div class="col-md-5">
                            @foreach ($posts as $item)
                            <div class="generic-post-wrap mb-4">
                                <div class="soft-wrap row">
                                    <div class="col-5">

                                        <div class="post-img">
                                            <a href="{{route('news.detai',['category'=>$item->category_id,'id'=>$item->id,'slug'=>$item->slug])}}">
                                                <img src="{{asset($item->img)}}" alt="">

                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-7">

                                        <div class="post-info custom-fs-18">
                                            <h2 class="custom-fs-20 pe-0 pe-md-5 custom-fw-600">
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

                </div>
                <aside>
                    <div class="side-card">
                        <div class="title">
                            @if (session()->has('language') && session()->get('language')==1)
                            Thought

                           @else
                           विचार
                           @endif
                        </div>
                        <div class="thoughts ">
                            <div class="post">
                                <div class="summery custom-fs-18">
                                            @if (session()->has('language') && session()->get('language')==1)
                                                    {{$trending1->thought_en}}

                                            @else
                                            {{$trending1->thought}}
                                        @endif
                                        <br>

                                    <span class="client-name">        @if (session()->has('language') && session()->get('language')==1)
                                                    {{$trending1->author_en}}

                                            @else
                                            {{$trending1->author}}
                                        @endif</span>
                                </div>

                            </div>
                        </div>
                        <div class="thoughts ">
                            <div class="post">
                                <div class="summery custom-fs-18">
                                            @if (session()->has('language') && session()->get('language')==1)
                                                    {{$trending2->thought_en}}

                                            @else
                                            {{$trending2->thought}}
                                        @endif
                                        <br>

                                    <span class="client-name">        @if (session()->has('language') && session()->get('language')==1)
                                                    {{$trending2->author_en}}

                                            @else
                                            {{$trending2->author}}
                                        @endif</span>
                                </div>

                            </div>
                        </div>

                        <div class="thoughts ">
                            <div class="post">
                                <div class="summery custom-fs-18">
                                            @if (session()->has('language') && session()->get('language')==1)
                                                    {{$trending3->thought_en}}

                                            @else
                                            {{$trending3->thought}}
                                        @endif
                                        <br>
                                    <span class="client-name">        @if (session()->has('language') && session()->get('language')==1)
                                                    {{$trending3->author_en}}

                                            @else
                                            {{$trending3->author}}
                                        @endif</span>
                                </div>

                            </div>
                        </div>


                        <div class="thoughts ">
                            <div class="post">
                                <div class="summery custom-fs-18">
                                            @if (session()->has('language') && session()->get('language')==1)
                                                    {{$trending4->thought_en}}

                                            @else
                                            {{$trending4->thought}}
                                        @endif
                                        <br>
                                    <span class="client-name">        @if (session()->has('language') && session()->get('language')==1)
                                                    {{$trending4->author_en}}

                                            @else
                                            {{$trending4->author}}
                                        @endif</span>
                                </div>

                            </div>
                        </div>



                    </div>
                </aside>
            </div>
        </div>
    </section>
