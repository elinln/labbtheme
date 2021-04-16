<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title><?php
            wp_title();
            ?></title>
    <link href="<?= get_template_directory_uri() . '/css/font-awesome.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?= get_template_directory_uri() . '/css/bootstrap.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?= get_template_directory_uri() . '/css/style.css' ?>" rel="stylesheet" type="text/css" />
    <script src="<?= get_template_directory_uri() . '/js/jquery.js' ?>"></script>
    <?php
    wp_head();
    ?>
</head>

<body>

    <div id="wrap">

        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8 col-sm-6">
                        <a class="logo" href="<?= get_bloginfo("url"); ?>"> <?= get_bloginfo("name"); ?></a>
                        <!--Försök till titel-->
                    </div>
                    <div class="col-sm-6 hidden-xs">
                        <?php
                        dynamic_sidebar('searching'); // Widget för sökfält i headern */
                        ?>

                    </div>
                </div>
            </div>
        </header>

        <nav id="nav">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="menu">
                                <?php
                                wp_nav_menu(); // Meny för undersidorna i headern
                                ?>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>