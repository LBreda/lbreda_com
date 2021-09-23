<?php

use Illuminate\Support\Str;

return [
    'production' => true,
    'baseUrl' => 'https://www.lbreda.com',
    'title' => 'Lorenzo Breda',
    'description' => 'Website description.',
    'collections' => [],'selected' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'selected' : '';
    },
];
