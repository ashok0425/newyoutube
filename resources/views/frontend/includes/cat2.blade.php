
@php
use Krishnahimself\DateConverter\DateConverter;
use Stichoza\GoogleTranslate\GoogleTranslate;
$category=DB::table('categories')->orderBy('id','desc')->skip(1)->first();
// $post=DB::table('posts')->where('category_id',$category->id)->where('status',1)->latest()->first();
$posts=DB::table('posts')->where('category_id',$category->id)->where('status',1)->orderBy('id','desc')->limit(10)->get();
$add10=DB::table('adds')->where('page',1)->where('place',10)->orderBy('id','desc')->first();
$add11=DB::table('adds')->where('page',1)->where('place',11)->orderBy('id','desc')->first();
$add12=DB::table('adds')->where('page',1)->where('place',12)->orderBy('id','desc')->first();
$add13=DB::table('adds')->where('page',1)->where('place',13)->orderBy('id','desc')->first();
$add14=DB::table('adds')->where('page',1)->where('place',14)->orderBy('id','desc')->first();


@endphp
    {{-- <!-- Ad section -->
        @if ($add10)
        <section class="container">

        <a href="{{$add10->link}}" class="mx-auto">
            <img src="{{asset($add10->img)}}" alt="{{$add10->link}}" class="m-auto mb-1 img-fluid img-fluid">
        </a>
    </section>

          @endif --}}

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
                                                <span class="ms-2 mt-2 custom-fw-400">{{ DateConverter::fromEnglishDate(carbon\carbon::parse($item->created_at)->format('Y') ,carbon\carbon::parse($item->created_at)->format('m'), carbon\carbon::parse($item->created_at)->format('d'))->toFormattedNepaliDate() }}</span>
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
                <aside>
                    {{-- @if ($add14)
                    <div class="aside-ad-300-125 my-5 my-md-2">


        <a href="{{$add14->link}}" class="mx-auto">
            <img src="{{asset($add14->img)}}" alt="{{$add14->link}}" class="m-auto mb-1 img-fluid">
        </a>
    </div>

          @endif --}}

          {{-- @if ($add11)
          <div class="aside-ad-300-125 my-5 my-md-2">


<a href="{{$add11->link}}" class="mx-auto">
  <img src="{{asset($add11->img)}}" alt="{{$add11->link}}" class="m-auto mb-1 img-fluid">
</a>
</div>

@endif --}}
{{-- 
@if ($add12)
<div class="aside-ad-300-125 my-5 my-md-2">


<a href="{{$add12->link}}" class="mx-auto">
<img src="{{asset($add12->img)}}" alt="{{$add12->link}}" class="m-auto mb-1 img-fluid">
</a>
</div>

@endif

@if ($add13)
<div class="aside-ad-300-125 my-5 my-md-2">


<a href="{{$add13->link}}" class="mx-auto">
<img src="{{asset($add13->img)}}" alt="{{$add13->link}}" class="m-auto mb-1 img-fluid">
</a>
</div>

@endif
@if ($add14)
<div class="aside-ad-300-125 my-5 my-md-2">


<a href="{{$add14->link}}" class="mx-auto">
<img src="{{asset($add14->img)}}" alt="{{$add14->link}}" class="m-auto mb-1 img-fluid">
</a>
</div>

@endif --}}
                </aside>
            </div>
        </div>
    </section>
