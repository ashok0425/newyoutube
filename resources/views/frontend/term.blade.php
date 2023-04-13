@extends('frontend.master')
@php
    $about=DB::table('users')
@endphp
@section('content')
<div class="container my-5">
    {{ $about }}
</div>

@endsection
