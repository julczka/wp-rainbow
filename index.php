<?php get_header() ?>

<div class="grid-container" id="test">
	<?php if (have_posts()) : ?>
	
        <?php while (have_posts()) : the_post() ?>
        

	
	        <div class="post post<?php echo $wp_query->current_post +1 ?>">
               
            <a href="<?php the_permalink() ?>">  <img src="<?php echo catch_that_image() ?>" alt="" class="title-image"></a>
            
	            <div class="post<?php echo $wp_query->current_post +1 ?>__text">
                    <h3>
                    	                <a href="<?php the_permalink() ?>">
                    	                    <?php the_title() ?>
                    	                </a>
                    	            </h3>
                    	            
                    	            <span class="post__author"><?php the_author() ?></span>
                    	            <br>
                    	            <span class="post__date"><?php the_date() ?> @ <?php the_time() ?> </span>
                </div>
	
	            <!-- <div class="post__content">
	             
	        </div> -->
	        </div>
    
            

	    <?php endwhile; ?>
	
	    
	
	<?php endif; ?>
</div>

<div class="pagination">
    <div class=""> <?php previous_posts_link('previous') ?></div>
    	    <div class=""> <?php next_posts_link('next') ?></div>
</div>



<?php get_footer() ?>

