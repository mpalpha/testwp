<?php
	$settings = foundation_get_settings();
?>
<li class="comment clearfix">
	<div class="comment-top">
		<div class="comment-avatar">
			<?php echo get_avatar( $comment ); ?>
		</div>
		<div class="meta">
			<div class="comment-author"><?php comment_author(); ?></div>
			<div class="comment-time"><?php comment_date(); ?></div>
		</div>
	</div>

	<div class="comment-body">
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation', 'wptouch-pro' ); ?>&hellip;</p>
		<?php endif; ?>
		<?php comment_text(); ?>
		<?php if ( $settings->allow_nested_comment_replies ) { ?>
			<p><?php comment_reply_link(array_merge( $GLOBALS[ 'comment_args' ], array('depth' => $GLOBALS[ 'comment_depth' ], 'max_depth' => $GLOBALS[ 'comment_args' ]))) ?></p>
		<?php } ?>
	</div>