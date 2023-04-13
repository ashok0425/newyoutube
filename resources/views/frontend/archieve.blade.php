@php
use Krishnahimself\DateConverter\DateConverter;

@endphp
@extends('frontend.master')

@section('content')
    <!-- Categories Section -->
    <section class="categories-wrap">
        <div class="container">
            <div class="cat-heading">
                @isset($category)
                    
                <h2 class="custom-bg-primary custom-text-white custom-fs-20">
                    Category: <span>
                        @if (session()->has('language') && session()->get('language')==1)
                                                {{$category->category_en}}

                                                    @else
                                                    {{$category->category}}

                                                @endif
                    </span></h2>
                    @else
                    <h2 class="custom-bg-primary custom-text-white custom-fs-20">
                        Search Result for: <span>
                            @if (session()->has('language') && session()->get('language')==1)
                                                    {{$search}}
    
                                                        @else
                                                        {{$search}}
    
                                                    @endif
                        </span></h2>
                @endisset

            </div>
            <div class="categories">

              @foreach ($post as $item)
              <div class="cat-article">
                <a href="{{route('news.detai',['category'=>$item->category_id,'id'=>$item->id,'slug'=>$item->slug])}}">
                    <div class="img-wrap">
                        <img src="{{asset($item->img)}}" alt="" class="img-fluid">
                    </div>
                    <div class="article-title">
                        <h2 class="custom-fw-600 custom-fs-18">
                                @if (session()->has('language') && session()->get('language')==1)
                                {{$item->title_en}}

                                    @else
                                    {{$item->title}}
                                @endif
                        </h2>
                    <div  class="item-date d-flex justify-content-center align-items-center  custom-text-gray custom-fs-16">
                    <i class="far fa-calendar-alt custom-text-secondary"></i>
                    @if (session()->has('language') && session()->get('language')==1)


                    <span class="ms-2">{{carbon\carbon::parse($item->created_at)->diffForHumans() }}</span>

                    @else
                    <span class="ms-2">{{ DateConverter::fromEnglishDate(carbon\carbon::parse($item->created_at)->format('Y') ,carbon\carbon::parse($item->created_at)->format('m'), carbon\carbon::parse($item->created_at)->format('d'))->toFormattedNepaliDate() }}</span>
                                                            @endif
                </div>
            </div>

                </a>

            </div>
              @endforeach

            </div>

            <div class="page-nav text-center w-25 mx-auto">
               {{$post->links()}}
            </div>
        </div>
    </section>
@endsection
