<!-- News -->
@php
use Krishnahimself\DateConverter\DateConverter;

$category=DB::table('categories')->latest()->first();
$post=DB::table('posts')->where('main',1)->where('status',1)->latest()->first();
$add4=DB::table('adds')->where('page',1)->where('place',4)->orderBy('id','desc')->first();
$add3=DB::table('adds')->where('page',1)->where('place',3)->orderBy('id','desc')->first();

@endphp
<section>
    <div class="container">

                    <div class="row">
                        <div class="col-md-12">
                            @if ($add3)

        <a href="{{$add3->link}}" class="mx-auto">
            <img src="{{asset($add3->img)}}" alt="{{$add3->link}}" class="m-auto mb-1 img-fluid">
        </a>
          @endif
                        </div>
                        <div class="col-md-12 mb-3 text-center py-4 px-3 custom-text-gray relative custom-b-before">

                            <h2 class="custom-fw-600"><a href="{{route('news.detai',['category'=>$post->category_id,'id'=>$post->id,'slug'=>$post->slug])}}" class='custom-text-dark'>

                                @if (session()->has('language') && session()->get('language')==1)
                                {{$post->title_en}}

                                    @else
                                    {{$post->title}}
                                @endif
                               </a> </h2>
                            <div class="post-date d-flex justify-content-center align-items-center mb-4">
                                <i class="far fa-calendar-alt custom-text-secondary"></i>
                                @if (session()->has('language') && session()->get('language')==1)


<span class="ms-2">{{carbon\carbon::parse($post->created_at)->diffForHumans() }}</span>

                                    @else
                                    <span class="ms-2">{{ DateConverter::fromEnglishDate(carbon\carbon::parse($post->created_at)->format('Y') ,carbon\carbon::parse($post->created_at)->format('m'), carbon\carbon::parse($post->created_at)->format('d'))->toFormattedNepaliDate() }}</span>
                                @endif


@php
$comment=DB::table('comments')->where('post_id',$post->id)->get();
@endphp

                                <i class="far fa-comment-alt ms-3"></i>
                                <span class="ms-2">{{count($comment)}}</span>
                            </div>


                </div>

</section>
