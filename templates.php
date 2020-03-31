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

        if ($current_page == 'index') {
            $navbar .= '<li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>';
        } else {
            $navbar .= '<li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>';
        }

        if ($current_page == 'about') {
            $navbar .= '<li class="nav-item active">
                            <a class="nav-link" href="#">Über uns</a>
                        </li>';
        } else {
            $navbar .= '<li class="nav-item">
                            <a class="nav-link" href="about.php">Über uns</a>
                        </li>';
        }

        if ($current_page == 'members') {
            $navbar .= '<li class="nav-item active">
                            <a class="nav-link" href="#">Mitglieder</a>
                        </li>';
        } else {
            $navbar .= '<li class="nav-item">
                            <a class="nav-link" href="members.php">Mitglieder</a>
                        </li>';
        }

        if ($current_page == 'photos') {
            $navbar .= '<li class="nav-item active">
                            <a class="nav-link" href="#">Fotos</a>
                        </li>';
        } else {
            $navbar .= '<li class="nav-item">
                            <a class="nav-link" href="photos.php">Fotos</a>
                        </li>';
        }

        if ($current_page == 'links') {
            $navbar .= '<li class="nav-item active">
                            <a class="nav-link" href="#">Links</a>
                        </li>';
        } else {
            $navbar .= '<li class="nav-item">
                            <a class="nav-link" href="links.php">Links</a>
                        </li>';
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