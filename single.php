<!-- Post layout -->
<?php get_header() ?>
<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post() ?>

        <div class="post__single">
            <h1>
                <a href="<?php the_permalink() ?>">
                    <?php the_title() ?>
                </a>
            </h1>

            <span><?php the_date() ?> @ <?php the_time() ?></span>

            <div class="post__single__content">
                <?php the_content() ?>
            </div>
        </div>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer() ?>