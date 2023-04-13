@extends('frontend.master')
@section('content')
@php
$videos=file_get_contents('https://www.googleapis.com/youtube/v3/search?key=AIzaSyDLje4M9eLYUhCfWzq7S3c3izAzG8t2NR0&channelId=UClFO6ULKU2XXQ_zb76JMUPQ&part=snippet&maxResults=20&order=date');

$videos=json_decode($videos);
$v=$videos->items;
$v1=$v[0];
$v2=$v[1];
$v3=$v[2];
$vs=array_slice($v,3,10);
@endphp

<section>
    <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-8 mb-3 text-center py-4 px-3 custom-text-gray relative custom-b-before">
                            <iframe width="100%" height="515" src="https://www.youtube.com/embed/{{$v1->id->videoId}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                   <h2 class="custom-fw-600">
                    <a href="https://www.youtube.com/watch?v={{$v1->id->videoId}}" class='custom-text-dark'>

                    {{$v1->snippet->title}}
                               </a> </h2>
                            <div class="post-date d-flex justify-content-center align-items-center mb-4">
                                <i class="far fa-calendar-alt custom-text-secondary"></i>
                        <span class="ms-2">{{carbon\carbon::parse($v1->snippet->publishedAt)->diffForHumans() }}</span>
                                <i class="far fa-comment-alt ms-3"></i>
                                <span class="ms-2">4</span>
                            </div>
                </div>
                    <div class="col-md-4 mb-3 text-center py-4 px-3 custom-text-gray relative custom-b-before">
                       <div>
                        <iframe width="100%" height="250" src="https://www.youtube.com/embed/{{$v2->id->videoId}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <h6 class="custom-fw-600">
                         <a href="https://www.youtube.com/watch?v={{$v2->id->videoId}}" class='custom-text-dark'>
         
                         {{$v1->snippet->title}}
                                    </a> </h6>
                                 <div class="post-date d-flex justify-content-center align-items-center mb-4">
                                     <i class="far fa-calendar-alt custom-text-secondary"></i>
                             <span class="ms-2">{{carbon\carbon::parse($v2->snippet->publishedAt)->diffForHumans() }}</span>
                                     <i class="far fa-comment-alt ms-3"></i>
                                     <span class="ms-2">8</span>
                                 </div>
                       </div>

                       <div>
                        <iframe width="100%" height="250" src="https://www.youtube.com/embed/{{$v3->id->videoId}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <h6 class="custom-fw-600">
                         <a href="https://www.youtube.com/watch?v={{$v3->id->videoId}}" class='custom-text-dark'>
         
                         {{$v3->snippet->title}}
                                    </a> </h6>
                                 <div class="post-date d-flex justify-content-center align-items-center mb-4">
                                     <i class="far fa-calendar-alt custom-text-secondary"></i>
                             <span class="ms-2">{{carbon\carbon::parse($v3->snippet->publishedAt)->diffForHumans() }}</span>
                                     <i class="far fa-comment-alt ms-3"></i>
                                     <span class="ms-2">4</span>
                                 </div>
                       </div>


            </div>
                </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            @foreach ($vs as $v2)
                            <div class="col-md-4 mb-3 text-center py-4 px-3 custom-text-gray relative custom-b-before">
                                <div>
                                 <iframe width="100%" height="250" src="https://www.youtube.com/embed/{{$v2->id->videoId}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                 <h6 class="custom-fw-600">
                                  <a href="https://www.youtube.com/watch?v={{$v2->id->videoId}}" class='custom-text-dark'>
                  
                                  {{$v1->snippet->title}}
                                             </a> </h6>
                                          <div class="post-date d-flex justify-content-center align-items-center mb-4">
                                              <i class="far fa-calendar-alt custom-text-secondary"></i>
                                      <span class="ms-2">{{carbon\carbon::parse($v2->snippet->publishedAt)->diffForHumans() }}</span>
                                              <i class="far fa-comment-alt ms-3"></i>
                                              <span class="ms-2">8</span>
                                          </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
</section>
@endsection
