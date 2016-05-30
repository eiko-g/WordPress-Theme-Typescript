<?php get_header(); ?>

    <div id="main" class="site-main" role="main">
    
        <?php if (have_posts()) : ?>
            <div class="post-list">
            <?php while (have_posts()) : the_post();
                get_template_part( 'inc/content/content', get_post_format() );
            endwhile;
            echo '</div>';
            ?>

            <div class="post-nav">
                <div class="left">
                    <?php previous_posts_link('<span class="icon icon-chevron-left"></span><span class="text">Previous</span>'); ?>
                </div>
                <div class="right">
                    <?php next_posts_link('<span class="text">Next</span><span class="icon icon-chevron-right"></span>'); ?>
                </div>
            </div>

        <?php
        else :
            get_template_part( 'inc/content/content', 'none' );
        endif; ?>
    
    </div>



<?php get_footer(); ?>

