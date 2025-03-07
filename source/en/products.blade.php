---
title: Products
language: en
show_title: true
---
@extends('_layouts.main')

@section('body')
    <div class="container mx-auto py-4 px-2">
        <p class="text-primary">
            Some of my personal projects may be useful to you. They all are Open Source, and
            you can freely use them (without even saying <em>thank you</em>!). If you want to
            thank me, though, you can do so <a href="https://ko-fi.com/lbreda">on Ko-fi</a> :P
        </p>
    </div>
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-3 sm:gap-4 px-2">
        <x-box title="Geometra Breda">
            <img src="/assets/images/geometrabreda.jpg" class="mb-4" alt="Screenshot di una interazione con MensaScolasticaRomaBot">
            <x-p>
                <a href="https://geometrabreda.com">Damiano Breda</a>'s website showcases the services offered by a
                surveyor in Rome, Italy.
            </x-p>
            <x-p>
                It provides both a light-color and a dark-color display mode, depending on browser settings.
            </x-p>
            <x-p>
                I was responsible for its technical implementation and offered advice regarding the structure of its content.
            </x-p>
        </x-box>
        <x-box title="MensaScolasticaRomaBot">
            <img src="/assets/images/mensascolasticaromabot.jpg" class="mb-4" alt="MensaScolasticaRomaBot interaction screenshot">
            <x-p>
                <a href="https://t.me/mensascolasticaromabot">MensaScolasticaRomaBot</a> is a Telegram bot to get every day a
                notification with the daily menu in the city council managed school canteens.
            </x-p>
            <x-p>
                It can also print in any moment the menu for the current and the next day.
            </x-p>
            <x-p>
                The source code is available <a href="https://github.com/LBreda/mensascolasticaromabot">on GitHub</a>.
            </x-p>
        </x-box>
        <x-box title="MovieDbBot">
            <img src="/assets/images/moviedbbot.jpg" class="mb-4" alt="MovieDbBot interaction screenshot">
            <x-p>
                <a href="https://t.me/moviedbbot">MovieDbBot</a> is a inline bot for Telegram. It can
                be used to get information about a movie, a TV show or an actor.
            </x-p>
            <x-p>
                It can print on any Telegram chat the main information and the poster of the movie
                or the actor's portrait.
            </x-p>
            <x-p>
                The source code is available <a href="https://github.com/LBreda/moviedbbot">on GitHub</a>.
            </x-p>
        </x-box>
        <x-box title="BricksetBot">
            <img src="/assets/images/bricksetbot.jpg" class="mb-4" alt="BricksetBot interaction screenshot">
            <x-p>
                <a href="https://t.me/brickset_bot">BricksetBot</a> is a inline bot for Telegram. It can
                be used to get information LEGO® sets from the <a href="https://brickset.com/">Brickset</a> database.
            </x-p>
            <x-p>
                It can print on any Telegram chat some information and the photo of the set.
            </x-p>
            <x-p>
                The source code is available <a href="https://github.com/LBreda/bricksetbot">on GitHub</a>.
            </x-p>
        </x-box>
        <x-box title="Couples">
            <img src="/assets/images/couples.jpg" class="mb-4" alt="Game screenshot">
            <x-p>
                <a href="https://lbreda.itch.io/couples">Couples</a> is a little <em>Memory</em>-type game per
                for the <a href="https://play.date">Playdate</a> console.
            </x-p>
            <x-p>
                Remembering the crank position for a card isn't as easy as it seems.
            </x-p>
        </x-box>
        <x-box title="Letterboxd Client">
            <img src="/assets/images/letterboxd_client.png" class="mb-4" alt="Letterboxd Client GitHub page screenshot">
            <x-p>
                Letterboxd Client is a Laravel library to interact with the Letterboxd API.
                Letterboxd is a vast database about movies and actors.
            </x-p>
            <x-p>
                It covers most of the API, letting you make a large variety of queries to the database.
            </x-p>
            <x-p>
                The source code is available <a href="https://github.com/nuovi-media/laravel-letterboxd">on GitHub</a>
                in the Nuovi Media project page. I am a collaborator.
            </x-p>
        </x-box>
        <x-box title="COVID19 IT">
            <img src="/assets/images/covid.jpg" class="mb-4" alt="Website's screenshot">
            <x-p>
                <a href="https://covid19.lbreda.com/">COVID19 IT</a> is a system which automatically
                generates some views using data about the SARS-CoV-2 pandemic in Italy.
            </x-p>
            <x-p>
                It updates itself when new official data is available.
            </x-p>
            <x-p>
                The source code is available <a href="https://github.com/LBreda/covid19_it">on GitHub</a>.
            </x-p>
        </x-box>
    </div>
@endsection