<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if (post_password_required())
    return;
?>

<div id="comments" class="comments-area">

    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            printf(_nx('One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'twentythirteen'), number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>');
            ?>
        </h2>

        <ol class="comment-list">
    <?php
    wp_list_comments(array(
        'style' => 'ol',
        'short_ping' => true,
        'avatar_size' => 74,
    ));
    ?>
        </ol><!-- .comment-list -->

    <?php
    // Are there comments to navigate through?
    if (get_comment_pages_count() > 1 && get_option('page_comments')) :
        ?>
            <nav class="navigation comment-navigation" role="navigation">
                <h1 class="screen-reader-text section-heading"><?php _e('Comment navigation', 'twentythirteen'); ?></h1>
                <div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'twentythirteen')); ?></div>
                <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'twentythirteen')); ?></div>
            </nav><!-- .comment-navigation -->
    <?php endif; // Check for comment navigation  ?>

        <?php if (!comments_open() && get_comments_number()) : ?>
            <p class="no-comments"><?php _e('Comments are closed.', 'twentythirteen'); ?></p>
        <?php endif; ?>

    <?php endif; // have_comments() ?>

    <?php /* comment_form(array(
      'format'    => 'html5',
      )); */ ?>

    <?php if (comments_open()) : ?>

        <section id="respond" class="respond-form col-sm-12 col-md-8 col-lg-6">

            <h3 id="comment-form-title"><?php comment_form_title(__("Leave a Reply", "twentythirteen"), __("Leave a Reply to", "twentythirteen") . ' %s'); ?></h3>

            <div id="cancel-comment-reply">
                <p class="small"><?php cancel_comment_reply_link(__("Cancel", "twentythirteen")); ?></p>
            </div>

    <?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>
                <div class="help">
                    <p><?php _e("You must be", "twentythirteen"); ?> <a href="<?php echo wp_login_url(get_permalink()); ?>"><?php _e("logged in", "twentythirteen"); ?></a> <?php _e("to post a comment", "twentythirteen"); ?>.</p>
                </div>
    <?php else : ?>

                <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" class="form-vertical" id="commentform" role="form">

        <?php if (is_user_logged_in()) : ?>

                    <p class="comments-logged-in-as"><?php _e("Logged in as", "twentythirteen"); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e("Log out of this account", "twentythirteen"); ?>"><?php _e("Log out", "twentythirteen"); ?> &raquo;</a></p>

        <?php else : ?>

                    <div class="form-group">
                        <label for="author"><?php _e("Name", "twentythirteen"); ?> <?php if ($req) echo "(required)"; ?></label>
                        <input type="text" class="form-control" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" placeholder="<?php _e("Your Name", "twentythirteen"); ?>" <?php if ($req) echo "required='required'"; ?> />
                        
                    </div>
                    <div class="form-group">
                        <label for="email"><?php _e("Email", "twentythirteen"); ?> <?php if ($req) echo "(required)"; ?></label>
                        <input type="email" class="form-control" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" placeholder="<?php _e("Your Email", "twentythirteen"); ?>" <?php if ($req) echo "required='required'"; ?> />
                    </div>
                    <div class="form-group">
                        <label for="url"><?php _e("Website", "twentythirteen"); ?></label>
                        <input type="url" class="form-control" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" placeholder="<?php _e("Your Website", "twentythirteen"); ?>" />
                    </div>

        <?php endif; ?>

                    <div class="form-group">
                        <label for="comment"><?php _e("Comments", "twentythirteen"); ?></label>
                        <textarea name="comment" class="form-control" id="comment" placeholder="<?php _e("Your Comment Here…", "twentythirteen"); ?>"></textarea>
                        
                    </div>

                    <div class="form-actions">
                        <input class="btn btn-primary" name="submit" type="submit" id="submit" tabindex="5" value="<?php _e("Submit Comment", "twentythirteen"); ?>" />
        <?php comment_id_fields(); ?>
                    </div>

        <?php
        //comment_form();
        do_action('comment_form', $post->ID);
        ?>

                </form>

    <?php endif; // If registration required and not logged in  ?>
        </section>

        <?php endif; // if you delete this the sky will fall on your head ?>



</div><!-- #comments -->