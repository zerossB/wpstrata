<article class="col-6 col-12-xsmall work-item">
    <?php if(has_post_thumbnail()): ?>
        <a href="<?php the_permalink() ?>" class="image fit thumb"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>" /></a>
    <?php endif ?>

    <h3><?php the_title(); ?></h3>
    <p><?php the_excerpt(); ?></p>
    <a href="<?php the_permalink() ?>" class="button small">Ler Mais...</a>
</article>