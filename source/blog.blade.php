---
title: "Blog • Colin McAtee"
url: "https://colinmcatee.com/blog"
description: "Articles on building and growing a SaaS product"
authorImage: "https://prodrecruit-assets.s3.amazonaws.com/site-assets/colin-headshot.webp"
ogImage: "/assets/images/cm-meta-img.png"
---

@extends('_layouts.main')

@section('body')
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="p-8 bg-[#ECF3FE] h-screen">
        <div class="max-w-7xl space-y-8">
            <img src="/assets/images/CM.svg" class="rounded-full h-12 w-auto"/>
            <div class="pt-8 pb-20 px-4 sm:px-6 lg:pb-28 lg:px-8">
                <div class="relative max-w-lg mx-auto divide-y-2 divide-gray-200 lg:max-w-7xl">
                    <div>
                        <h1 class="text-4xl tracking-tight font-bold text-gray-900 sm:text-5xl sm:tracking-tight text-center">Blog</h2>
                    </div>
                    <div class="mt-6 pt-10 grid gap-16 lg:grid-cols-2 lg:gap-x-5 lg:gap-y-12">
                        @foreach ($posts as $post)
                        <div class="bg-gray-100 rounded-md shadow-sm px-4 py-4">
                            <a href="/blog/{{$post->slug}}" class="mt-2 block">
                            <p class="text-xl font-semibold text-gray-900">{{$post->title}}</p>
                            <p class="mt-3 text-base text-gray-500">{{$post->description}}</p>
                            </a>
                            <div class="mt-3 space-x-4">
                                <a href="/blog/{{$post->slug}}" class="text-base font-semibold text-indigo-500 hover:text-indigo-600"> Read full story </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="max-w-lg lg:max-w-7xl mx-auto mt-8">
                    <h2 class="text-xl tracking-tight font-semibold text-gray-900 sm:text-2xl sm:tracking-tight text-left">View posts by category</h2>
                    <div class="flex items-center space-x-2 mt-1">
                        @foreach ($categories as $category)
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-500"> <a href="/blog/categories/{{$category->categorySlug}}">{{$category->category}}</a> </span>
                        @endforeach
                    </div>
                </div>
            </div>
            @include('_partials.footer')
        </div>
    </div>
@endsection
