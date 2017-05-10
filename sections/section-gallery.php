<?php 

/**

 * 

 * Gallary Section

*/



$gallery_post = get_theme_mod('education_zone_gallery_post');
$gallery_link = get_theme_mod('education_zone_gallery_link');


if( $gallery_post ){

    

    $gallery_qry = new WP_Query( "p=$gallery_post" );

    

    if( $gallery_qry->have_posts()){

        while( $gallery_qry->have_posts()){ 

            $gallery_qry->the_post();
			
			if ( !isset($gallery_link) ) {
			
				?>
			
				<a href=" <?php esc_url($gallery_link); ?> " target="blank">
			
				<?php the_content(); ?> 
			
				</a>
			
				<?php
			
			/*	echo '<a href="' . esc_url($gallery_link) . '" target="_blank">' . the_content() . '</a>';*/
			
			/*	?> <a href=" <?php echo esc_url($gallery_link); ?>" target="_blank"><?php the_content(); ?></a><?php */
			
			}
			
			else {
			
				?>
			
				<a href="/invest/">
			
				<?php the_content(); ?> 
			
				</a>
			
				<?php 
			
			}

             

        } 

        wp_reset_postdata();

    } 

}