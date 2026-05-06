@extends('layouts.app')

@section('title', $post->title)

@section('content')
<section class="py-5" style="    background-color: #212529;">
    <div class="container"> 
        <h1 class="text-center mt-4">{{ $post->title }}</h1>

        <div class="mt-4" text-white">
            {!! $post->content !!}
        </div>
    </div>
</section>
@endsection