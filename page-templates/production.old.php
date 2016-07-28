<?php
/*
 * Template Name: Продукция - старый шаблон
 */?>
<?php get_header(); ?>

<?php

 the_post();
 // the_content();

	$products = get_pages(array('child_of' => $post->ID, 'sort_order' => 'asc', 'sort_column' => 'menu_order',));
 foreach($products as $prod){
?>

<div class="row">
<div class="grid_9"><a name="<?php echo $prod->post_name; ?>"><h3><?php echo $prod->post_title; ?></h3></a></div>

 <div class="grid_2" style="padding-top: 20px;">
      <section class="slider" style="height: 300px;">
		<a href="#prev" class="sl-prev">up</a>
        <div class="flexslider carousel">
          <ul class="slides">
            <li>
  	    	    <img src="<?php echo get_template_directory_uri(); ?>/images/ex_work.jpg" width="50%">
  	    	</li>
            <li>
  	    	    <img src="<?php echo get_template_directory_uri(); ?>/images/ex_work.jpg" width="50%">
  	    	</li>
            <li>
  	    	    <img src="<?php echo get_template_directory_uri(); ?>/images/ex_work.jpg" width="50%">
  	    	</li>
            <li>
  	    	    <img src="<?php echo get_template_directory_uri(); ?>/images/ex_work.jpg" width="50%">
  	    	</li>
            <li>
  	    	    <img src="<?php echo get_template_directory_uri(); ?>/images/ex_work.jpg" width="50%">
  	    	</li>
          </ul>
        </div>
		<a href="#next" class="sl-next">down</a>
      </section>
 </div>
 <div class="grid_5">
 <!--img src="<?php echo get_template_directory_uri(); ?>/images/ex_work.jpg"-->
 	<div class="slider-img">	
 <?php if(wp_get_attachment_url(get_post_thumbnail_id($prod->ID)) != ''){?>
	<a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id($prod->ID));?>" class="cbox mainpic"><?php echo get_the_post_thumbnail($prod->ID,'large'); ?></a>
  <?php } else {?>
	<a href="<?php echo get_template_directory_uri(); ?>/images/ex_work.jpg" class="cbox"><img src="<?php echo get_template_directory_uri(); ?>/images/ex_work.jpg" /></a>
  <?php } ?>
   </div>
 </div>
 
  <div class="grid_2">
	<?php if(get_field('cprice', $prod->ID) != ''){ ?>
		<div class="fs14 fw300 clrgrey2 padb10">Стоимость от</div>
  <div class="fs30 clrred1 fw700"><?php echo number_format(get_field('cprice', $prod->ID),0,',',' '); ?> <span class="fs25">руб.</span></div>
	<?php }?>
  <div class="fs15 ttup fw700 clrviol padb15 mart45">Комплект поставки</div>
  <?php
				if( have_rows('ccomplect', $prod->ID) ): ?>
   <ul class="fs14 list01">
   <?php	while ( have_rows('ccomplect', $prod->ID) ) : the_row(); ?>
    <li><span><?php echo get_sub_field('cicomplect'); ?></span></li>
   <?php endwhile;?>
   </ul>
   <?php endif; ?>
   <a href="#" class="btn btnred mart100">Заказать</a>
  </div>
 
</div>
 
<div class="row mart45"> 
	<div class="tabs tabs-style-linemove">
		<nav>
			<ul>
				<li><a href="#sizes">Размеры и цены</a></li>
				<li><a href="#info">Информация</a></li>
				<li><a href="#complect">Галерея</a></li>
				<li><a href="#maket">Аксессуары</a></li>
			</ul>
		</nav>
		<div class="content-wrap">
			<section id="sizes">				
				<p> 
					<?php echo get_field('csizes', $prod->ID); ?>
				</p>
			</section>
			<section id="info">
				<?php echo $prod->post_content; ?>			
			</section>
			<section id="complect">
   <?php
				if( have_rows('cgallery', $prod->ID) ): ?>
   <ul class="imglist">
   <?php	while ( have_rows('cgallery', $prod->ID) ) : the_row(); 
    $img = image_downsize(get_sub_field('cgimage'),'thumbnail');
   ?>
    <li class="gallery"><a href="<?php echo wp_get_attachment_url(get_sub_field('cgimage')); ?>" class="cbox"><img src="<?php echo $img[0]; ?>" /></a></li>
   <?php endwhile;?>
   </ul>
   <?php endif; ?>
			</section>
			<section id="maket">
   <?php
				if( have_rows('cacces', $prod->ID) ): ?>
   <ul class="fs14 list01">
   <?php	while ( have_rows('cacces', $prod->ID) ) : the_row(); ?>
    <li><span><?php echo get_sub_field('catitle'); ?> - <?php echo number_format(get_sub_field('caprice'),0,',',' '); ?> руб.</span></li>
   <?php endwhile;?>
   </ul>
   <?php endif; ?>
   </section>
		</div>
	</div>
</div>

<?php
}
?>

<?php get_footer(); ?>