<?php get_header() ?>

<div class="row">
<?php if (have_posts()) :
    while (have_posts()) :
        the_post();
        get_template_part('includes/_articles', get_post_format());
    endwhile;
    // Previous/next page navigation.
    // the_posts_pagination(
    //     array(
    //         'prev_text'          => __('Previous page', 'strata'),
    //         'next_text'          => __('Next page', 'strata'),
    //         'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'strata') . ' </span>',
    //     )
    // );
    else :
        get_template_part('includes/_articles', none);
endif;
?>
</div>
<?php get_footer() ?>