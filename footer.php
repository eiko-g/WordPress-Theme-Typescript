<script>jQuery("#loading-bar").css('width','60%');</script>

<footer id="main-footer" class="main-footer">
    <div class="search">
        <form role="search" method="get" class="search-form" action="<?php bloginfo('url'); ?>">
            <label>
                <span class="screen-reader-text">Search:</span>
                <input type="search" class="search-field" placeholder="Looking for something?" value="" name="s">
                <button type="submit" class="search-bar-trigger">
                    <span class="icon icon-search"></span>
                </button>
            </label>
        </form>
    </div>
    <div class="social-wrapper">
        <?php if( get_the_author_meta( 'github', '1' )) : ?>
        <a class="social github" href="https://github.com/<?php echo get_the_author_meta( 'github', '1' ); ?>">
            <span class="icon icon-github"></span>
        </a>
        <?php endif; ?>
        <?php if( get_the_author_meta( 'gplus', '1' )) : ?>
        <a class="social google" href="https://plus.google.com/<?php echo get_the_author_meta( 'gplus', '1' ); ?>">
            <span class="icon icon-google"></span>
        </a>
        <?php endif; ?>
        <a class="social rss" href="<?php echo bloginfo('rss2_url'); ?>">
            <span class="icon icon-rss"></span>
        </a>
        <?php if( get_the_author_meta( 'twitter', '1' )) : ?>
        <a class="social twitter" href="https://twitter.com/<?php echo get_the_author_meta( 'twitter', '1' ); ?>">
            <span class="icon icon-twitter"></span>
        </a>
        <?php endif; ?>
        <?php if( get_the_author_meta( 'weibo', '1' )) : ?>
        <a class="social weibo" href="<?php echo get_the_author_meta( 'weibo', '1' ); ?>">
            <span class="icon icon-sina-weibo"></span>
        </a>
        <?php endif; ?>
    </div>
    <p>Theme <span class="codename">Typescript</span> designed by <a href="http://rakugaki.me/" target="_blank">Art Chen</a>.</p>
    <p>&copy; <a href="<?php bloginfo('url'); ?>"><?php bloginfo('title'); ?></a></p>
</footer>
<script>jQuery("#loading-bar").css('width','80%');</script>

</div><!-- end .site-wrapper -->

<?php
    wp_footer();
?>
<script>jQuery("#loading-bar").css('width','100%');</script>

</body>
</html>
