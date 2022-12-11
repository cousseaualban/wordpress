<?php get_header();
//Template Name: Canada
?>
<main id="canada">
<div class="container">
<h2><?php the_title()?></h2>
<section id="allarticles">
<!-- affiche 8 extraits d'article -->
<?php
$recentPosts = new WP_Query();
$recentPosts->query('showposts=8');
?>
<!-- fin affiche 8 extraits d'article -->
<!-- boucle wordpress pour afficher les extraits d'article -->
<a href="<?php the_permalink(17) ?>" rel="bookmark"></a>
<!-- permet d'afficher un extrait d'article -->
<?php the_content(); ?>
<!-- fin permet d'afficher un extrait d'article -->
<!-- fin boucle wordpress pour afficher les extraits d'article -->
</section>
</div>
</main>
<?php get_footer(); ?>