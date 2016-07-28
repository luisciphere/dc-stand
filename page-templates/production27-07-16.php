<?php
/*
 * Template Name: Продукция с 27.07.2016
 */?>
<?php get_header(); ?>

<?php

 the_post();
 //$post = get_post(52); //Временно пока тест



	$products = get_pages(array('child_of' => $post->ID, 'sort_order' => 'asc', 'sort_column' => 'menu_order',));
 foreach($products as $prod){
?>
<style>
  .width50 {
    width: 100%;
  }

  .price-prev {
    color: #fff;
    font-size: 14px;
    line-height: 1.25;
  }

  .price-sticker {
    text-align: center;
    color: #000;
    width: 116px;
    font-family: "Europe Bold";
    height: 81px;

    position: relative;
    bottom: 114px;
    left: 199px;

    background: url('<?php echo(get_template_directory_uri());?>/images/price-sticker.png');
    background-size: cover;

    padding-top: 23px;
    padding-bottom: 10px;
  }

  .item-card {
    max-height: 400px;
  }

  .item-container {
    float: left;
  }

  .item-name {
    font-size: 11px;
    line-height: 1.2;
    padding-top: 7px;
  }

  .price-at {
    font-family: Roboto;
  }

  .price-number {
    padding-left: 4px;
    font-size: 16px
  }

  .img-placement {
    width: 80%;
    padding-left: 26px;
    margin: auto;
  }
</style>

<div class="row item-container">
  <div class="grid_3">
     <!--a name="<?php echo $prod->post_name; ?>"><h3 class="mart20 padl10"><?php echo $prod->post_title; ?></h3></a тайтл-->
     <div class="width50 item-card">
       <div class="slider-img img-placement">
     <a href="/<?php echo $prod->post_name; ?>" class="mainpic" rel="images<?php echo $prod->ID;?>"><?php echo get_the_post_thumbnail($prod->ID,'large'); ?></a>

       </div>
     </div>
     <div class="price-sticker">
       <div class="price-prev">
         <span class="price-at">Цена от</span><br />
         <span class="price-number"><?php echo number_format(get_field('cprice', $prod->ID),0,',',' '); ?></span> <br />
       </div>
       <div class="item-name price-at">
         <span><?php echo $prod->post_title; ?></span> <br />
       </div>

     </div>


  </div>
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
