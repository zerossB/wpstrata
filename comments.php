<?php
    if ( post_password_required() || ! is_singular() ) {
        return;
    }
?>

<div id="comentarios" class="row comments-area">
    <?php if (have_comments()): ?>
        <h3><?php echo __("Comentários", 'strata') ?></h3>
        <hr>
        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'      => 'ol',
                    'short_ping' => true,
                    'avatar_size'=> 34,
                ) );
            ?>
    	</ol><!-- .comment-list -->

        <hr>

        <?php if ( ! comments_open() ) : ?>
            <p class="no-comments">Os comentários estão fechados.</p>
        <?php endif; ?>

        <?php comment_form(); ?>
    <?php endif; ?>
</div>