@extends('_layouts.master')

@section('body')
    <div class="bg-white">
      <div class="mx-auto py-12 px-4 sm:px-6 lg:px-8 lg:py-24 text-center">
        <div class="space-y-12">
          <div class="space-y-5 sm:space-y-4">
            <h2 class="text-4xl tracking-tight leading-10 text-blue-600 sm:leading-none">
              Hi, I'm Colin McAtee.
            </h2>
            <p class="mt-2 max-w-md mx-auto text-lg text-gray-500 md:mt-3 md:max-w-3xl">
              I really love making stuff with code and learning new technologies.
            </p>
{{--            <span class="inline-flex rounded-md shadow-sm">--}}
{{--              <a href="/blog" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-700 transition ease-in-out duration-150">--}}
{{--                Read latest posts &rarr;--}}
{{--              </a>--}}
{{--            </span>--}}
            @include('views.social')
          </div>
        </div>
      </div>
    </div>
    @include('views.work')
    @include('views.education')
    @include('views.tech')
    @include('views.footer')
@endsection
