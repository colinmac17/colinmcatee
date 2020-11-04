     <!--
      Tailwind UI components require Tailwind CSS v1.8 and the @tailwindcss/ui plugin.
      Read the documentation to get started: https://tailwindui.com/documentation
    -->
    <footer class="bg-white">
      <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
        @include('views.social')
        <div class="mt-8 md:mt-0 md:order-1">
          <p class="text-center text-base leading-6 text-gray-400">
            &copy; {{date('Y')}} Colin McAtee. All rights reserved.
          </p>
        </div>
      </div>
    </footer>