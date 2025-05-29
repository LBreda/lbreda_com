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
                <img src="/assets/images/foto.jpg" class="rounded-full w-32 h-32" alt="Portrait photo of Lorenzo">
            </div>
            <div class="flex content-end hidden sm:block">
                <h2 class="text-7xl">Sono Lorenzo. Risolvo problemi.</h2>
            </div>
        </div>
    </div>
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-3 sm:gap-4 px-2">

        <x-box title="Analisi e progettazione">
            <x-p>
                Hai un problema o un processo che pensi possa essere semplificato con un software?
            </x-p>
            <x-p>
                Mi occupo di analizzare con te la questione, per elaborare una soluzione che ti soddisfi, sia
                utilizzando software presente sul mercato che realizzandone di apposito.
            </x-p>
            <x-p>
                Ho piú di dieci anni di esperienza nell'analisi di processi industriali e burocratici al fine di
                informatizzarli, e posso metterli al tuo servizio.
            </x-p>
        </x-box>

        <x-box title="Realizzazione di software">
            <x-p>
                Se un software web-based è la soluzione che cerchi, e non lo trovi sul mercato, posso realizzarlo per te.
            </x-p>
            <x-p>
                Ho una lunga esperienza nella realizzazione di applicativi web, e utilizzo tecnologie allo stato dell'arte
                per produrre software di qualità, ben documentato, facile da manutenere in futuro e facile da usare
                tanto su PC quanto su dispositivi mobili.
            </x-p>
        </x-box>

        <x-box title="Consulenza">
            <x-p>
                Se hai bisogno di consulenza informatica nel gestire un progetto, posso aiutarti. Posso mettere ordine
                nelle tue idee, pianificare i processi, produrre la documentazione, assistere il tuo team nelle
                operazioni piú delicate.
            </x-p>
        </x-box>
    </div>
@endsection
