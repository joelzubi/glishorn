<?php declare(strict_types=1)?>
<?php
include 'page_builder.php';

$page = new Page();
$page->mainpage();
$page->set_title('Kalender');
$page->set_tab_title('Kalender | MG Glishorn');

$page->begin();
?>

<!-- Google Calendar phone -->
<div class="container responsive-iframe-container d-block d-sm-none">
    <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=2&bgcolor=%23ffffff&ctz=Europe%2FZurich&showTitle=1&title=MG%20Glishorn&showTabs=1&showCalendars=0&showTz=0&mode=AGENDA&showNav=1&showDate=0&src=bWdnbGlzaG9ybkBnbWFpbC5jb20&color=%23039BE5"
            style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
</div>
<!-- Google Calendar laptop -->
<div class="container responsive-iframe-container d-none d-sm-block">
    <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=2&bgcolor=%23ffffff&ctz=Europe%2FZurich&showTitle=1&title=MG%20Glishorn&showTabs=1&showCalendars=0&showTz=0&mode=MONTH&showNav=1&showDate=1&src=bWdnbGlzaG9ybkBnbWFpbC5jb20&color=%23039BE5"
            style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
</div>
<!-- Link to full screen -->
<div class="container mt-2">
    <a href="https://calendar.google.com/calendar/embed?src=mgglishorn%40gmail.com&ctz=Europe%2FZurich"
       target="_blank" class="btn btn-primary btn-block">
        In Google Kalender öffnen
    </a>
</div>

<?php $page->end() ?>