---
title: Cookie policy
language: en
show_title: true
---
@extends('_layouts.main')

@section('body')
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-3 sm:gap-4 px-2">
        <div class="box-content px-4 pb-4 my-4 sm:col-span-2">
            <h3 class="text-4xl my-4">What cookies are</h3>
            <p>Cookies are small text files saved by some websites - this one included - on the visitors' PC.
                These files contain some information to be read when the visitor comes on the website again. This lets
                the website know some details, for example when the last visit was, the pages the visitors read more often,
                their choices and their settings. They aren't, in general, dangerous things, but they can be used to know
                things the visitor may not want to share, especially the information needed to send targeted advertising.</p>

            <h3 class="text-4xl my-4">Which cookies do this website install?</h3>
            <h4 class="text-3xl my-4">Technical cookies</h4>
            <p>The technical cookies are needed for the website to work, and they dont gather any personal data</p>
            <p>The only technical cookies this website install is <tt>lbredacom-cookiebanner-accepted</tt>, which
                does not expire and which saves the acceptance of this policy.</p>

            <h4 class="text-3xl my-4">Tracking cookies</h4>
            <p>The tracking cookies are the cookies used to save personal data, to gather information to sell
                or to show targeted advertising.</p>
            <p>This website doesn't use them.</p>
            <p>This website, though, uses some cookies to gather some anonymous statistics about the visitors, and these
                statistics are for internal use only. The cookie used for the statistics are:</p>

            <table class="table-auto">
                <thead>
                <tr>
                    <th>Cookie name</th>
                    <th>Expiration time</th>
                    <th>Function</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <code>_pk_id</code>
                    </td>
                    <td>13 months</td>
                    <td>This cookie contains a randomly-generated id used to anonymously identify the visitor.
                    </td>
                </tr>
                <tr>
                    <td>
                        <code>_pk_ref</code>
                    </td>
                    <td>6 months</td>
                    <td>This cookie saves the visitor's page of origin
                    </td>
                </tr>
                <tr>
                    <td>
                        <code>_pk_ses</code>, <code>_pk_cvar</code>, <code>_pk_hsr</code>
                    </td>
                    <td>30 minutes</td>
                    <td>This cookies save some temporary data
                    </td>
                </tr>
                </tbody>
            </table>

            <h4 class="text-3xl my-4">Third-party cookies</h4>
            <p>Third-party cookies are not managed by the website owner, but are installed by external services
                the website uses.</p>

            <p>This site gathers some anonymous statistical information using  <strong>Google Analytics</strong>.</p>

            <p>The cookies Google Analytics installs are:</p>

            <table class="table-auto">
                <thead>
                <tr>
                    <th>Cookie name</th>
                    <th>Expiration time</th>
                    <th>Function</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <code>_ga</code>
                    </td>
                    <td>2 years</td>
                    <td>This cookie contains a randomly-generated id used to anonymously identify the visitor.
                    </td>
                </tr>
                <tr>
                    <td>
                        <code>_gat</code>
                    </td>
                    <td>10 minutes</td>
                    <td>This cookie avoids to consider too many subsequent requests as a single visit.
                    </td>
                </tr>
                </tbody>
            </table>

            <p>These cookies data are treated by Google Inc. in the United States of America, and Google has
                <a href="https://support.google.com/analytics/answer/6004245">its own privacy policy</a>.</p>

            <p>If you don't want to install these cookies, you can avoid it with the <a
                        href="http://tools.google.com/dlpage/gaoptout?hl=it">opt-out procedure</a>.</p>

            <h3 class="text-4xl my-4">How can I control the cookies installation?</h3>
            <p>Additionally, you can control the cookie-related settings in your web browser preferences. Your browser
                lets you remove previously installed cookies, and you can avoid to install cookies in the future (you'll
                obviously risk to compromise the proper functioning of some sites). Here are the instruction for the
                most popular browsers:</p>
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
            <p>You can also exercise your right to oppose the installation of tracking third-party cookies by opting
                out the single service. You can always find the instruction on the service privacy policies.</p>
            <p>You can also use <a href="https://www.youronlinechoices.com/">Your Online
                    Choices</a> to know more about the most common advertising systems.</p>
        </div>
        <div class="box-content px-4 pb-4 my-4"><img src="/assets/images/cookies.jpg" alt=""></div>
    </div>
@endsection