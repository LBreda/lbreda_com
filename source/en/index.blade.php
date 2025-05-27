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
                <img src="/assets/images/foto.jpg" class="rounded-full w-32 h-32" alt="Portrait photo of Lorenzo">
            </div>
            <div class="flex content-end hidden sm:block">
                <h2 class="text-7xl">I'm Lorenzo. I solve problems.</h2>
            </div>
        </div>
    </div>
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-3 sm:gap-4 px-2">

        <x-box title="Analysis and Design">
            <x-p>
                Do you have a problem or a process that you believe could be simplified using some software?
            </x-p>
            <x-p>
                I'll work with you to analyze the issue, to create a solution that satisfies you, either
                using available software or developing a custom one.
            </x-p>
            <x-p>
                I have more than ten years of experience in analyzing industrial and bureaucratic processes in order to
                computerize them, and I offer you all of it.
            </x-p>
        </x-box>

        <x-box title="Software Development">
            <x-p>
                If a web-based software is the solution you're looking for, and you can't find it on the market, I can create it for you.
            </x-p>
            <x-p>
                I have a long experience in developing web applications, and I use state-of-the-art technologies
                to create well-documented and easy to maintain software. I'm also experienced in developing
                mobile friendly web applications.
            </x-p>
        </x-box>

        <x-box title="Consulting">
            <x-p>
                If you need IT consulting in managing a project, I can help you. I can organize
                your ideas, plan processes, create documentation, and assist your team in
                the most delicate operations.
            </x-p>
        </x-box>
    </div>
@endsection
