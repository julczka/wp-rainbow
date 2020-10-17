<?php get_header() ?>



<?php if(have_posts()): ?>

<?php while(have_posts()) : the_post() ?>

<div class="post single">
<h1>

<?php the_title() ?>

</h1>
Olaboga ktora to strona
<span><?php the_date()?> @ <?php the_time()?></span>

<div class="post__content">
<?php the_content() ?>
</div></div>

<?php endwhile;?>

<div class="pagination"> <?php previous_posts_link('previous') ?></div>
<div class="pagination"> <?php next_posts_link('next') ?></div>

<?php endif; ?>


<?php get_footer() ?>