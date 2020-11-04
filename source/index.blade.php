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
            @include('views.social')
          </div>
        </div>
      </div>
    </div>
    @include('views.work')
    @include('views.tech')
    @include('views.blog')
    @include('views.footer')
@endsection
