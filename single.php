<?php get_header();
?>
<main id="actu">
<!-- boucle wordpress -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<article>
<!-- affiche le contenu -->
<?php the_content(); ?>
<!-- fin affiche le contenu -->
<!-- affiche l'image mise en avant -->
<?php the_post_thumbnail();?>
<!-- fin affiche l'image mise en avant -->
<section class="box">
<span><?php the_author();?></span>
<span> <?php the_category();?></span>
<span><?php the_time('j F, Y'); ?></span>
</section>
</article>
<?php endwhile; ?>
<?php endif; ?>
<!-- fin boucle wordpress -->
</main>