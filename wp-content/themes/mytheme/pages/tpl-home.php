<?php
/*
Template Name: home page
*/
?>
<?php get_header(); ?>
 <?php echo __( 'Hello, dear user!', 'seafood' ); ?>
 <?php  get_template_part('template-parts/block/content-home'); ?>

<?php get_footer(); ?>