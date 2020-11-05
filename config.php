<?php

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Colin McAtee // Software Engineer & Bootstrapped Founder',
    'blog_title' => 'Colin McAtee\'s Blog',
    'blog_description' => 'Writing about web development, building side projects, careers, and growing my boostrapped company.',
    'description' => 'Colin McAtee\'s Blog',
    'og_image' => 'https://cmcatee.s3.amazonaws.com/cm-main-meta.png',
    'site_url' => 'https://colinmcatee.com',
    'collections' => [
         'posts' => [
            'author' => 'Colin McAtee',
            'path' => 'blog/{filename}',
            'sort' => '-date'
        ],
    ],
];
