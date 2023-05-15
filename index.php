<?php declare(strict_types=1)?>
<?php
include 'page_builder.php';

$page = new Page();
$page->mainpage();
$page->set_title('Musikgesellschaft Glishorn');
$page->set_tab_title('MG Glishorn');

$page->begin();
?>

<?php if (time() < mktime(16, 15, 0, 5, 21, 2023)): ?>

<!-- BMF Friday Video -->
<?php if (time() < mktime(2, 0, 0, 5, 20, 2023)): ?>
    <div class="container">
        <video width="100%" controls style="max-height: 700px">
            <source src="src/bmf23/BMF_P2_V2.mp4" type="video/mp4">
        </video>
    </div>
<?php endif ?>

<!-- BMF 2023 - General -->
<div class="container">
    <p>
        Die Musikgesellschaft «Glishorn»&nbsp;Glis hat die Ehre, das 83.&nbsp;Verbandsmusikfest zu organisieren und als
        Gastgeberin die Musikvereine des Bezirks&nbsp;Brig am <time datetime="2023-05-19">19.</time> und
        <time datetime="2023-05-20">20.&nbsp;Mai</time> in&nbsp;Glis willkommen zu&nbsp;heissen.
    </p>
    <p>
        Die Musikantinnen und Musikanten der «Glishorn» sowie die Mitglieder des Organisationskomitees heissen Sie
        auf dem Festplatz gegenüber der OS&nbsp;Brig-Süd herzlich willkommen – wir freuen uns auf ein gelungenes
        Musikfest! &#x1F3B5;&#x1F389;
    </p>
</div>

<!-- Big logo -->
<div class="container">
    <img src="src/bmf23/BMF%202023%20Logo%20farbig.png" alt="Bezirksmusikfest Glis"
         class="img-fluid mx-auto d-block" style="width: 600px;">
</div>

<!-- Friday program ad -->
<?php if (time() < mktime(4, 0, 0, 5, 20, 2023)): ?>
    <div class="container my-3 px-0">
        <img src="src/bmf23/Plakat_Freitag.png" alt="Freitag, 19. Mai 2023
            18:00 Uhr VIP-Apéro für Sponsoren und Ehrenmitglieder
            19:00 Uhr Konzert &laquo;Modern Wheat Beat &raquo;
            21:00 Uhr Konzert &laquo;Kalpetrane&raquo;
            23:00 Uhr Party mit &laquo;DJ Cale&raquo;"
                 class="img-fluid" style="white-space: pre;" >
    </div>
<?php endif ?>

<!-- Saturday program ad -->
<div class="container my-3 px-0">
    <img src="src/bmf23/Plakat_Samstag.png" alt="Samstag, 20. Mai 2023
        14:30 Uhr Festakt auf dem Dorfplatz
        15:15 Uhr Festumzug
        16:20 Uhr Konzerte der Musikvereine des Bezirks Brig im Festzelt
        17:00 Uhr Ehrungen im Festzelt
        19:15 Uhr Gala-Konzert Trachtenkapelle Malta Kärnten
        20:50 Uhr Unterhaltung mit &laquo;Z'Hansrüedi&raquo;"
         class="img-fluid" style="white-space: pre;">
</div>

<!-- Dinner... -->
<?php if (mktime(4, 0, 0, 5, 20, 2023) < time()
        && time() < mktime(13, 30, 0, 5, 20, 2023)) {
    $program = new ConcertProgram('Mittagessen im Festzelt');
    $program->add_line_2('Glis', '11:30 Uhr');
    $program->add_line_2('Malta', '11:30 Uhr');
    $program->add_line_2('Simplon-Dorf', '11:30 Uhr');
    $program->add_line_2('Ried-Brig', '11:45 Uhr');
    $program->add_line_2('Termen', '11:45 Uhr');
    $program->add_line_2('Mörel-Filet', '12:00 Uhr');
    $program->add_line_2('Eggerberg', '12:00 Uhr');
    $program->add_line_2('Mund', '12:15 Uhr');
    $program->add_line_2('Naters', '12:15 Uhr');
    $program->add_line_2('Brig', '12:30 Uhr');
    $program->print_table();
}
?>

<!-- Situation plan -->
<img src="src/bmf23/standorte.jpg" alt="Situationsplan" class="img-fluid">

<!-- BMF 2023 - Details -->
<div class="container">
    <!-- Marching Order -->
    <?php $program = new ConcertProgram('Reihenfolge Einmarsch');
    $program->add_line_1('Musikgesellschaft &laquo;Glishorn&raquo; Glis');
    $program->add_line_1('Trachtenkapelle Malta');
    $program->add_line_1('Musikgesellschaft &laquo;Belalp&raquo; Naters');
    $program->add_line_1('Musikgesellschaft &laquo;Saflisch&raquo; Termen');
    $program->add_line_1('Musikgesellschaft &laquo;Findneralp&raquo; Eggerberg');
    $program->add_line_1('Musikgesellschaft &laquo;Eintracht&raquo; Mörel-Filet');
    $program->add_line_1('Musikgesellschaft &laquo;Bleiken&raquo; Simplon-Dorf');
    $program->add_line_1('Musikgesellschaft &laquo;Simplon&raquo; Ried-Brig');
    $program->add_line_1('Musikgesellschaft &laquo;Bryscheralp&raquo; Mund');
    $program->add_line_1('Blasorchester Stadtmusik &laquo;Saltina&raquo; Brig');
    $program->print_table();
    ?>
    
    <!-- Tutti plan -->
    <?php print_flyer('Aufstellung Gesamtspiel', true, 'src/bmf23/gesamtspiel.jpg'); ?>
    
    <!-- Concert order -->
    <?php $program = new ConcertProgram('Reihenfolge Konzerte');
    $program->add_line_1('Musikgesellschaft &laquo;Belalp&raquo; Naters');
    $program->add_line_1('Musikgesellschaft &laquo;Saflisch&raquo; Termen');
    $program->add_line_1('Musikgesellschaft &laquo;Findneralp&raquo; Eggerberg');
    $program->add_line_1('Musikgesellschaft &laquo;Eintracht&raquo; Mörel-Filet');
    $program->add_line_1('Musikgesellschaft &laquo;Bleiken&raquo; Simplon-Dorf');
    $program->add_line_1('Musikgesellschaft &laquo;Simplon&raquo; Ried-Brig');
    $program->add_line_1('Musikgesellschaft &laquo;Bryscheralp&raquo; Mund');
    $program->add_line_1('Blasorchester Stadtmusik &laquo;Saltina&raquo; Brig');
    $program->print_table();
    ?>
</div>

<!-- Sponsoren -->
<div class="container">
    <img src="src/bmf23/sponsoren_bmf.jpeg" alt="Sponsoren Bezirksmusikfest 2023" class="img-fluid"
    style="width: 100%">
</div>

<?php elseif (time() < mktime(19, 50, 0, 5, 28, 2023)): ?>

<!-- OMF -->
<div class="container">
    <img src="src/bmf23/BMF%202023%20Logo%20farbig.png" alt="Bezirksmusikfest Glis"
         class="img-fluid mx-auto d-block" style="width: 600px;">
</div>
<div class="container">
    <p>
        Wir danken allen Besuchern des Bezirksmusikfests Brig&nbsp;2023 in Glis für zwei
        unvergessliche Tage im Kreise der Musikfamilie.
    </p>
    <p>
        Unser nächstes Highlight im Vereinsjahr ist das Oberwalliser Musikfest in Ried-Brig.
        Wir würden uns freuen, Sie an der Paradestrecke, im Saal oder im Festzelt zu begrüssen.
        Unsere Spielzeiten sind wie folgt:
    </p>
    <?php $program = new ConcertProgram('27. Mai 2023 in Ried-Brig');
    $program->add_line_3('12:00&nbsp;Uhr', 'A&nbsp;Pedra da Serpe', 'Turnhalle &laquo;Brigerbärg&raquo;');
    $program->add_line_3('18:09&nbsp;Uhr', 'Infanterie-Regiment 31', 'Parademusikstrecke');
    $program->print_table();
    ?>
</div>
<img src="src/bmf23/Oberwalliser-Musikfest-2023-2048x1292.jpg" alt="Plakat Oberwalliser Musikfest in Ried-Brig"
     class="img-fluid mb-3">

<?php endif ?>

<hr>

<!-- My Piece -->
<div class="container mt-4">
    <div class="card my-2 hover-box">
        <img class="card-img-top" src="src/mypiece/tech.jpeg" alt="MyPiece Mundstück Symbolbild">
        <div class="card-body">
            <h4 class="card-title">&laquo;MyPiece&raquo;&nbsp;&dash; von einem Blechbläser, für Blechbläser 🎺</h4>
            <p class="card-text">
                Unser Eufonist David Lochmatter spielte in letzter Zeit mit verschiedenen farbigen und unförmigen
                Mundstücken.
                Hier erfahrt ihr, was es damit auf sich hat und warum ein Start-up aus der Blasmusikszene im Finale
                des Prix&nbsp;Créateurs&nbsp;2023 der WKB ist.
            </p>
            <a href="articles/my-piece.php" class="card-link stretched-link">Mehr erfahren</a>
        </div>
    </div>
</div>

<!-- News box -->
<div class="container mt-5">
    <div class="row">

        <!-- JM Glis in Burgdorf -->
        <div class="col-lg-6">
            <div class="card my-2 hover-box">
                <img class="card-img-top" src="src/burgdorf/group.jpg" alt="Gruppenfoto Jugendmusik Glis"
                     style="max-height: 300px;">
                <div class="card-body">
                    <h4 class="card-title">Die JM&nbsp;Glis am Eidgenössischen Jugendmusikfest in Burgdorf&nbsp;🎉</h4>
                    <p class="card-text">
                        Am Schweizer Jugendmusikfest in Burgdorf&nbsp;2019 konnte die Jugendmusik&nbsp;Glis so richtig
                        abräumen.
                        Sie erreichte den 1.&nbsp;Platz in der Kategorie Konzert Harmonie Oberstufe mit 94&nbsp;Punkten
                        sowie den 1.&nbsp;Platz in der Kategorie Parademusik M mit 93&nbsp;Punkten.
                        Hier der Bericht des Präsidenten über das "historische" Wochenende vom
                        <time datetime="2019-09-21 14:00">21./22.&nbsp;September 2019</time>.
                    </p>
                    <a href="articles/burgdorf.php" class="card-link stretched-link">Zum Bericht</a>
                </div>
            </div>
        </div>

        <!-- Decibel experiment -->
        <div class="col-lg-6">
            <div class="card my-2 hover-box">
                <img class="card-image-top" src="src/decibel_test/title_picture.jpg" alt="Lärmbelastung"
                     style="max-height: 300px;">
                <div class="card-body">
                    <h4 class="card-title">Wie laut ist eigentlich Musik? 🎧</h4>
                    <p class="card-text">
                        Zu viel Lärmbelastung kann das Gehör schädigen.
                        Aber wie laut ist ein Musikinstrument oder gar ein ganzes Blasorchester?
                        Wir haben den Selbsttest gemacht und Erstaunliches festgestellt.
                    </p>
                    <a href="articles/decibel_test.php" class="card-link stretched-link">Zum Experiment</a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php $page->end() ?>