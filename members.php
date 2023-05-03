<?php declare(strict_types=1)?>
<?php
include 'page_builder.php';

$page = new Page();
$page->mainpage();
$page->dont_show_title();
$page->set_tab_title('Mitglieder | MG Glishorn');

$page->begin();
?>

<div class="container mt-3">
    <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="pill" href="#sectionTable">Aktivmitglieder</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#boardTable">Vorstand und Direktion</a>
        </li>
    </ul>

    <div class="tab-content my-3">
        <!--Sections-->
        <div id="sectionTable" class="container tab-pane active">
            <?php include 'lists/sections.php';?>
        </div>

        <!-- Board -->
        <div id="boardTable" class="container tab-pane fade">
            <?php include 'lists/board.php';?>
            <?php include 'lists/conductors.php';?>
        </div>
    </div>
</div>

<?php $page->end() ?>