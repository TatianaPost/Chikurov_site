<?php
/*
  * Template name: Home
  * */
get_header();

if(ale_get_meta('descr1')){
	echo ale_get_meta('descr1');
}

 //echo "Home page";

$custom_query = new WP_Query( array( 'post_type' => 'services','posts_per_page'=>'1' ) );

if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
<div class="h2" ><?php the_title(); ?></div>
<div class="contact-content">
	<?php the_content(); ?>
</div>
<?php endwhile; endif; ?>

<div class="wrapper content">


    
<?php get_footer(); ?>