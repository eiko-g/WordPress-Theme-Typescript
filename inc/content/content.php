<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php
        the_title( sprintf( '
            <h2 class="entry-title">
                <a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>
            </h2>
        ' );
    ?>
    <time class="entry-time" datetime="<?php the_time( 'c' ); ?>"><?php the_date('F d, Y'); ?></time>

    <div class="entry-content re-typing">
        <?php
            /* translators: %s: Name of current post */
            the_content('');
        ?>
    </div>

    <?php the_tags('<p class="post-tags">', false, '</p>'); ?>

</article>
