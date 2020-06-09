<?php if ( post_password_required() ) 
{ return; }
?>


<?php if ( have_comments() ) : ?>

<div class="post-block clearfix">
<div id="comments">
  

<h3><i class="fa fa-comments"></i>
<?php printf( _nx ( 'Comments (%1$s)', 'Comments (%1$s)', get_comments_number(), 'comments title', 'twentyfifteen' ),
			number_format_i18n( get_comments_number() ), get_the_title() ); ?>
</h3>

		<ul class="comments">
			<?php
				wp_list_comments( array(
					'style'       => 'ul',
					'short_ping'  => true,
					'callback' => 'mytheme_comment',
					'reply_text'        => 'Reply'
				) );
			?>
		</ul>

</div>
</div>

<?php endif; ?>


<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :	?>
		<p class="no-comments"><?php _e( 'Comments are closed.' ); ?></p>
<?php endif; ?>

<div class="post-block">
<?php
$defaults = [
	'fields'               => [
		'author' => '<div class="form-group">
			<label for="author">' . __( 'Your name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label>
			<input id="author" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . $html_req . ' />
		</div>',
		'email'  => '<div class="form-group">
			<label for="email">' . __( 'Your email address' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> 
			<input id="email" class="form-control" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-describedby="email-notes"' . $aria_req . $html_req  . ' />
		</div>',
		'cookies' => '<p class="comment-form-cookies-consent">'.
			 sprintf( '<input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"%s />', $consent ) .'
			 <label for="wp-comment-cookies-consent">'. __( 'Save my name, email, and website in this browser for the next time I comment.' ) .'</label>
		</p>',        
	],
	'must_log_in'          => '<p class="must-log-in">' . 
		 sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '
	 </p>',
	'logged_in_as'         => '<p class="logged-in-as">' . 
		 sprintf( __( '<a href="%1$s" aria-label="Logged in as %2$s. Edit your profile.">Logged in as %2$s</a>. <a href="%3$s">Log out?</a>' ), get_edit_user_link(), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '
	 </p>',
	 'comment_field'        => '<div class="form-group">
			<label for="comment">' . _x( 'Comment *', 'noun' ) . '</label>
			<textarea id="comment" name="comment" class="form-control" cols="45" rows="8"  aria-required="true" required="required"></textarea>
		</div>',
	'comment_notes_before' => '<p class="comment-notes">
		<span id="email-notes">' . __( 'Your email address will not be published.' ) . '</span>'. 
		( $req ? $required_text : '' ) . '
	</p>',
	'comment_notes_after'  => '',
	'id_form'              => 'commentform',
	'id_submit'            => 'submit',
	'class_form'           => 'comment-form',
	'class_submit'         => 'btn btn-primary btn-lg',
	'name_submit'          => 'submit',
	'title_reply'          => 'Leave a comment',
	'title_reply_to'       => __( 'Leave a Reply to %s' ),
	'title_reply_before'   => '<h3><i class="fa fa-commenting"></i>',
	'title_reply_after'    => '</h3>',
	'cancel_reply_before'  => ' <small>',
	'cancel_reply_after'   => '</small>',
	'cancel_reply_link'    => __( 'Cancel reply' ),
	'label_submit'         => __( 'Post Comment' ),
	'submit_button'        => '<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="Post Comment" />',
	'submit_field'         => '<p class="form-group">%1$s %2$s</p>',
	'format'               => 'xhtml',
];

//Меняем порядок вывода полей
add_filter('comment_form_fields', 'kama_reorder_comment_fields' );
function kama_reorder_comment_fields( $fields ){
	$new_fields = array(); // сюда соберем поля в новом порядке
	$myorder = array('author','email','url','comment'); // нужный порядок
	foreach( $myorder as $key ){
		$new_fields[ $key ] = $fields[ $key ];
		unset( $fields[ $key ] );
	}
	// если остались еще какие-то поля добавим их в конец
	if( $fields )
		foreach( $fields as $key => $val )
			$new_fields[ $key ] = $val;

	return $new_fields;
}

comment_form( $defaults );
?>
</div>