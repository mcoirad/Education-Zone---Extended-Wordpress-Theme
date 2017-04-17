 <?php
 /**
  * Banner Section
 */ 
    
$banner_post = get_theme_mod( 'education_zone_banner_post' );
$read_more   = get_theme_mod( 'education_zone_banner_read_more', __( 'Read More', 'education-zone' ) );$banner_url = get_theme_mod( 'education_zone_banner_image' );
$title_override = get_theme_mod( 'education_zone_banner_title');
   
if( $banner_post ){
    $qry = new WP_Query( "p=$banner_post" );

    if( $qry->have_posts() ){ 
        while( $qry->have_posts() ){   
            $qry->the_post();
            if( has_post_thumbnail() ){ 							if ( isset($banner_url )) : ?> 								<img src='<?php echo esc_url( $banner_url ); ?>'>
                <?php else : 									the_post_thumbnail( 'education-zone-banner' );  									endif; ?>
                <div class="banner-text">
                    <div class="container">
                        <div class="text">
							<?php if ( isset( $title_override) ) {
								echo '<span>' . esc_html($title_override) . '</span>';
							}
							else {
                            ?><span><?php the_title(); ?></span>
                            <?php } if( $read_more ): ?>
                            <a href="<?php the_permalink(); ?>" class="course-link"><?php echo esc_html( $read_more ); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        wp_reset_postdata();
    }
} 