<?php
/*
 * Template Name: Pop Up v2
 */?>
<?php get_header(); ?>

<?php

 the_post(); 
 $post = get_post(52); //Временно пока тест


	$products = get_pages(array('child_of' => $post->ID, 'sort_order' => 'asc', 'sort_column' => 'menu_order',));
 foreach($products as $prod){
?>

<div class="row somebrd marb45">
 <div class="grid_3">
 <a name="<?php echo $prod->post_name; ?>"><h3 class="mart20 padl10"><?php echo $prod->post_title; ?></h3></a>
 	<div class="slider-img">	
 <?php if(wp_get_attachment_url(get_post_thumbnail_id($prod->ID)) != ''){?>
	<a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id($prod->ID));?>" class="cbox mainpic" rel="images<?php echo $prod->ID;?>"><?php echo get_the_post_thumbnail($prod->ID,'large'); ?></a>
  <?php } else {?>
	<a href="<?php echo get_template_directory_uri(); ?>/images/ex_work.jpg" class="cbox"><img src="<?php echo get_template_directory_uri(); ?>/images/ex_work.jpg" /></a>
  <?php } ?>
   </div>
 </div>
 
  <div class="grid_3">
 <div class="padl60 padr40">

	<?php if(get_field('cprice', $prod->ID) != ''){ ?>
		<div class="fs14 fw300 clrgrey2 padb10 mart20">Стоимость</div>
  <div class="fs30 clrred1 fw700"><span class="fs25">от</span> <?php echo number_format(get_field('cprice', $prod->ID),0,',',' '); ?> <span class="fs25">руб.</span></div>
	<?php }?>
  <div class="fs15 ttup fw700 clrviol padb15 mart20">Комплект поставки</div>
  <?php
				if( have_rows('ccomplect', $prod->ID) ): ?>
   <ul class="fs14 list01">
   <?php	while ( have_rows('ccomplect', $prod->ID) ) : the_row(); ?>
    <li><span><?php echo get_sub_field('cicomplect'); ?></span></li>
   <?php endwhile;?>
   </ul>
   <?php endif; ?>
   <a href="#order-hidden-form" data-order="<?php echo $prod->post_title; ?>" class="btn btnred mart10 cbox-inline">Заказать</a>
   <a href="#buy-hidden-form" data-order="<?php echo $prod->post_title; ?>" class="btn btnred mart10 cbox-inline">Купить</a>
	<?php
	$cdimage = '';
	
	if(have_rows('cdimages', $prod->ID)){ 
		while (have_rows('cdimages', $prod->ID)){
			the_row(); 
			$cdimage = get_sub_field('cdimages-image');
			?>
			<a href="<?php echo $cdimage['sizes']['large'];?>" class="cbox secpic" rel="images<?php echo $prod->ID;?>"><img src="<?php echo $cdimage['sizes']['thumbnail'];?>" /></a>
			<?php
		}
	} 
	?>

   	<!-- a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id($prod->ID));?>" class="cbox secpic" rel="images<?php echo $prod->ID;?>"><?php echo get_the_post_thumbnail($prod->ID,'large'); ?></a>
    <a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id($prod->ID));?>" class="cbox secpic" rel="images<?php echo $prod->ID;?>"><img src="/wp-content/themes/stendformat/images/tmppopup1.png" /></a>
    <a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id($prod->ID));?>" class="cbox secpic" rel="images<?php echo $prod->ID;?>"><img src="/wp-content/themes/stendformat/images/tmppopup2.png" /></a-->
   
  </div>
  </div>
 <div class="grid_3">
 <div class="padl60 padr40">
		<div class="fs14 fw300 clrgrey2 padb10 mart20">Описание</div>
  <div class="h210 fs13 lh15">
   <?php echo $prod->post_content; ?>
  </div>
<ul class="ico02 mart20">
 <?php if(get_field('cfprice', $prod->ID) != ''){ ?>
 <li class="ico01_01"><a href="<?php the_field('cfprice', $prod->ID); ?>">Инструкция по сборке</a></li>
 <?php } ?>
 <?php if(get_field('cftech', $prod->ID) != ''){ ?>
 <li class="ico01_02"><a href="<?php the_field('cftech', $prod->ID); ?>">Требования к макетам</a></li>
 <?php } ?>
 </ul>
 </div>
 </div>

	<div class="grid_9 tabs tabs-style-linemove">
		<nav>
			<ul>
				<li><a href="#sizes">Размеры и цены</a></li>
				<!-- li><a href="#info">Информация</a></li -->
				<li><a href="#complect">Примеры работ</a></li>
				<!--li><a href="#maket">Аксессуары</a></li-->
			</ul>
		</nav>
		<div class="content-wrap">
			<section id="sizes">				
					<?php echo get_field('csizes', $prod->ID); ?>
			</section>
			<!-- section id="info">
   <p>
				<?php echo $prod->post_content; ?>			
    </p>
			</section -->
			<section id="complect">	
				<div>
				<?php
				if(have_rows('cgallery', $prod->ID)){ ?>
				<div class="gallery-slider">
					<a href="#prev" class="gl-prev"><img src="<?php echo get_template_directory_uri(); ?>/images/arrleft.png" /></a>				
					<ul class="imglist">
					<?php	
					$gallery_rows = array();
					while (have_rows('cgallery', $prod->ID)){
						the_row(); 
						$gallery_rows[] = get_sub_field('cgimage');
					} 

					$i = 0;
					$count = count($gallery_rows);
					
					foreach($gallery_rows AS $row){
						if($i == 0){
							echo '<li class="gallery">';
						}
						
						$img = image_downsize($row, 'thumbnail');
						echo '<a href="'.wp_get_attachment_url($row).'" class="cbox" rel="gallery'.$prod->ID.'"><img src="'.$img[0].'" /></a>';
							
						if(($i == 9) OR ($i == $count-1)){
							echo '</li>';
							$i = 0;
						}
						else {
							$i++;
						}
					} 
					?>	
						</li>
					</ul>
					<a href="#next" class="gl-next"><img src="<?php echo get_template_directory_uri(); ?>/images/arrright.png" /></a>
				</div>
				<?php 
				} 
				?>
				</div>
			</section>
			<!--section id="maket">
				<?php
				if( have_rows('cacces', $prod->ID) ): ?>
				<ul class="fs14 list01">
				<?php	while ( have_rows('cacces', $prod->ID) ) : the_row(); ?>
				<li><span><?php echo get_sub_field('catitle'); ?> - <?php echo number_format(get_sub_field('caprice'),0,',',' '); ?> руб.</span></li>
				<?php endwhile;?>
				</ul>
				<?php endif; ?>
			</section-->
		</div>
	</div>


  				<?php
				if( have_rows('cacces', $prod->ID) ){ ?>


  <div class="grid_9 ttup  marb20 clr13 fs20">С этим товаром покупают</div>
  <div class="grid_9 ">
				<ul class="fs14 list07">
				<?php	while ( have_rows('cacces', $prod->ID) ) {
    the_row();
    $capic = get_sub_field('capic');
    //print_r($capic);
    ?>
				<li><a href="<?php echo $capic['url']; ?>" class="cbox" rel="accs<?php echo $prod->ID; ?>"><img src="<?php echo $capic['sizes']['thumbnail']; ?>" /></a><div class="title"><?php echo get_sub_field('catitle'); ?></div>
    <div class="price"><?php echo number_format(get_sub_field('caprice'),0,',',' '); ?> руб.</div></li>
				<?php }?>
				</ul>
  </div>

				<?php } ?>
    
</div>
    
<?php
}
// редактируется в основных страницах
if(get_field('paccessories')){
?>
	<div>
		<h3>Аксессуары</h3>
		<?php the_field('paccessories'); ?>
	</div>
<?php 
}
?>

<?php get_footer(); ?>