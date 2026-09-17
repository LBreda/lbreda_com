---
title: Privacy policy
language: en
show_title: true
---
@extends('_layouts.main')

@section('body')
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-3 sm:gap-4 px-2">
        <div class="box-content px-4 pb-4 my-4 sm:col-span-2">
            <h3 class="text-4xl my-4">Data controller</h3>
            <p>Lorenzo Breda<br>
                VAT number: 13225651002<br>
                Contact: <a href="mailto:privacy@lbreda.com">privacy@lbreda.com</a></p>

            <h3 class="text-4xl my-4">Data processed</h3>
            <p>This website does not collect personal data through forms, registrations, or other forms of direct
                interaction with the user.</p>
            <p>However, the servers (managed directly by the Data Controller) automatically record, through the
                Apache web server log files, some technical information related to browsing, including:</p>
            <ul class="list-disc">
                <li>IP address of the connecting device</li>
                <li>date and time of the request</li>
                <li>requested page (URL)</li>
                <li>browser user-agent</li>
                <li>referrer (originating page, if present)</li>
                <li>HTTP response code</li>
            </ul>
            <p>This data is collected automatically simply by visiting the website, with no registration required
                from the user.</p>
            <p>Regarding third-party cookies used for statistical analysis purposes, please refer to the
                <a href="/en/cookies">Cookie Policy</a>, which specifically governs their purpose, duration, and
                consent management.</p>

            <h3 class="text-4xl my-4">Purpose of processing</h3>
            <p>The data collected through server logs is processed for the following purposes:</p>
            <ul class="list-disc">
                <li>ensuring the security and proper functioning of the website and technical infrastructure</li>
                <li>detecting and preventing any fraudulent, abusive, or unlawful activity (e.g. intrusion
                    attempts, cyberattacks)
                </li>
                <li>performing technical diagnostics in case of malfunctions</li>
            </ul>
            <p>Logs are not used for profiling, marketing, or commercial communication purposes.</p>

            <h3 class="text-4xl my-4">Legal basis</h3>
            <p>The processing of browsing data (access logs) is based on the Data Controller's legitimate interest
                (Art. 6(1)(f) GDPR) in ensuring the security, stability, and proper functioning of the website and
                the underlying IT systems.</p>

            <h3 class="text-4xl my-4">Retention period</h3>
            <p>Access logs are retained for a maximum period of 30 days, unless a longer period is required for the
                investigation of crimes or unlawful activities, upon a reasoned request from judicial authorities.</p>

            <h3 class="text-4xl my-4">Data recipients</h3>
            <p>The data collected through the logs resides on servers managed directly by the Data Controller,
                hosted on the infrastructure of <strong>OVH</strong> (hosting provider), which acts as a data
                processor limited to the infrastructure services provided.</p>
            <p>Data is not shared with third parties for commercial purposes and is not disseminated.</p>

            <h3 class="text-4xl my-4">Data transfer outside the EU</h3>
            <p>The servers hosting the website are physically located in France, at an OVH data center. Data is
                therefore not transferred outside the European Economic Area (EEA).</p>

            <h3 class="text-4xl my-4">Data subject rights</h3>
            <p>As a data subject, you have the right to request at any time, within the limits and under the
                conditions set out in Articles 15-22 of the GDPR:</p>
            <ul class="list-disc">
                <li>access to your personal data</li>
                <li>rectification or erasure of your data</li>
                <li>restriction of processing</li>
                <li>objection to processing</li>
                <li>data portability, where applicable</li>
            </ul>
            <p>You can exercise these rights by contacting the Data Controller at the address indicated above.</p>
            <p>You also have the right to lodge a complaint with the competent supervisory authority (in Italy, the
                Garante per la Protezione dei Dati Personali, <a href="https://www.garanteprivacy.it">www.garanteprivacy.it</a>),
                if you believe that the processing of your data violates applicable law.</p>

            <h3 class="text-4xl my-4">Changes to this policy</h3>
            <p>The Data Controller reserves the right to modify this policy at any time, notifying users through
                publication on the website. Users are encouraged to periodically review this page.</p>
            <p><em>Last updated: January 1th 2026</em></p>
        </div>
    </div>
@endsection