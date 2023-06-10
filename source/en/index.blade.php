---
title: Home
language: en
show_title: false
---
@extends('_layouts.main')

@section('body')
    <div class="bg-secondary">
        <div class="container mx-auto min-h-[16rem] flex flex-wrap content-evenly items-center px-2 py-4">
            <div class="flex flex-1 w-full justify-center sm:w-min sm:justify-start">
                <img src="/assets/images/foto.jpg" class="rounded-full w-32 h-32">
            </div>
            <div class="flex content-end hidden sm:block">
                <h2 class="text-7xl">I'm Lorenzo. I solve problems.</h2>
            </div>
        </div>
    </div>
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-3 sm:gap-4 px-2">

        <x-box title="Who">
            <x-p>
                I'm a software developer in Rome, Italy, and I mainly work as a web applications developer.
            </x-p>
            <x-p>
                I'm a expert php developer, and I mainly work with the Laravel framework, which
                I love. I prefer to work on the backend, but I also have experience with the frontend.
            </x-p>
            <x-p>
                I also work as an analyst and a problem solver.
            </x-p>
        </x-box>

        <x-box title="What">
            <x-p>
                I design and develop software solutions (mainly web-based) and I collaborate in the
                implementation and maintenance of the necessary hardware infrastructure.
                My CV is <a href="https://raw.githubusercontent.com/LBreda/cv/master/cv_en.pdf">here</a>.
            </x-p>
            <x-p>
                Some of my personal side projects are available on <a href="https://github.com/lbreda">GitHub</a>.
            </x-p>
        </x-box>

        <x-box title="Do you need me?">
            <x-p>
                If you have a problem and you think a good software can solve it, yes, you do need me.
            </x-p>
            <x-p>
                You can reach me on the "contacts" section of this website, and we can work it out together.
            </x-p>
        </x-box>

    </div>
@endsection
