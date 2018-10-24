<article class="col-12">
    <?php if(has_post_thumbnail()): ?>
        <a href="#" class="image fit"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>" /></a>
    <?php endif ?>

    <h2><?php the_title(); ?></h2>
    <p>Postado por <?php the_author() ?> em <?php the_time('d/M/Y') ?> - <?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?> <?php edit_post_link('(Editar)'); ?></p>

    <hr>
    <div id="content">
        <?php the_content(); ?>
    </div>
</article>

<?php comments_template(); ?>