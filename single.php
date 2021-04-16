<?php
get_header();
?>


<main>
    <?php
    while (have_posts()) { // Start på loop för singel-inlägg
        the_post();
    ?>
        <section>
            <div class="container">
                <div class="row">
                    <div id="primary" class="col-xs-12 col-md-9">
                        <article>
                            <img src="<?php the_post_thumbnail_url(); /* Bild */ ?>">
                            <h1 class="title"><?php
                                                the_title();
                                                ?></h1>
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
                                the_content(); /* Hämtar innehållet */
                                ?>
                            </p>


                        </article>
                    </div>
                <?php
            }
            // Slut på loop för singel-inlägg     
                ?>

                <aside id="secondary" class="col-xs-12 col-md-3">
                    <div id="sidebar">

                        <ul>
                            <?php
                            dynamic_sidebar('blogbar'); // Widget för sidebar
                            ?>
                        </ul>
</main>

<?php
get_footer();
?>