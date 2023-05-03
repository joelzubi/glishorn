<?php declare(strict_types=1)?>
<?php
include 'page_builder.php';

$page = new Page();
$page->mainpage();
$page->set_title('Musikgesellschaft &laquo;Glishorn&raquo; Glis');
$page->set_tab_title('MG Glishorn');

$page->begin();
?>

<!-- Description of MG Glishorn -->
<div class="container">
    <p>
        Wir sind ein Blasorchester-Verein der 1. Stärkeklasse mit 55 Aktiv-Mitgliedern.
    </p>
    <p>
        Unser Nachwuchs-Verein ist die
        <a href="http://www.jugendmusik-glis.ch/" target="_blank">Jugendmusik Glis</a>, derzeit
        amtierende Schweizermeisterin in der Konzert- und Parademusik.
    </p>
    <p>
        Die <abbr title="Musikgesellschaft" style="text-decoration: none;">MG</abbr> Glishorn ist Mitglied des
        <a href="https://www.kmvw.ch/de/mitglieder/verbaende" target="_blank">Bezirksmusikverbands Brig</a>,
        des <a href="https://www.omv-vs.ch/" target="_blank">Oberwalliser Musikverbands</a> und des
        <a href="https://www.windband.ch/de/home/" target="_blank">Schweizer Blasmusikverbands</a>.
    </p>
</div>

<?php $page->end() ?>