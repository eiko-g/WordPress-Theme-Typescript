<?php get_header(); ?>

    <div id="main" class="site-main" role="main">
    
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                get_template_part( 'inc/content/content', get_post_format() );
            endwhile;
        else :
            get_template_part( 'inc/content/content', 'none' );
        endif;
        ?>

        <div class="post-nav">
            <?php
            echo get_previous_post_link('<div class="left">%link</div>', '<span class="icon icon-chevron-left"></span><span class="text">Previous</span>');
            echo get_next_post_link('<div class="right">%link</div>', '<span class="text">Next</span><span class="icon icon-chevron-right"></span>');
            ?>
        </div>

        <?php
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
        ?>
    </div>


<?php get_footer(); ?>

