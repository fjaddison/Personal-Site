<?php
  get_header(); 
?>

<?php
  while(have_posts()) {
    the_post(); 
?>

<?php }
echo paginate_links();
get_footer(); 
