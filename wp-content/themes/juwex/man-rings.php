<?php
/*
  * Template name: Mans
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

<script type="text/javascript">
$(document).ready(function () {
    $('td a').click(function () {
        var o=$(this).parent();
        var url=o.find('img').attr('src');
        var html='<a href="#" class="clone"><img src="'+url+'" /></a>'
        o.append(html);
        o=o.find('.clone');
        o.animate({width:'200%',height:'200%'});
        o.click(function () {
            $(this).remove();
        });
    });
});
</script>


<div class="wrapper content">
	<img class="image"  src="/uploads/site_article/man_rings/201_s.jpg" alt=""> 
	<img class="image" src="/uploads/site_article/man_rings/202_s.jpg" alt="">
	<img class="image" src="/uploads/site_article/man_rings/203_s.jpg" alt="">
	<img class="image" src="/uploads/site_article/man_rings/204_s.jpg" alt="">	
	<img class="image" src="/uploads/site_article/man_rings/205_s.jpg" alt="">
	<img class="image" src="/uploads/site_article/man_rings/206_s.jpg" alt="">
	<img class="image" src="/uploads/site_article/man_rings/207_s.jpg" alt="">	
	<img class="image" src="/uploads/site_article/man_rings/208_s.jpg" alt="">	
	<img class="image" src="/uploads/site_article/man_rings/209_s.jpg" alt="">	
	<img class="image"  src="/uploads/site_article/man_rings/210_s.jpg" alt=""> 

<!-- </div> -->

<!-- <h1>Пагинация для Галерей</h1> -->
<!-- 
post_content - ссылка на фото
post_title - тип изделия


-->



<?php get_footer();

