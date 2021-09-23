<!--
    =======================================================================
    Name    :   Cookie Banner
    Author  :   Surjith S M
    Twitter :   @surjithctly

    Get more components here 👉 https://web3templates.com/components

    Copyright © 2021
    =======================================================================
 -->

<div x-data="{ open: document.cookie.split('; ').filter(row => row.startsWith('lbredacom-cookiebanner-accepted')).length === 0 }">
    <div  x-cloak x-show="open"
          x-transition:enter-start="opacity-0 scale-90"
          x-transition:enter="transition duration-200 transform ease"
          x-transition:leave="transition duration-200 transform ease"
          x-transition:leave-end="opacity-0 scale-90"
          class="max-w-screen-lg mx-auto fixed bg-white inset-x-5 p-5 bottom-40 rounded-lg drop-shadow-2xl flex gap-4 flex-wrap md:flex-nowrap text-center md:text-left items-center justify-center md:justify-between">
        <div class="w-full">
            {{ $text }}
            <a href="/it/cookies" class="text-accent whitespace-nowrap hover:underline">{{ $more }}</a>
        </div>
        <div class="flex gap-4 items-center flex-shrink-0">
            <button @click="open = false; document.cookie = 'lbredacom-cookiebanner-accepted=1; SameSite=Strict; Path=/'" class="bg-primary px-5 py-2 text-white rounded-md hover:bg-indigo-700 focus:outline-none">
                {{ $closeButton }}</button>
        </div>
    </div>

</div>