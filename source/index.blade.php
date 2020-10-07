@extends('_layouts.master')

@section('body')
    <div class="bg-white">
      <div class="mx-auto py-12 px-4 max-w-screen-xl sm:px-6 lg:px-8 lg:py-24">
        <div class="space-y-12">
          <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
            <h1 class="text-3xl leading-9 font-extrabold tracking-tight sm:text-4xl">Colin McAtee</h1>
            <p class="text-xl leading-7 text-gray-500">Software Engineer @ <a class="text-blue-500" href="https://activecampaign.com">ActiveCampaign</a> | Founder of <a class="text-blue-500" href="https://productiverecruit.com">Productive Recruit</a></p>
{{-- and <a class="text-blue-500" href="https://lucidlog.app">Lucid Log</a>--}}
          </div>
            <ul class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">
            <li>
              <div class="space-y-4">
                <div class="relative pb-3/4">
                  <img class="absolute object-cover h-full w-full shadow-lg rounded-lg" src="https://cmcatee.s3.amazonaws.com/family_pic.JPG" alt="">
                </div>

                <div class="space-y-2">
                  <div class="text-lg leading-6 font-medium space-y-1">
                    <p class="text-indigo-600"></p>
                  </div>
                  <ul class="flex space-x-5">
                    <li>
                      <a href="https://twitter.com/colin_mcatee" class="text-gray-400 hover:text-gray-500 transition ease-in-out duration-150">
                        <span class="sr-only">Twitter</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            </ul>
        </div>
      </div>
    </div>
    @include('views.blog')
    @include('views.footer')
@endsection
