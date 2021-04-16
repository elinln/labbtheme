<?php
get_header(); /* Hämta Header */
?>

<body>
    <main>
        <?php
        while (have_posts()) {
            the_post();
        ?>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="hero">

                                <img src="<?php the_post_thumbnail_url(); ?>"> <!--Hämta bild-->

                                <div class="text">
                                    <h1>
                                        <?php
                                        the_title(); // Hämta titel
                                        ?>
                                    </h1>
                                    <p>
                                        <?php
                                        the_content(); // Hämtar content
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php
        }
        ?>
    </main>


    <script src="<?= get_template_directory_uri() . '/js/script.js' ?>"></script> <!--Hämta JS-fil-->

    <?php
    get_footer(); /* Hämta Footer */
    ?>
</body>

</html>