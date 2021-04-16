<?php
get_header();
?>
<main>
    <div class="container">
        <div class="row">
            <div id="primary" class="col-xs-12 col-md-9">
                <h1>
                    <?php the_archive_title(); ?>
                </h1>
                <?php
                while (have_posts()) {
                    the_post();
                ?>
                    <article>
                        <img src="<?php get_the_post_thumbnail_url() ?>" />
                        <h2 class="title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <!--Hämtar titel-->
                        </h2>
                        <ul class="meta">
                            <li>
                                <i class="fa fa-calendar"></i> <?= get_the_date(); ?>
                                <!--Hämtar datum-->
                            </li>
                            <li>
                                <i class="fa fa-user"></i> <?php the_author_posts_link(); ?>
                                <!--Hämtar länk till författare-->
                            </li>
                            <li>
                                <i class="fa fa-tag"></i> <?php the_category(',' . ' '); ?>
                                <!--Hämtar kategori-->
                            </li>
                        </ul>

                        <?php
                        the_excerpt(); // Visar bara en del av texten
                        ?>

                    </article>

                <?php
                }
                ?>
            </div>

            <aside id="secondary" class="col-xs-12 col-md-3">
                <div id="sidebar">
                    <ul>
                        <?php dynamic_sidebar("blogbar"); // Sidebar
                        ?>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</main>

<?php
get_footer()
?>