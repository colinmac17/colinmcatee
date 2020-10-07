@extends('_layouts.master')

@section('head')
     <style>
        .post a {
            color: #3A86FF !important;
        }
    </style>
@endsection

@section('body')
    <div class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 xl:mt-28">
        <a href="/" class="text-blue-500 text-left">&larr; Go home</a>
        <div class="text-center">
            <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                {{$page->title}}
            </h2>
            <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                By {{ $page->author }} • {{ date('F j, Y', $page->date) }}
            </p>
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium leading-5 bg-blue-700 text-white">
                {{$page->tag}}
            </span>
{{--            <div class="mt-5 max-w-2xl mx-auto sm:flex sm:justify-center md:mt-8">--}}
{{--                <img class="h-auto w-auto" src="{{$page->og_image}}" alt="" />--}}
{{--            </div>--}}
        </div>
    </div>
    <div class="py-12 px-56 post">
        @yield('content')
        <hr class="text-blue-500 mt-4 mb-4"/>
    </div>
    @include('views.footer')
@endsection