---
title: Contatti
language: it
show_title: true
---
@extends('_layouts.main')

@section('body')
<div class="container mx-auto grid grid-cols-1 sm:grid-cols-3 sm:gap-4 px-2">
    <x-box title="Social">
        <ul class="fa-ul text-base leading-relaxed mt-0 mb-4 text-primary">
            <li>
          <span class="fa-li">
            <i class="fab fa-github"></i>
          </span>
                <a href="https://github.com/lbreda" rel="me">GitHub</a>
            </li>
            <li>
          <span class="fa-li">
            <i class="fab fa-facebook"></i>
          </span>
                <a href="https://fb.com/lbreda" rel="me">Facebook</a>
            </li>
            <li>
          <span class="fa-li">
            <i class="fab fa-instagram"></i>
          </span>
                <a href="https://instagram.com/lbreda" rel="me">Instagram</a>
            </li>
            <li>
          <span class="fa-li">
            <i class="fas fa-chart-pie"></i>
          </span>
                <a href="https://profile.codersrank.io/user/lbreda/" rel="me">CodersRank</a>
            </li>
            <li>
          <span class="fa-li">
            <i class="fab fa-linkedin"></i>
          </span>
                <a href="https://it.linkedin.com/in/lbreda" rel="me">LinkedIn</a>
            </li>
        </ul>
    </x-box>

    <x-box title="Messaggistica">
        <ul class="fa-ul">
            <li>
          <span class="fa-li">
            <i class="fab fa-telegram"></i>
          </span>
                <a href="https://t.me/lbreda">@lbreda</a>
            </li>
            <!--<li><i class="fa fa-li fa-comments"></i> @LBreda:matrix.org </li>-->
        </ul>
    </x-box>

    <x-box title="Chiave PGP">
        <ul class="fa-ul">
            <li>
          <span class="fa-li">
            <i class="fa fa-download"></i>
          </span>
                <a href="/assets/files/lorenzo_breda.asc">Scarica</a>
            </li>
        </ul>
    </x-box>
</div>
@endsection