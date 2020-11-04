---
pagination:
  collection: posts
  perPage: 1
---
@extends('_layouts.blog')
    <div class="bg-white">
      <div class="mx-auto py-12 px-4 sm:px-6 lg:px-8 lg:py-24 text-center">
        <div class="space-y-12">
            <div class="relative bg-gray-50 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
                <div class="absolute inset-0">
                    <div class="bg-white h-1/3 sm:h-2/3"></div>
                </div>
                <div class="relative max-w-7xl mx-auto">
                    <div class="text-center">
                      <p class="mt-3 max-w-2xl mx-auto text-xl leading-7 text-gray-500 sm:mt-4">
                        My latest posts.
                      </p>
                    </div>
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
                                                <a href="" class="hover:underline">
                                                    {{$post->tag}}
                                                </a>
                                            </p>
                                            <a href="/blog/{{$post->slug}}" class="block">
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
                      <div class="hidden sm:block">
                        <p class="text-sm leading-5 text-gray-700">
                          Showing
                          <span class="font-medium">1</span>
                          to
                          <span class="font-medium">10</span>
                          of
                          <span class="font-medium">20</span>
                          results
                        </p>
                      </div>
                      <div class="flex-1 flex justify-between sm:justify-end">
                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                          Previous
                        </a>
                        <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                          Next
                        </a>
                      </div>
                    </nav>
        </div>
      </div>
    </div>
@include('views.footer')