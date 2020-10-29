<nav class="navbar navbar-expand-sm bg-light navbar-light sticky-top">
    <a class="navbar-brand" href=".">
        <img src="src/index_images/brand.jpeg" alt="MG Glishorn Logo" style="width: 64px">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">

<?php
$pages = array(
    array('index.php', 'Startseite'),
    array('about.php', 'Über uns'),
    array('members.php', 'Mitglieder'),
    array('calendar.php', 'Kalender'),
    array('links.php', 'Links')
);

foreach ($pages as $page) {
    if (basename($_SERVER["SCRIPT_FILENAME"]) == $page[0]) {
        echo "  <li class='nav-item active'>
                    <a class='nav-link' href='#'>$page[1]</a>
                </li>";
    } else {
        echo "  <li class='nav-item'>
                    <a class='nav-link' href='$page[0]'>$page[1]</a>
                </li>";
    }
}
?>

        </ul>
    </div>
</nav>