<?php /* Template Name: Development Template */ ?>

<style>
    .modal-content {
        margin-bottom: 150px;
    }
</style>

<?php get_header(); 

$portfolio_pics = get_field('portfolio_gallery');

while(have_posts()) {
  the_post(); ?>

<div class="dev-content">
    <div class="dev-post">
        <?php echo the_content(); ?>
    </div>
    <div class="dividing-line"></div>
    <div class="web-gallery-container">
        <?php 
            foreach($portfolio_pics as $portfolio_pic) { ?>
                <div class="work-container">
                    <div><?php echo $portfolio_pic['title']; ?></div>
                    <div class="portfolio-screen-cap" style="background-image:url(<?php echo $portfolio_pic['url']; ?>);"></div>
                    <div class="portfolio-description">
                        <?php echo $portfolio_pic['description']; ?>
                    </div>
                    <div class="dividing-line"></div>
                </div>
            <?php }
        ?>
    </div>
</div>

<?php }

get_footer(); 