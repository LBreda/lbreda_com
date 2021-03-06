---
title: Prodotti
language: it
show_title: true
---
@extends('_layouts.main')

@section('body')
    <div class="container mx-auto py-4 px-2">
        <p class="text-primary">
            Alcuni dei miei progetti personali ti potrebbero essere utili. Sono tutti Open Source,
            e liberamente utilizzabili senza neanche dirmi grazie. Se però vuoi dirmi grazie,
            fallo <a href="https://ko-fi.com/lbreda">da queste parti</a> :P
        </p>
    </div>
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-3 sm:gap-4 px-2">
        <x-box title="COVID19 IT">
            <img src="/assets/images/covid.jpg" class="mb-4">
            <x-p>
                <a href="https://covid19.lbreda.com/">COVID19 IT</a> è un sistema che genera
                automaticamente viste sui dati riguardanti la pandemia da SARS-CoV-2 in Italia.
            </x-p>
            <x-p>
                Aggiorna automaticamente i grafici ogni volta che escono nuovi dati ufficiali.
            </x-p>
            <x-p>
                Il codice è disponibile <a href="https://github.com/LBreda/covid19_it">su GitHub</a>.
            </x-p>
        </x-box>
        <x-box title="MovieDbBot">
            <img src="/assets/images/moviedbbot.jpg" class="mb-4">
            <x-p>
                <a href="https://t.me/moviedbbot">MovieDbBot</a> è un inline bot per ottenere
                informazioni su cast, film e serie TV da The Movie DB.
            </x-p>
            <x-p>
                Può riportare in qualsiasi conversazione Telegram le principali informazioni e
                la locandina del film o la foto del membro del cast.
            </x-p>
            <x-p>
                Il codice è disponibile <a href="https://github.com/LBreda/moviedbbot">su GitHub</a>.
            </x-p>
        </x-box>
        <x-box title="Letterboxd Client">
            <img src="/assets/images/letterboxd_client.png" class="mb-4">
            <x-p>
                Letterboxd Client è una libreria Laravel che fa da client
                per le API di Letterboxd, un completo database di informazioni
                su film e attori.
            </x-p>
            <x-p>
                Copre gran parte delle API, rendendo possibili interrogazioni di diverso
                tipo al database del sito.
            </x-p>
            <x-p>
                Il codice è disponibile <a href="https://github.com/nuovi-media/laravel-letterboxd">su GitHub</a>
                nella pagina del progetto Nuovi Media, a cui collaboro.
            </x-p>
        </x-box>
    </div>
@endsection