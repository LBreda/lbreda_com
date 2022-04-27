---
title: Cookie policy
language: it
show_title: true
---
@extends('_layouts.main')

@section('body')
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-3 sm:gap-4 px-2">
        <div class="box-content px-4 pb-4 my-4 sm:col-span-2">
            <h3 class="text-4xl my-4">Cosa sono i cookie</h3>
            <p>I cookie sono piccoli file di testo che alcuni siti internet, tra cui questo, installano sul computer dei
                visitatori. Tali file contengono delle informazioni che possono essere lette in una visita successiva,
                ad esempio per sapere quando l'utente è stato qui l'ultima volta, o quali pagine l'utente visita più
                spesso, o che scelte fa e che impostazioni memorizza. In generale non sono oggetti particolarmente
                pericolosi. I cookie, però, possono essere utilizzati per far sapere al gestore del sito cose che
                l'utente potrebbe non voler far sapere, soprattutto informazioni atte a conoscere i gusti dell'utente
                allo scopo di inviargli pubblicità mirata.</p>

            <h3 class="text-4xl my-4">Che cookie installa questo sito</h3>
            <h4 class="text-3xl my-4">Cookie tecnici</h4>
            <p>I cookie tecnici sono i cookie utili al funzionamento del sito stesso, e non contengono dati personali di
                alcun tipo.</p>
            <p>L'unico cookie tecnico installato da questo sito è <code>lbredacom-cookiebanner-accepted</code>, di durata
                indefinita, che memorizza l'accettazione di questa policy.</p>

            <h4 class="text-3xl my-4">Cookie di profilazione</h4>
            <p>I cookie di profilazione sono i cookie atti a salvare informazioni personali, come ad esempio i gusti
                dell'utente, allo scopo di raccogliere dati da vendere o grazie ai quali fare pubblicità mirate.</p>
            <p>Questo sito non ne fa uso.</p>
            <p>Il sito fa però uso di alcuni cookie per raccogliere statistiche anonime sui visitatori a esclusivo uso
                interno. I cookie per le statistiche sono i seguenti:</p>

            <table class="table-auto">
                <thead>
                <tr>
                    <th>Nome del cookie</th>
                    <th>Durata del cookie</th>
                    <th>Funzione del cookie</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <code>_pk_id</code>
                    </td>
                    <td>13 mesi</td>
                    <td>Questo cookie contiene un identificativo generato casualmente, per identificare anonimamente il
                        visitatore
                    </td>
                </tr>
                <tr>
                    <td>
                        <code>_pk_ref</code>
                    </td>
                    <td>6 mesi</td>
                    <td>Questo cookie memorizza la pagina di provenienza del visitatore
                    </td>
                </tr>
                <tr>
                    <td>
                        <code>_pk_ses</code>, <code>_pk_cvar</code>, <code>_pk_hsr</code>
                    </td>
                    <td>30 minuti</td>
                    <td>Questi cookie memorizzano alcune informazioni temporanee
                    </td>
                </tr>
                </tbody>
            </table>

            <h3 class="text-4xl my-4">Cosa posso fare per controllare l'installazione dei cookie?</h3>
            <p>In aggiunta a quanto indicato, è possibile tenere sotto controllo le impostazioni riguardanti i cookie
                nella preferenze del proprio browser. Tramite le preferenze, infatti, è possibile cancellare i cookie
                installati in passato, ed è possibile impedire in generale l'installazione di nuovi cookie (rischiando
                di compromettere però il corretto funzionamento di questo e altri siti internet). Ecco le informative
                sulla configurazione dei piú diffusi browser:</p>
            <ul class="list-disc">
                <li>
                    <a href="https://support.google.com/chrome/answer/95647?hl=it&p=cpn_cookies">Google Chrome</a>
                </li>
                <li>
                    <a href="https://support.mozilla.org/it/kb/Attivare%20e%20disattivare%20i%20cookie">Mozilla
                        Firefox</a>
                </li>
                <li>
                    <a href="https://support.apple.com/kb/PH19214?viewlocale=it_IT&locale=en_US">Apple Safari</a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/it-it/windows-vista/block-or-allow-cookies">Microsoft Internet
                        Explorer</a>
                </li>
            </ul>
            <p>In caso di servizi erogati da terze parti, l'Utente può inoltre esercitare il proprio diritto a opporsi
                al tracciamento informandosi tramite la privacy policy della terza parte, tramite il link di opt out se
                esplicitamente fornito o contattando direttamente la stessa.</p>
            <p>Ci si può inoltre avvalere del servizio <a href="https://www.youronlinechoices.com/">Your Online
                    Choices</a> che permette di gestire le preferenze di tracciamento della maggior parte degli
                strumenti pubblicitari.</p>
        </div>
        <div class="box-content px-4 pb-4 my-4"><img src="/assets/images/cookies.jpg" alt=""></div>
    </div>
@endsection