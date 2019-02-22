<?php /* Template Name: Photography Template */ ?>

<style>
    .modal-content {
        margin-bottom: 150px;
    }
</style>

<?php get_header(); ?>

<?php 
    // sets child pages into array
  $args = array(
      'parent' => $post->ID,
      'post_type' => 'page',
      'post_status' => 'publish'
  ); 
  // loops over each page and creates content from the child pages and ACF
    $pages = get_pages($args); ?>
    <div class="child-pages-container">
    <?php foreach( $pages as $page ) {  
        ?>
        <a class="child-page-link" href="<?php echo get_permalink($page->ID); ?>" rel="bookmark" title="<?php echo $page->post_title; ?>">
            <div class="child-page-background" style="background: url(<?php echo the_field('image', $page->ID); ?>); background-repeat: no-repeatl; background-size: cover;">
                <div class="child-page-name"><?php echo $page->post_title; ?></div>
            </div>  
        </a>
  <?php } ?>
  </div> 

<?php get_footer(); 