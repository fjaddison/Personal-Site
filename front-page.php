<?php
    // https://wordpress.stackexchange.com/questions/11662/get-all-images-in-media-gallery
    // queries the Media Gallery into an array of image URLs
    $query_images_args = array(
        'post_type'      => 'attachment',
        'post_mime_type' => 'image',
        'post_status'    => 'inherit',
        'posts_per_page' => - 1,
    );

    $query_images = new WP_Query( $query_images_args );
    
    $images = array();
    foreach ( $query_images->posts as $image ) {
        $images[] = wp_get_attachment_url( $image->ID );
    }
    $the_post = get_post(1);
    $post_object = get_field('home_gallery', $the_post)

?>   

<?php get_header(); ?>

<div class="the-content">
    <div class="front-page-banner" >
        <div class="fp-image-three" style="background-image: url(<?php echo $images[113]; ?>);"></div>
        <div class="fp-image-one" style="background-image: url(<?php echo $images[108]; ?>);"></div>
        <div class="fp-image-two" style="background-image: url(<?php echo $images[117]; ?>);"></div>
        <div class="fp-image-four" style="background-image: url(<?php echo $images[121]; ?>);"></div>
        <div class="fp-image-five" style="background-image: url(<?php echo $images[101]; ?>);"></div>
        <div class="fp-image-six" style="background-image: url(<?php echo $images[112]; ?>);"></div>
        <div class="special-box"></div>
    </div>
   
</div>

<script type='text/javascript'>

    // keeping script in this file so we can use a PHP value for a JS variable
    // will move to a different file with 
    let postObjectString = '<?php echo json_encode($post_object); ?>'
    let JSONObject = JSON.parse(postObjectString)
    let special = document.querySelector('.special-box')

    // https://stackoverflow.com/questions/4959975/generate-random-number-between-two-numbers-in-javascript
    function randomIntFromInterval(min,max) { // min and max included
        return Math.floor(Math.random()*(max-min+1)+min);
    }

    let interval = setInterval(changingBackground, 5000)

    function changingBackground() {
        special.style.backgroundImage = `url(${JSONObject[randomIntFromInterval(0, 13)].url})`
    }

    document.addEventListener('load', changingBackground)

</script>

<?php echo wp_title(); ?>

<?php get_footer(); 