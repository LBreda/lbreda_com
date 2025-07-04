---
title: Prodotti
language: it
show_title: true
---
@extends('_layouts.main')

@section('body')
    <div class="container mx-auto py-4 px-2">
        <p class="text-primary">
            Alcuni dei miei progetti personali ti potrebbero essere utili. Alcuni sono Open Source,
            e liberamente utilizzabili senza neanche dirmi grazie. Se però vuoi dirmi grazie,
            fallo <a href="https://ko-fi.com/lbreda">da queste parti</a> :P
        </p>
    </div>
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-3 sm:gap-4 px-2">
        <x-box title="Centro Diurno l'Alberoblu" image="/assets/images/alberoblu.jpg" image-alt="Screenshot del sito del Centro Diurno">
            <x-p>
                Il sito del <a href="https://www.alberoblu.org">Centro Diurno L'Alberoblu</a> è il sito informativo di
                un centro diurno psichiatrico.
            </x-p>
            <x-p>
                Rende disponibile sia una modalità di visualizzazione con colori chiari che una con colori scuri, a seconda delle
                impostazioni del browser, e include un blog e una sezione che rendiconta gli eventi organizzati dal Centro.
            </x-p>
            <x-p>
                Ho offerto consulenza per la sua realizzazione, che ho poi curato.
            </x-p>
        </x-box>
        <x-box title="Geometra Breda" image="/assets/images/geometrabreda.jpg" image-alt="Screenshot del sito Geometra Breda">
            <x-p>
                Il sito del <a href="https://geometrabreda.com">geometra Damiano Breda</a> è un sito vetrina per i servizi
                offerti da un geometra.
            </x-p>
            <x-p>
                Rende disponibile sia una modalità di visualizzazione con colori chiari che una con colori scuri, a seconda delle
                impostazioni del browser.
            </x-p>
            <x-p>
                Ne ho curato la realizzazione tecnica e ho offerto una consulenza per quanto riguarda la struttura dei
                contenuti.
            </x-p>
        </x-box>
        <x-box title="MensaScolasticaRomaBot" image="/assets/images/mensascolasticaromabot.jpg" image-alt="Screenshot di una interazione con MensaScolasticaRomaBot">
            <x-p>
                <a href="https://t.me/mensascolasticaromabot">MensaScolasticaRomaBot</a> è un bot per ottenere ogni giorno la
                notifica del menu della mensa scolastica comunale a Roma.
            </x-p>
            <x-p>
                Rende anche possibile ottenere in qualsiasi momento il menu del giorno corrente e di quello successivo.
            </x-p>
            <x-p>
                Il codice è disponibile <a href="https://github.com/LBreda/mensascolasticaromabot">su GitHub</a>.
            </x-p>
        </x-box>
        <x-box title="MovieDbBot" image="/assets/images/moviedbbot.jpg" image-alt="Screenshot di una interazione con MovieDbBot">
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
        <x-box title="BricksetBot" image="/assets/images/bricksetbot.jpg" image-alt="Screenshot di una interazione con BrickSetBot">
            <x-p>
                <a href="https://t.me/brickset_bot">BricksetBot</a> è un inline bot per ottenere
                informazioni su set LEGO® dal database di <a href="https://brickset.com/">Brickset</a>.
            </x-p>
            <x-p>
                Può riportare in qualsiasi conversazione Telegram le principali informazioni e
                una foto del set, se presente.
            </x-p>
            <x-p>
                Il codice è disponibile <a href="https://github.com/LBreda/bricksetbot">su GitHub</a>.
            </x-p>
        </x-box>
        <x-box title="Couples" image="/assets/images/couples.jpg" image-alt="Screenshot del gioco">
             <x-p>
                <a href="https://lbreda.itch.io/couples">Couples</a> è un gioco di tipo <em>Memory</em> per
                la console <a href="https://play.date">Playdate</a>.
            </x-p>
            <x-p>
                Ricordare la posizione della manovella per una carta è meno facile di quel che sembri!
            </x-p>
        </x-box>
        <x-box title="Letterboxd Client" image="/assets/images/letterboxd_client.png" image-alt="Screenshot della pagina GitHub di LetterboxdClient">
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
        <x-box title="COVID19 IT" image="/assets/images/covid.jpg" image-alt="Screenshot del sito">
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
    </div>
@endsection