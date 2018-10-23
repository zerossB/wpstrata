<article class="col-12">
    <?php if(has_post_thumbnail()): ?>
        <a href="#" class="image fit"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>" /></a>
    <?php endif ?>

    <h2><?php the_title(); ?></h2>
    <hr>
    <div id="content">
        <?php the_content(); ?>
    </div>
</article>