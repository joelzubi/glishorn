<?php declare(strict_types=1);
    function topImage() {
        return '<div id="topImage" class="jumbotron-fluid"></div>';
    }

    function navbar($current_page) {
        $navbar =
            '<nav class="navbar navbar-expand-sm bg-light navbar-light sticky-top">
                <a class="navbar-brand" href="#">
                    <img src="src/index_images/brand.jpeg" alt="MG Glishorn Logo" style="width: 64px">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">';

        $pages = array(
            array('index', 'Home'),
            array('about', 'Über uns'),
            array('members', 'Mitglieder'),
            array('photos', 'Fotos'),
            array('links', 'Links')
        );

        foreach ($pages as $page) {
            if ($current_page == $page[0]) {
                $navbar .= "<li class='nav-item active'>
                                <a class='nav-link' href='#'>$page[1]</a>
                            </li>";
            } else {
                $navbar .= "<li class='nav-item'>
                                <a class='nav-link' href='$page[0].php'>$page[1]</a>
                            </li>";
            }
        }

        $navbar .= '</ul>
                </div>
            </nav>';

        return $navbar;
    }

    function title($title) {
        return "<div class='container'>
                    <h1>{$title}</h1>
                </div>";
    }

    function unofficial_alert() {
        return '<div class="container">
                    <div class="alert alert-warning">
                        Dies ist nicht die offizielle Website der MG Glishorn.
                        <a href="https://www.glishorn.ch/" class="alert-link">
                            Zur offiziellen Website.
                        </a>
                    </div>
                </div>';
    }

    function footer() {
        return '<footer class="container-fluid p-3 my-3 text-center bg-light">
                    <address>3902 Glis</address>
                </footer>';
    }