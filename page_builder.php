<?php declare(strict_types=1)?>

<?php
class Page
{
    private string $tab_title;
    private string $title;
    private bool $mainpage;
    private bool $show_title;
    private bool $use_link_images;
    private bool $use_parallax;
    private bool $navbar_sticky_top;

    function __construct()
    {
        $this->tab_title = '';
        $this->title = '';
        $this->mainpage = false;
        $this->show_title = true;
        $this->use_link_images = false;
        $this->use_parallax = false;
        $this->navbar_sticky_top = true;
    }

    function mainpage(): void
    {
        $this->mainpage = true;
    }

    function set_tab_title(string $tab_title): void
    {
        $this->tab_title = $tab_title;
    }

    function set_title(string $title): void
    {
        $this->title = $title;
    }

    function dont_show_title(): void
    {
        $this->show_title = false;
    }

    function use_link_images(): void
    {
        $this->use_link_images = true;
    }

    function use_parallax(): void
    {
        $this->use_parallax = true;
    }

    function navbar_disappear_on_scroll(): void
    {
        $this->navbar_sticky_top = false;
    }

    function begin(): void
    {
        echo '<!DOCTYPE html><html lang="de-CH">';
        $this->print_head();
        echo '<body>';
        echo '<div id="topImage" class="jumbotron-fluid"></div>';
        $this->print_navbar();
        if ($this->show_title === true) {
            $this->print_title();
        }
    }

    function end(): void
    {
        $this->print_footer();
        echo '</body>';
    }

    function print_head(): void
    {
        echo '<head>
    <meta charset="UTF-8">
    <title>' . $this->tab_title . '</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="' . ($this->mainpage ? '' : '../') .'src/index_images/temp-w.png">
    <link rel="icon" type="image/png" sizes="32x32" href="' . ($this->mainpage ? '' : '../') .'src/index_images/temp-w.png">
    <link rel="icon" type="image/png" sizes="16x16" href="' . ($this->mainpage ? '' : '../') .'src/index_images/temp-w.png">
    <link rel="manifest" href="' . ($this->mainpage ? '' : '../') .'src/index_images/site.webmanifest">

    <!-- For responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="' . ($this->mainpage ? '' : '../') .'css/index_header.css">
    <link rel="stylesheet" href="' . ($this->mainpage ? '' : '../') .'css/footer.css">
    <link rel="stylesheet" href="' . ($this->mainpage ? '' : '../') .'css/index.css">';
        if ($this->use_link_images) {
            echo '<link rel="stylesheet" href="' . ($this->mainpage ? '' : '../') . 'css/links.css">';
        }
        if ($this->use_parallax) {
            echo '<link rel="stylesheet" href="' . ($this->mainpage ? '' : '../') .'css/parallax.css">';
        }
        echo '<!-- jQuery, Popper JS and Bootstrap Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Icon Script -->
    <script src="https://kit.fontawesome.com/f54a4f4510.js" crossorigin="anonymous"></script>
</head>';
    }

    function print_navbar(): void
    {
        $pages = array(
            array('index.php', 'Startseite'),
            array('about.php', 'Über uns'),
            array('members.php', 'Mitglieder'),
            array('calendar.php', 'Kalender'),
            array('links.php', 'Links'),
        );
        echo '<nav class="navbar navbar-expand-sm bg-light navbar-light' .
            ($this->navbar_sticky_top ? ' sticky-top' : '') .
            '">
    <a class="navbar-brand" href=".">
        <img src="' . ($this->mainpage ? '' : '../') .'src/index_images/temp.png" alt="Musikgesellschaft Glishorn Logo"
            style="width: 56px">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">';
        if ($this->mainpage) {
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
        } else {
            foreach ($pages as $page) {
                echo "  <li class='nav-item'>
                <a class='nav-link' href='../$page[0]'>$page[1]</a>
            </li>";
            }
        }
        echo '</ul>
    </div>
</nav>';
    }

    function print_title(): void
    {
        echo '<div class=\'container\'>
    <h1>' . $this->title . '</h1>
</div>';
    }

    function print_footer(): void
    {
        echo '<footer class="container-fluid p-3 my-3 text-center bg-light">
    <div class="d-flex align-items-stretch justify-content-between">
        <div class="container my-auto">
            <a href="https://www.facebook.com/profile.php?id=100065308637430" target="_blank"
               class="d-inline fab fa-facebook p-2 text-center text-decoration-none"
               style="font-size: 30px; width: 50px; color: darkgrey"></a>
            <a href="https://www.youtube.com/channel/UCQV1_h3s6fHY7VdfOwRioKQ" target="_blank"
               class="d-inline fab fa-youtube p-2 text-center text-decoration-none"
               style="font-size: 30px; width: 50px; color: darkgrey"></a>
            <a href="mailto:info@glishorn.ch" target="_blank"
               class="d-inline fas fa-envelope p-2 text-center text-decoration-none"
               style="font-size: 30px; width: 50px; color: darkgrey"></a>

        </div>
        <div class="container d-none d-md-block my-auto">
            <address>3902 Glis</address>
        </div>
        <div class="container d-block d-lg-none my-auto">
            <p>&copy; <span id="owner"><abbr title="Musikgesellschaft" style="text-decoration: none;">MG</abbr> Glishorn</span>
                <?php echo date("Y"); ?></p>
        </div>
        <div class="container d-none d-lg-block my-auto">
            <p>&copy; <span id="owner">Musikgesellschaft Glishorn</span>
                <?php echo date("Y"); ?></p>
        </div>
    </div>
</footer>';
    }
}

class ConcertProgram
{
    private string $title;
    private array $pieces;

    function __construct(string $title)
    {
        $this->title = $title;
        $this->pieces = [];
    }

    function add_line_3(string $title, string $composer, string $comment): void
    {
        $this->pieces[] = array($title, $composer, $comment);
    }

    function add_line_2(string $title, string $composer): void
    {
        $this->pieces[] = array($title, $composer);
    }

    function add_line_1(string $title): void
    {
        $this->pieces[] = array($title);
    }

    function print_table(): void
    {
        echo '<div class="container my-4">
    <h2>' . $this->title . '</h2>
    <table class="table table-hover">
    <tbody>';
        foreach ($this->pieces as $piece) {
            echo '<tr>';
            if (sizeof($piece) === 1) {
                echo '<td colspan="2" style="text-align: center;"><b>' . $piece[0] . '</b></td>';
            }
            if (sizeof($piece) === 2) {
                echo '<td><b>' . $piece[0] . '</b></td>
<td><b>' . $piece[1] . '</b></td>';
            }
            if (sizeof($piece) === 3) {
                echo '<td><b>' . $piece[0] . '</b></td>
<td><b>' . $piece[1] . '</b><br>' . $piece[2] . '</td>';
            }
            echo '</tr>';
        }
        echo '</tbody>
</table>
</div>';
    }
}

function print_flyer(string $title, bool $show_title, string $src): void
{
    echo '<div class="container">';
    if ($show_title) {
        echo '<h2>' . $title . '</h2>';
    }
    echo '<img src="' . $src . '" class="img-fluid" alt="Flyer ' . $title . '">
</div>';
}