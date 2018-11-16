<?php
if (post_password_required()) {
    return;
}
?>
<?php
$user = (is_user_logged_in()) ? ("") : ("hide");
$fields = array(
    'author' => '<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><div class="form-group">' .
    '<input id="author" name="author" class="form-control" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30" placeholder="Name" required="" /></div>',
    'email' => '<div class="form-group"><input id="email" name="email" class="form-control" placeholder="Email"  value="' . esc_attr($commenter['comment_author_email']) . '" size="30" aria-describedby="email-notes" required="" /></div>',
    'url' => '<div class="form-group">' .
    '<input id="url" class="form-control" name="url" type="text" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" placeholder="Website"/></div></div>',
    'comment_field' => '<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><div class="form-group comment"><textarea class="form-control" id="comment" name="comment" cols="40" rows="10" aria-required="true" required="required" placeholder="Message">' .
    '</textarea></div>',
);

    $args = array('fields' => $fields,
        'id_form' => 'commentform',
        'class_form' => 'form-inline',
        'id_submit' => 'submit',
        'class_submit' => 'btn-xl',
        'name_submit' => 'submit',
        'title_reply' => __(''),
        'title_reply_to' => __('Comments to %s'),
        'cancel_reply_link' => __('Cancel Reply'),
        'label_submit' => __('Submit'),
        'submit_field' => '<div class="col-xs-12 col-sm-6 text-left">%1$s %2$s</div></div>',
        'format' => 'xhtml',
        'must_log_in' => '<p class="must-log-in">' .
        sprintf(
                __('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url(apply_filters('the_permalink', get_permalink()))
        ) . '</p>',
        'logged_in_as' => '<p class="logged-in-as">' .
        sprintf(
                __('Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>'), admin_url('profile.php'), $user_identity, wp_logout_url(apply_filters('the_permalink', get_permalink()))
        ) . '</p>',
        'comment_notes_before' => '',
        'comment_notes_after' => '',
        //'fields' => apply_filters('comment_form_default_fields', $fields),
        'comment_field' => '<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 pad0 reply-comment"><div class="form-group ' . $user . '"><textarea class="form-control" id="comment" name="comment" cols="40" rows="10" placeholder="Type in your comment" aria-required="true">' .
        '</textarea></div>',
            //'comment_notes_after' => '<button type="submit" class="btn btn-info hvr-icon-wobble-horizontal" id="submit-new"><span>'.__('Submit').'</span></button>',
    );
$commentArgs = array(
    'walker' => null,
    'max_depth' => '2',
    'style' => 'ol',
    'callback' => null,
    'end-callback' => null,
    'type' => 'all',
    'reply_text' => 'Reply',
    'page' => '',
    'per_page' => 5,
    'avatar_size' => 32,
    'reverse_top_level' => 'desc',
    'reverse_children' => '',
    'format' => 'xhtml', // or 'xhtml' if no 'HTML5' theme support
    'short_ping' => false, // @since 3.6
    'echo' => true     // boolean, default is true
);
?>
<div id="comments" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pad0 reply-comment">
<?php if (have_comments()) : ?>


        <?php wp_list_comments(array('style' => 'div')); ?>
    <?php //wp_list_comments( 'type=comment&callback=mytheme_comment' );  ?> 


    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav>
                <ul class="pager">
                    <?php if (get_previous_comments_link()) : ?>
                        <li class="previous"><?php previous_comments_link(__('&larr; Older comments', 'sage')); ?></li>
                    <?php endif; ?>
                    <?php if (get_next_comments_link()) : ?>
                        <li class="next"><?php next_comments_link(__('Newer comments &rarr;', 'sage')); ?></li>
        <?php endif; ?>
                </ul>
            </nav>
        <?php endif; ?>
    <?php endif; // have_comments()  ?>

        <?php if (!comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments')) : ?>
        <div class="alert alert-warning">
        <?php _e('Comments are closed.', 'sage'); ?>
        </div>
    <?php endif; ?>

<?php comment_form($args); ?>
</div>



