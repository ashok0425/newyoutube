 @php
 use Krishnahimself\DateConverter\DateConverter;
 $category=DB::table('categories')->orderBy('id','desc')->skip(4)->first();
 $post=DB::table('posts')->where('category_id',$category->id)->where('status',1)->orderBy('id','desc')->first();
 $posts=DB::table('posts')->where('category_id',$category->id)->where('status',1)->orderBy('id','desc')->limit(6)->skip(1)->get();
 $comment=DB::table('comments')->join('posts','posts.id','comments.post_id')->select('comments.post_id')->groupBy('comments.post_id')->where('posts.status',1)->limit(4)->get();
 $add17=DB::table('adds')->where('page',1)->where('place',17)->orderBy('id','desc')->first();

 @endphp
 {{-- <!-- Ad section -->
 @if ($add17)
 <section class="container">

 <a href="{{$add17->link}}" class="mx-auto">
     <img src="{{asset($add17->img)}}" alt="{{$add17->link}}" class="m-auto mb-1 img-fluid">
 </a>
</section>

   @endif --}}

<!-- Interview -->
<section class="custom-bg-white">
    <div class="container">
        <div class="flex-box">
            <div class="news-wrap  interview-wrap ">
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
                <div class="interview mb-3">
                    <div class="row">
                        <div class="col-md-7 pe-auto pe-md-0">
                            <div class="cvr-text custom-bg-primary custom-fs-35 custom-fw-600">
                                <i class="fas fa-quote-left"></i>
                                <a href="{{route('news.detai',['category'=>$post->category_id,'id'=>$post->id,'slug'=>$post->slug])}}">
                                    @if (session()->has('language') && session()->get('language')==1)
                                    {{$post->title_en}}

                                        @else
                                        {{$post->title}}
                                    @endif
                                </a>
                            </div>
                        </div>
                        <div class="col-md-5 ps-auto ps-md-0">
                            <div class="img-wrap">
                                <a href="{{route('news.detai',['category'=>$post->category_id,'id'=>$post->id,'slug'=>$post->slug])}}"> <img src="{{$post->img}}" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($posts as $item)
                    <div class="col-md-6">
                        <div class="generic-post-wrap">
                            <div class="soft-wrap row">
                                <div class="col-4">

                                    <div class="post-img ">
                                        <a href="{{route('news.detai',['category'=>$item->category_id,'id'=>$item->id,'slug'=>$item->slug])}}">
                                            <img src="{{asset($item->img)}}" alt=""
                                                class="img-fluid">
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
                    </div>
                    @endforeach



            </div>
        </div>

            <aside>
                <div class="side-card">
                    <div class="title">
                        @if (session()->has('language') && session()->get('language')==1)

                                                Most Commented Post

                                                @else
                                                धेरै कमेन्ट गरिएका

                                            @endif
                    </div>
                    <ul class="most-commented">

                        @foreach ($comment as $item)
                    @php
                        
                        $p=DB::table('posts')->where('id',$item->post_id)->first();
                    @endphp
                        <li>
                            <span class="id">
                               {{ count(DB::table('comments')->where('post_id',$item->post_id)->get())}}
                                <span>
                                    @if (session()->has('language') && session()->get('language')==1)

                                               Comment

                                                @else
                                                प्रतिक्रिया

                                            @endif
                                    </span>
                            </span>
                            <a href="{{route('news.detai',['category'=>$p->category_id,'id'=>$p->id,'slug'=>$p->slug])}}" class="custom-fs-18">
                                @php
                                $title=DB::table('posts')->where('id',$item->post_id)->first();

                                @endphp
                                  @if (session()->has('language') && session()->get('language')==1)

                                  {{$title->title_en}}
                                @else
                                {{$title->title}}

                                @endif

                            </a>
                        </li>
                        @endforeach


                    </ul>
                </div>
            </aside>
        </div>
    </div>
</section>
