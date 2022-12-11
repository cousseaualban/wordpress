<?php get_header();
//Template Name: About
?>
<main id="about">
<div class="container">
<h2><?php the_title()?></h2>
<section id="allarticles">
<!-- boucle wordpress pour afficher les extraits d'article -->
<a href="<?php the_permalink(21) ?>" rel="bookmark"></a>
<?php $thumb = get_the_post_thumbnail_url(); ?>
<div class="image-class" style="background-image: url('<?php echo $thumb;?>')"></div>
<!-- permet d'afficher un extrait d'article -->
<?php the_content(); ?>
<!-- fin permet d'afficher un extrait d'article -->
<!-- fin boucle wordpress pour afficher les extraits d'article -->
</section>
</div>
</main>
<?php get_footer(); ?>