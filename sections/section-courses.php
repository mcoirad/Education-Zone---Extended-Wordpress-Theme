<?php
/**
 * Courses Section
*/
 
$section_title= get_theme_mod( 'education_zone_courses_section_title' );
$post_one    = get_theme_mod( 'education_zone_featured_courses_post_one' );
$post_two    = get_theme_mod( 'education_zone_featured_courses_post_two' );
$post_three  = get_theme_mod( 'education_zone_featured_courses_post_three' );
$post_four   = get_theme_mod( 'education_zone_featured_courses_post_four' );
$image_one  = get_theme_mod( 'education_zone_featured_courses_image_one' );
$image_two  = get_theme_mod( 'education_zone_featured_courses_image_two' );
$image_three  = get_theme_mod( 'education_zone_featured_courses_image_three' );
$image_four  = get_theme_mod( 'education_zone_featured_courses_image_four' );
$text_one	= get_theme_mod( 'education_zone_featured_courses_text_one' );
$text_two	= get_theme_mod( 'education_zone_featured_courses_text_two' );
$text_three	= get_theme_mod( 'education_zone_featured_courses_text_three' );
$text_four	= get_theme_mod( 'education_zone_featured_courses_text_four' );
$posts = array( $post_one, $post_two, $post_three, $post_four );
$posts = array_diff( array_unique( $posts ), array('') );
$images = array( $image_one, $image_two, $image_three, $image_four );
$texts = array( $text_one, $text_two, $text_three, $text_four );
$args = array(
        'post__in'   => $posts,
        'orderby'   => 'post__in',
            'tax_query' => array(
							array(
							'taxonomy' => 'post_format',
							'field'    => 'slug',
							'terms'    => array( 'post-format-gallery' ),
							'operator' => 'NOT IN',
							)),
        );

$qry = new WP_Query( $args );
?>
<div class="container">
	<?php education_zone_get_section_header( $section_title );
	
    if( $posts && $qry->have_posts() ){ ?>
        <ul>
        <?php           						$post_counter = 0;
            while( $qry->have_posts() ){ 
                $qry->the_post(); ?>
                <li>
        
        			<div class="image-holder">
        				<?php 
                        if (!$images[$post_counter] == "") {												
					  	?><img src='<?php echo esc_url( $images[$post_counter] ); ?>'> 
					  	<?php
                        }												
			  			else if(has_post_thumbnail()){                            
						  the_post_thumbnail( 'education-zone-featured-course' );						} 												
			  			else{ ?>
                              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/featured-fallback.png">
                        <?php } ?>
        				<div class="text">
						  <?php
			  				if (!$texts[$post_counter] == "") {
							?>
						  <span> <?php echo esc_html( $texts[$post_counter] ); ?></span>
						  
						  <?php } else { ?>
        					<span><?php the_title(); ?></span>
						  <?php } ?>
        				</div>
        				<div class="description">
        					<h2><?php the_title(); ?></h2>
        					<?php the_excerpt();?>
        					<a href="<?php the_permalink(); ?>" class="learn-more"><?php echo esc_html__( 'Learn More', 'education-zone' ); ?></a>
        				</div>
        			</div>

                </li>
		<?php $post_counter = $post_counter + 1;					} 
            wp_reset_postdata();
        ?>
        </ul>
    <?php } ?>
</div>