<?php
get_header();
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

                                <img src="<?php the_post_thumbnail_url(); ?>">

                                <div class="text">
                                    <h1>
                                        <?php
                                        the_title();
                                        ?>
                                    </h1>
                                    <p>
                                        <?php
                                        the_content();
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


    <script src="<?= get_template_directory_uri() . '/js/script.js' ?>"></script>

    <?php
    get_footer();
    ?>
</body>

</html>