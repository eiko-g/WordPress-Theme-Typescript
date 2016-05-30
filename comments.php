<?php
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('<h1>Fuck you</h1>');

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">


	<h2 class="comments-title">
		<a href="#respond" title="Add a comment."><?php comments_number('No comment', 'One comment', '% comments' ); ?></a>
	</h2>

	<div id="comment-box">
		<ol class="comment-list">
			<?php if ( have_comments() ) :
				wp_list_comments( array(
					'style'     => 'ol',
					'short_ping'  => true,
					'avatar_size' => 40,
				) );
			endif; // have_comments() ?>
		</ol><!-- .comment-list -->

        <?php the_comments_navigation(); ?>


	</div>

	<?php
	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>
		<p class="no-comments">Comments are closed.</p>
	<?php endif; ?>

	<?php
	comment_form( array(
			'comment_notes_after' => null,
		)
	);?>
</div><!-- .comments-area -->
