<?php
/*
 * Template Name: Карта сайта
 */?>
<?php get_header(); ?>
<!-- BC -->
<section class="brdtg3 brdbg">
 <div class="container">
  <div class="breadcrumbs">
    <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
  </div>
 </div>
</section>

<section class="well1 botbrd_blue2">
	<div class="container">
		<div class="row">
			<div class="head_8 blue_1 center"><?php echo the_title(); ?></div>
			<ul>
			<?php
				$pages = get_pages(array('parent' => 0, 'sort_column' => 'menu_order', 'sort_order' => 'asc'));

				foreach($pages as $page){
				?>
					<li><a href="<?php echo get_page_link($page->ID); ?>"><?php echo $page->post_title; ?></a></li>
				<?php
				}	
			?>
			</ul>
			<br /><a href="<?php echo get_site_url(); ?>/sitemap.xml">sitemap.xml</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>