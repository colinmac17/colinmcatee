---
title: "Colin McAtee"
url: "https://colinmcatee.com"
description: "Personal website and blog for ProductiveRecruit founder, and software engineer Colin McAtee"
authorImage: "https://prodrecruit-assets.s3.amazonaws.com/site-assets/colin-headshot.webp"
ogImage: "https://colinmcatee.com/assets/images/cm-meta-img2.png"
---

@extends('_layouts.main')

@section('body')
<div class="p-8 bg-[#ECF3FE] h-screen">
    <div class="max-w-7xl space-y-8">
        <img src="/assets/images/CM.svg" class="rounded-full h-12 w-auto"/>
        <div class="space-y-1 text-gray-900">
            <h1 class="text-2xl font-bold">Colin McAtee, founder of ProductiveRecruit</h1>
            <p class="text-lg max-w-lg">I'm documenting my journey and what I learn building a B2B SaaS product.</p>
            <ul class="list-disc py-4 ml-5 text-lg">
                <li>I run a <a href="https://productiverecruit.com" target="_blank" class="text-[#0C63E7] underline">team-based college sports recruiting platform</a>, called ProductiveRecruit</li>
                <li>I work as a Software Engineer for ActiveCampaign</li>
            </ul>
        </div>
        @include('_partials.footer')
    </div>
</div>
@endsection
