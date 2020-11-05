---
pagination:
  collection: posts
  perPage: 9
---
@extends('_layouts.blog')
@section('body')
    <div class="bg-white">
      <div class="mx-auto py-12 px-4 sm:px-6 lg:px-8 lg:py-12 text-center">
        <div class="space-y-12">
            <div class="space-y-5 sm:space-y-4">
            <h2 class="text-4xl tracking-tight leading-10 text-blue-600 sm:leading-none">
              Colin McAtee's Blog.
            </h2>
            <p class="mt-2 max-w-md mx-auto text-lg text-gray-500 md:mt-3 md:max-w-3xl">
              Writing about web development, building side projects, careers, and growing my boostrapped company.
            </p>
            <a type="button" href="/" class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded">
              More about me &rarr;
            </a>
            @include('views.social')
          </div>
        </div>
      </div>
    </div>
        <div class="relative bg-gray-50 pt-8 pb-20 px-4 sm:px-6 lg:pt-12 lg:pb-28 lg:px-8">
                <div class="relative max-w-7xl mx-auto">
                    @foreach ($pagination->items->chunk(3) as $chunk)
                        <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
                        @foreach($chunk as $post)
                                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                                    <div class="flex-shrink-0">
                                        <img class="h-48 w-full object-cover" src="{{$post->og_image}}" alt="" />
                                    </div>
                                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                                        <div class="flex-1">
                                            <p class="text-sm leading-5 font-medium text-blue-600">
                                                <a href="#" class="hover:underline">
                                                    {{$post->category}}
                                                </a>
                                            </p>
                                            <a href="/blog/{{strtolower($post->category)}}/{{$post->slug}}" class="block">
                                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                                    {{$post->title}}
                                                </h3>
                                                <p class="mt-3 text-base leading-6 text-gray-500">
                                                    {{$post->description}}
                                                </p>
                                            </a>
                                        </div>
                                        <div class="mt-6 flex items-center">
                                            <div class="flex-shrink-0">
                                                <a href="#">
                                                    <img class="h-10 w-10 rounded-full" src="{{$post->author_image}}" alt="" />
                                                </a>
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-sm leading-5 font-medium text-gray-900">
                                                    <a href="#" class="hover:underline">
                                                        {{$post->author}}
                                                    </a>
                                                </p>
                                                <div class="flex text-sm leading-5 text-gray-500">
                                                    <time datetime="{{$post->date}}">
                                                        {{date('M j, Y', $post->date)}}
                                                    </time>
                                                    <span class="mx-1">
                                                        &middot;
                                                    </span>
                                                    <span>
                                                        {{$post->time}} min read
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                       @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
            <nav class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                <div class="flex-1 flex justify-between sm:justify-end">
                    @if($previous = $pagination->previous)
                      <a href="{{$page->base_url}}{{$previous}}" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">Previous page</a>
                    @endif
                    @if($next = $pagination->next)
                       <a href="{{$page->base_url}}{{$next}}" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                           Next page
                      </a>
                    @endif
                </div>
            </nav>
@include('views.footer')
@endsection