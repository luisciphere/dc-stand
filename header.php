<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=1200, initial-scale=1">
<link href="http://allfont.ru/allfont.css?fonts=europe-bold" rel="stylesheet" type="text/css" />


<!--meta name="viewport" content="width=device-width" /-->

<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
  <html class="lt-ie9">
  <div style=' clear: both; text-align:center; position: relative;'>
    <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
      <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
           alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
    </a>
  </div>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
<![endif]-->

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/grid.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/colorbox.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/perfect-scrollbar.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tabs.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<?php wp_head(); ?>
<!--link rel="icon" type="image/png" href="/favicon.png" /-->
<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

</head>

<body>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MQ4SJC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MQ4SJC');</script>
<!-- End Google Tag Manager -->
<!-- Кнопка заказа звонка
<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b flbtn"  id="flbtnn">
<a class="hi-icon hi-icon-call flbtn-animated flbtn-pulse cbox-inline" href="#callback-hidden-form" title="Перезвоните мне!">&nbsp;</a>
<a class="hi-icon hi-icon-mail flbtn-animated flbtn-pulse" href="#callback" title="Написать письмо">&nbsp;</a>
</div> -->
<div class="page">

<main>

<section class="h236" id="newsupermenu">
 <div class="container">
  <div class="row mart45 htop">
   <div class="hdiv logo">
		<a href="/" class="tohide"><img src="/stendformatlogo.png" alt="StendFormat" /></a>
   </div>
   <div class="hdiv hdivc">
		<div class="hslogan ttup fs24 lh40 fw300 ffpt clrblack tohide">
			Мобильные стенды европейского качества,<br />интерьерная печать
		</div>
      <div class="">
    <?php wp_nav_menu( array(
   'container_class' => 'mmenu',
   'container'       => 'div',
   'theme_location' => 'main_menu'
   ) ); ?>
       <img class="visa-mk" src="<?php echo(get_template_directory_uri());?>/images/credit-card.jpg" alt="" />
      </div>

   </div>
	<div class="fright hdivp mart10">
		<div class="fs15 lh25 fw700 right tohtop">+7 <span class="ya-phone-1 padr10">495</span><span class="ya-phone-3 clrred1 fs30">740-31-46</span></div>
    <div class="right fs19 lh32 tohide"><img class="metro" src="<?php echo(get_template_directory_uri());?>/images/metro.jpg">Ботанический сад</div>
		<div class="right fs19 lh32 tohide">ул. Докукина, 17.стр.3</div>
		<div class="right fs12 lh32 tohide">будни с 10:00 до 19:00</div>
		<div class="right fs15 lh32 tohide"><a href="mailto:zakaz@stendformat.ru"><i class="fa fa-envelope" style="margin-right: 5px;"></i>zakaz@stendformat.ru</a></div>

	</div>
	<div style="clear: both;"></div>
  </div>
 </div>
</section>
<?php /*
if (!is_front_page()){
	$showleftmenu = true;
	$gr2 = 'grid_9';
}else{
	$showleftmenu = false;
	$gr2 = 'grid_12';
}
*/
?>
<section class="padt25">
 <div class="container">
  <div class="row">

   <div class="grid_3">
	   <div id="leftstickmenu">
		   <a href="/" class="sfnlogo"><img src="/stendformatlogomedium.png" alt="StendFormat" /></a>

			<?php wp_nav_menu( array(
		   'container_class' => 'lmenu',
		   'container'       => 'div',
		   'theme_location' => 'left_menu',
		   'walker'        => new stend_walker_nav_menu
		   ) ); ?>
		</div>
   </div>

   <div class="grid_9 pagecontent">
	<?php if(get_field('hide-page-title', get_the_ID()) != 1){?>
     <div class=""><h1 class="pagetitle"><?php the_title(); ?></h1></div>
	<?php }
		else{
			$pc_title_style = ' style="margin-top: -40px;"';
		}
	?>
  <?php if((function_exists('bcn_display'))AND(!is_front_page())){ ?>
  <div class=""<?php echo $pc_title_style;?>>
  <div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
  <?php bcn_display(); ?>
</div>
  </div>
  <?php } ?>






<!-- section class="">
 <div class="container">
  <div class="row">
   <div class="">

   </div>
  </div>
 </div>
</section -->
