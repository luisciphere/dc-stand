<?php

if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}

register_nav_menus(array(
	'left_menu' => 'Меню слева',
	'main_menu' => 'Главное меню'
));

add_theme_support('post-thumbnails', array('page','post'));

add_filter('cf7msm_force_session', '__return_true');

// AJAX функция для продукции
function get_ajax_proj_info() {
	if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
		$id = intval($_REQUEST['id']);
		
		if($id > 0){
			$post = get_post($id); 
			if($post){
				if(($post->post_status == 'publish') && ($post->post_type == 'page') && (in_array($post->post_parent, array(79,81,83)))){
					if (has_post_thumbnail($post->ID)){
						$image = get_the_post_thumbnail($post->ID, 'full');
					}
					else{
						$image = '';
					}
					
					$result = array(
						'id' => $post->ID,
						'title' => get_the_title($post->ID),
						'min_title' => get_field('proj-cname', $post->ID),
						'content' => $post->post_content,
						'min_content' => mb_strimwidth($post->post_content, 0, 230, '...'),
						'image' => $image,
						'url' => '<a href="'.get_permalink(12).'?project='.$post->ID.'">Читать далее</a>'
					);
					
					$result = json_encode($result);
					die($result);	
				}
			}	
		}
		else{
			header("Location: ".$_SERVER["HTTP_REFERER"]);
		}

	}
	else{
		header("Location: ".$_SERVER["HTTP_REFERER"]);
	}
}

add_action('wp_ajax_nopriv_get_proj_info', 'get_ajax_proj_info');   
add_action('wp_ajax_get_proj_info', 'get_ajax_proj_info');

class akbiz_walker_nav_menu extends Walker_Nav_Menu {
	// add classes to ul sub-menus
	function start_lvl(&$output, $depth){
		// depth dependent classes
		$indent = ($depth > 0  ? str_repeat( "\t", $depth ) : ''); // code indent
		$display_depth = ( $depth + 1); // because it counts the first submenu as 0
		$classes = array(
			'sub-menu',
			($display_depth >=2 ? 'sub-sub-menu' : '')
		);
		$class_names = implode(' ', $classes);
	  
		// build html
		$output .= "\n" . $indent . '<ul class="'.$class_names.'">' . "\n";
	}
	  
	// add main/sub classes to li's and links
	 function start_el(&$output, $item, $depth, $args) {
		global $wp_query;
		$indent = ($depth > 0 ? str_repeat("\t", $depth ) : ''); // code indent
	  
		// depth dependent classes
		$depth_classes = array(
			($depth == 0 ? 'main-menu-item' : 'sub-menu-item'),
			($depth >=2 ? 'sub-sub-menu-item' : '')
		);
		$depth_class_names = esc_attr(implode(' ', $depth_classes));
		
		// passed classes
		$classes = empty($item->classes) ? array() : (array) $item->classes;
		$class_names = esc_attr(implode(' ', apply_filters('nav_menu_css_class', array_filter($classes),$item))); 	  
		
		// build html
		$output .= $indent.'<li id="nav-menu-item-'.$item->ID.'" class="'.$depth_class_names.' '.$class_names.'">';
	  
		// link attributes
		$attributes  = !empty($item->attr_title) ? ' title="' .esc_attr( $item->attr_title ).'"' : '';
		$attributes .= !empty($item->target)     ? ' target="'.esc_attr( $item->target     ).'"' : '';
		$attributes .= !empty($item->xfn)        ? ' rel="'   .esc_attr( $item->xfn        ).'"' : '';
		$attributes .= !empty($item->url)        ? ' href="'  .esc_attr( $item->url        ).'"' : '';
		$attributes .= ' class="' . ( $depth > 0 ? 'font_14 flink' : 'font_22 blue_3 flink' ) . '"';
	    
		$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
			$args->before,
			$attributes,
			$args->link_before,
			apply_filters('the_title', $item->title, $item->ID),
			$args->link_after,
			$args->after
		);
		
		// убираем ссылки на текущие страницы
		if (in_array('current_page_item', $classes)) {
		$item_output = sprintf( '%1$s<span%2$s>%3$s%4$s%5$s</span>%6$s',
			$args->before,
			$attributes,
			$args->link_before,
			apply_filters('the_title', $item->title, $item->ID),
			$args->link_after,
			$args->after
		);
		}
	  
		// build html
		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}
}

class stend_walker_nav_menu extends Walker_Nav_Menu {
	// add classes to ul sub-menus
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		// depth dependent classes
		$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
		$display_depth = ( $depth + 1); // because it counts the first submenu as 0
		$classes = array(
			'sub-menu',
			( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
			( $display_depth >=2 ? 'sub-sub-menu' : '' ),
			'menu-depth-' . $display_depth
			);
		$class_names = implode( ' ', $classes );
	  
		// build html
		$output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
	}
	  
	// add main/sub classes to li's and links
	 function start_el(  &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		global $wp_query;
		$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
	  
		// depth dependent classes
		$depth_classes = array(
			( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
			( $depth >=2 ? 'sub-sub-menu-item' : '' ),
			( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
			'menu-item-depth-' . $depth
		);
		$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
	  
		// passed classes
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
	  
		// build html
		$output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';
	    
		// fix url for lero
		if(!empty($item->url)){
			$old_url = explode('/', $item->url);
			$new_url = $old_url[0].'//'.$old_url[2].'/'.$old_url[3].'/#'.$old_url[4];
		}
		else{
			$new_url = $item->url;
		}

		// link attributes
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $new_url        ) .'"' : '';
		$attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';
	  
		$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
			$args->before,
			$attributes,
			$args->link_before,
			apply_filters( 'the_title', $item->title, $item->ID ),
			$args->link_after,
			$args->after
		);
	  
		// build html
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}
?>