<?php /* Template Name: About Template */ ?>

<?php get_header(); ?>

<style>
    .modal-content {
        margin-bottom: 150px;
    }
</style>

<?php

$parent_field = get_field('about_pics');

get_header(); ?>

<div class="about-container"> 

<?php
while(have_posts()) {
  the_post(); ?>

    <div class="about-post">
        <?php the_content(); ?>
    </div>

</div>
  
<?php } ?>

<div class="about-pics">
        <?php 
            if( have_rows('about_pics') ):
                while( have_rows('about_pics') ) : the_row(); ?>
                    <div class="about-picture" style="background-image:url(<?php the_sub_field('picture'); ?>);"></div>   
                <?php endwhile;
            endif; 
        ?>
</div>

</div>



<?php get_footer(); 