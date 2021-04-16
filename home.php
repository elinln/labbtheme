<?php
get_header();
?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <h1>
                        <?php
                        wp_title('');
                        ?>
                    </h1>

                    <?php
                    while (have_posts()) {
                        the_post();
                    ?>

                        <article>
                            <img src="<?php the_post_thumbnail_url(); /* Bild */ ?>">
                            <h2 class="title">
                                <a href="<?php the_permalink(); /* Länk till single-pages */ ?>">
                                    <?php
                                    the_title();
                                    ?></a>
                            </h2>
                            <ul class="meta">
                                <li>
                                    <i class="fa fa-calendar"></i>
                                    <?php
                                    echo get_the_date(); /* Visar datum */
                                    ?>

                                </li>
                                <li>
                                    <i class="fa fa-user"></i> <a href="forfattare.html"> 
                                        <?php
                                            the_author_posts_link(); /* Visar författare och länkar */
                                        ?></a>
                                </li>
                                <li>

                                    <i class="fa fa-tag"></i> <a href="kategori.html">
                                        <?php
                                            the_category(',' . ' '); /* Hämta kategori */
                                        ?></a>
                                </li>
                            </ul>
                            <p>
                                <?php
                                the_excerpt(); /* Visar en del av texten */
                                ?>
                            </p>
                        </article>
                    <?php
                    } /* Slut på loopen */
                    the_posts_pagination(); /* Visar bläddring bland sidor, men visas bara om inställningarna är ställd på mindre än 2 inlägg per sida eller om man lägger till fler inlägg  */
                    ?>
                </div>
                <aside id="secondary" class="col-xs-12 col-md-3">
                    <div id="sidebar">
                        <ul>
                            <?php
                            dynamic_sidebar('blogbar'); /* Widget för sidebar-meny */
                            ?>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>



<?php
get_footer();
?>