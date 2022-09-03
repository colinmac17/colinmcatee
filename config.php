<?php

return [
    'production' => false,
    'baseUrl' => 'https://colinmcatee.com',
    'title' => 'Jigsaw',
    'description' => 'Website description.',
    'collections' => [
        'categories' => [
            'path' => 'blog/categories/{filename}'
        ],
        'posts' => [
            'path' => 'blog/{filename}',
            'sort' => '-date'
        ],
    ],
];
