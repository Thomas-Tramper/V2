<?php 
 add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
 function my_theme_enqueue_styles() {
     wp_enqueue_style( 'parent-style',
         get_template_directory_uri() . "/style.css");
     wp_enqueue_style( 'child-style',
         get_stylesheet_directory_uri() . "/style.css",
         array( 'parent-style' ),
         wp_get_theme()->get('Version'));
 }

/**
	 * Documentation for function.
	 */
    function twentynineteen_the_posts_navigation() 
    {
		the_posts_pagination(
			array(
				'mid_size'  => 2,
				'prev_text' => sprintf(
					'%s<span class="nav-prev-text">%s</span>',
					twentynineteen_get_icon_svg( 'chevron_left', 22 ),
					__( 'Newer', 'twentynineteen' )
				),
				'next_text' => sprintf(
					'<span class="nav-next-text">%s</span>%s',
					__( 'Older', 'twentynineteen' ),
					twentynineteen_get_icon_svg( 'chevron_right', 22 )
				),
			)
		);
    }
    function twentynineteen_posted_by()
    {
        // 
    }
    
    function recipe_titles ($title, $id=ull)
    {
        if( in_category( 'recipes', $id ))
        {
            $title = "Recipe: ". $title;
        }
        return $title;
    }
    add_filter('the_title', 'recipe_titles', 10, 2);

    // function remove_parent_functionality()
    // {
    //     remove_action( 'widgets_init', 'twentynineteen_widgets_init' );
    // }
    // add_action('after_setup_theme', 'remove_parent_functionality')

    // function twentynineteen_posted_by()
    // {
    //     //do nothing
    // }