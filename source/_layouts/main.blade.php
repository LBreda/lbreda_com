<!DOCTYPE html>
<html lang="{{ $page->language ?? 'it' }}">
<head>
    <title>
        {{ $page->title }} - Lorenzo Breda
    </title>
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta charset="UTF-8"/>
    @if($page->description ?? false)
        <meta name="description" content="{{ $page->description }}"/>
    @endif
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover"/>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>

    <!-- OpenGraph -->
    <meta property="og:type" content="profile">
    <meta property="og:title" content="Lorenzo Breda - Home">
    <meta property="og:image" content="/imgs/banner.jpg">
    <meta property="og:description" content="Lorenzo Breda - Freelance Web Developer">
</head>
<body>
<nav class="sticky top-0 x-50 bg-primary text-white" x-data="{ isMobileMenuShowing: false }">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button x-on:click="isMobileMenuShowing = !isMobileMenuShowing" type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <div class="flex items-center justify-end content-endm min-w-full sm:justify-start sm:content-start sm:min-w-min">
                <h1 class="text-3xl">Lorenzo Breda</h1>
            </div>

            <div class="flex-1 flex items-center justify-end sm:items-stretch">
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        @include("_partials.{$page->language}.menu")
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu" x-show="isMobileMenuShowing" x-transition>
        <div class="px-2 pt-2 pb-3 space-y-1">
            @include("_partials.{$page->language}.menu")
        </div>
    </div>
</nav>

@if($page->show_title ?? true)
    <div class="bg-secondary">
        <div class="container mx-auto h-32 flex flex-wrap content-evenly items-center px-2">
            <div class="flex content-end">
                <h2 class="sm:text-7xl text-2xl">
                    {{ $page->title }}
                </h2>
            </div>
        </div>
    </div>
@endif

@yield('body')

@include("_partials.{$page->language}.footer")
@include("_partials.{$page->language}.cookie_banner")

<script type="application/ld+json">
        {
          "@context": "http://schema.org/",
          "@type": "Person",
          "name": "Lorenzo Breda",
          "familyName": "Breda",
          "givenName": "Lorenzo",
          "gender": "male",
          "nationality": {
            "@type": "Country",
            "name": "Italy"
          },
          "url": "https://www.lbreda.com",
          "birthDate": "1988-04-07",
          "birthPlace": {
            "@type": "Place",
            "address": {
              "@type": "PostalAddress",
              "addressCountry": {
                "@type": "Country",
                "name": "Italy"
                },
              "addressLocality": "Rome"
            }
          },
          "image": "https://lbreda.com/img/foto.jpg",
          "jobTitle": "Full-stack Web Developer",
          "vatID": "IT13225651002"
        }


</script>
</body>
</html>