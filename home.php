<?php
get_header();
?>
<main>
    <section>


        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <h1><?= get_the_title(get_option('page_for_posts')); ?></h1>
                    <?php
                    while (have_posts()) { // Start på loopen
                        the_post();
                    ?>
                        <article>
                            <img src="<?php the_post_thumbnail_url(); ?>">
                            <h2 class="title">
                                <a href="inlagg.html"><?php
                                                        the_title();
                                                        ?></a>
                            </h2>
                            <ul class="meta">
                                <li>
                                    <i class="fa fa-calendar"></i> <?= get_the_date(); ?>

                                <li>
                                    <i class="fa fa-user"></i> <a href="forfattare.html">
                                        <?php
                                        the_author();
                                        ?></a>
                                </li>
                                <li>
                                    <i class="fa fa-tag"></i> <a href="kategori.html">
                                        <?php
                                        the_category('<a>', '');
                                        ?>
                                    </a>
                                </li>
                            </ul>
                            <p>
                                <?php
                                the_excerpt();
                                ?>
                            </p>
                        </article>
                    <?php
                    } // Slut på loopen
                    ?>

                    <nav class="navigation pagination">
                        <?php
                        the_posts_pagination([
                            'screen_reader_text' => "Inläggsnavigering",
                            "class" => "pagination"
                        ]);
                        ?>

                    </nav>
                </div>
                <aside id="secondary" class="col-xs-12 col-md-3">
                    <div id="sidebar">
                        <ul>
                        <?php
                        dynamic_sidebar('blogbar'); // Widget för sidebar på bloggsidan
                        ?>
                        </ul>

    </section>
</main>
<?php
get_footer();
?>