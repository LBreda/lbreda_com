---
title: Home
language: it
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
                <h2 class="text-7xl">Sono Lorenzo. Risolvo problemi.</h2>
            </div>
        </div>
    </div>
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-3 sm:gap-4 px-2">

        <x-box title="Chi">
            <x-p>
                Sono uno sviluppatore che si occupa principalmente di applicazioni web, a Roma.
            </x-p>
            <x-p>
                Sono particolarmente esperto nello sviluppo di software in php con il framework
                Laravel, e amo occuparmi piú del back-end che del front-end, pur lavorando in
                entrambi gli ambiti.
            </x-p>
        </x-box>

        <x-box title="Cosa">
            <x-p>
                Nel mio lavoro mi occupo di progettare e realizzare soluzioni software, soprattutto
                web-based, e collaboro alla progettazione e alla manutenzione delle infrastrutture
                necessarie a ospitarle. Il mio CV è
                <a href="https://raw.githubusercontent.com/LBreda/cv/master/cv_it.pdf">qui</a>.
            </x-p>
            <x-p>
                Su <a href="https://github.com/lbreda">GitHub</a> si trovano buona parte dei miei
                progetti personali, non legati al mio lavoro vero e proprio.
            </x-p>
        </x-box>

        <x-box title="Ti servo?">
            <x-p>
                Se hai un problema e pensi che la soluzione sia un buon software, sí.
            </x-p>
            <x-p>
                Puoi raggiungermi dalla pagina contatti, e vediamo cosa si può fare.
            </x-p>
        </x-box>

    </div>
@endsection
