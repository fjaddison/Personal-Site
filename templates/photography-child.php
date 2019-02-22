<?php /* Template Name: Photography Child Template */ ?>

<style>
    .modal-content {
        margin-bottom: 150px;
    }
</style>

<?php get_header(); ?>

<div class="the-image-modal hide-img-modal">
    <div class="close-img-modal">X</div>
    <div class="pop-up-img"></div> 
</div>

<?php 
$images = get_field('gallery-image');
?>

<div class="photog-child-box">
    <div class="child-gallery-container">
        <?php foreach( $images as $image ) {  ?>
        <div class="child-image-container">
            <div class="child-image-background" style="background: url(<?php echo $image['url']; ?>); background-repeat: no-repeat; background-size: cover;">
            </div>
            <div class="image-caption"><?php echo $image['title']; ?></div>
        </div>
        <?php } ?>
    </div>
    <div class="mobile-child-gallery">
        <?php foreach( $images as $image ) {  ?>
            <div class="mobile-image-container">
                <div class="mobile-child-image-background" style="background: url(<?php echo $image['url']; ?>); background-repeat: no-repeat; background-size: cover;">
                </div>
                <div class="mobile-image-caption"><?php echo $image['title']; ?></div>
            </div>
        <?php } ?>
    </div>
</div>

<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/portfolio-theme/js/popup.js"></script>

<?php get_footer(); 

