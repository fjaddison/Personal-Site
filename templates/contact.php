<?php /* Template Name: Contact Template */  ?>

<style>
    .modal-content {
        margin-bottom: 150px;
    }
</style>

<?php 

get_header(); 

while(have_posts()) {
  the_post(); ?>

 <div class="contact-content">
    <div class="contact-post">
        <?php the_content(); ?>
    </div>
    <?php echo do_shortcode('[happyforms id="91" /]'); ?>

</div>
  
<?php }

get_footer();

?>

<?php get_footer(); 