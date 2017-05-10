<?php

/**

 * News Section

*/
?>


				<div class="containernews">
<?php
$cat = get_theme_mod('education_zone_news_section_category');
$cat2 = get_theme_mod('education_zone_news_section_category_two');

$cat_link = esc_attr( get_theme_mod('education_zone_ed_news_section_link_one') );
$cat2_link = esc_attr( get_theme_mod('education_zone_ed_news_section_link_two') );

$section_title = get_theme_mod('education_zone_news_section_title');
education_zone_get_section_header( $section_title );



if( $cat ) {

        $args = array( 
            'post_type'             => 'post',
            'post_status'           => 'publish',
            'posts_per_page'        => 1,
            'tax_query' => array(
    						array(
    						'taxonomy' => 'post_format',
    						'field'    => 'slug',
    						'terms'    => array( 'post-format-gallery' ),
    						'operator' => 'NOT IN',
    						)),			'cat' => $cat,
            'ignore_sticky_posts'   => true    
        );
        
        $qry = new WP_Query( $args );
    
        if( $qry->have_posts() ){
            while( $qry->have_posts() ){ 
                $qry->the_post(); ?>
				

                    <div class="col-1">
                        <article class="post">
                        <?php if( has_post_thumbnail() ){ ?>

                        <?php } ?>
                        <div class="image-wrapper">
                            <div class="news-text">
                                <header class="entry-header">
								
								<div class="entry-meta">
									<h2 style="margin: 0.5em 0px 0em;"><a href="<?php echo esc_html(get_category_link($cat)); ?>">Latest <?php $categories = get_the_category(); echo esc_html( end($categories)->name ); ?></a></h2>
									</div>
								
                                    
								  <?php if ($cat_link == 1) { ?>
								  <span class="posted-on" >Published on: <a href="<?php echo esc_html(get_category_link($cat)); ?>"><?php echo esc_html( get_the_date( __( 'F jS, Y' , 'education-zone' ) ) ); ?></a></span>
								  	<h3 class="entry-title"><a href="<?php  echo esc_html(get_category_link($cat)); ?>"><?php the_title(); ?></a></h3> 
								  <?php } else { ?> 
								  <span class="posted-on" >Published on: <a href="<?php the_permalink(); ?>"><?php echo esc_html( get_the_date( __( 'F jS, Y' , 'education-zone' ) ) ); ?></a></span>
									  <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
								  <?php } ?>
                                </header>
                                
                                <div class="news-entry-content">
                                <?php the_excerpt(); ?>
                                </div>
                            
                                <div class="news-entry-footer">
								  <?php if ($cat_link == 1) { ?>
                                	<a href="<?php echo esc_html(get_category_link($cat)); ?>" class="read-news"><?php echo esc_html__( 'Read The Latest', 'education-zone' ); ?></a>
								  <?php } else { ?> 
                                	<a href="<?php the_permalink(); ?>" class="read-news"><?php echo esc_html__( 'Read The Latest', 'education-zone' ); ?></a>
								  <?php } ?>
								  
                                </div>
                            </div>
                        </div>
                        </article>
                    </div>
				


            <?php 
            }       
            wp_reset_postdata(); 
        }

}

if( $cat2 ) {

        $args = array( 
            'post_type'             => 'post',
            'post_status'           => 'publish',
            'posts_per_page'        => 1,
            'tax_query' => array(
    						array(
    						'taxonomy' => 'post_format',
    						'field'    => 'slug',
    						'terms'    => array( 'post-format-gallery' ),
    						'operator' => 'NOT IN',
    						)),			'cat' => $cat2,
            'ignore_sticky_posts'   => true    
        );
        
        $qry = new WP_Query( $args );
    
        if( $qry->have_posts() ){
            while( $qry->have_posts() ){ 
                $qry->the_post(); ?>
				
<br>
                    <div class="col-1">
                        <article class="post">
                        <?php if( has_post_thumbnail() ){ ?>

                        <?php } ?>
                        <div class="image-wrapper">
                            <div class="news-text">
                                <header class="entry-header">
								
								<div class="entry-meta">
								  <h2 style="margin: 0.5em 0px 0em;"><a href="<?php echo esc_html(get_category_link($cat2)); ?>">Latest <?php $categories = get_the_category(); echo esc_html( end($categories)->name ); ?></a></h2>
									</div>
								
                                  <?php if ($cat2_link == 1) { ?>
								  	<span class="posted-on" >Published on: <a href="<?php echo esc_html(get_category_link($cat2)); ?>"><?php echo esc_html( get_the_date( __( 'F jS, Y' , 'education-zone' ) ) ); ?></a></span>
								  	<h3 class="entry-title"><a href="<?php  echo esc_html(get_category_link($cat2)); ?>"><?php the_title(); ?></a></h3> 
								  <?php } else { ?> 
								  	<span class="posted-on" >Published on: <a href="<?php echo the_permalink(); ?>"><?php echo esc_html( get_the_date( __( 'F jS, Y' , 'education-zone' ) ) ); ?></a></span>
									  <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
								  <?php } ?>
									
								
                                </header>
                                
                                <div class="news-entry-content">
                                <?php the_excerpt(); ?>
                                </div>
                            
                                <div class="news-entry-footer">
								  <?php if ($cat2_link == 1) { ?>
                                	<a href="<?php echo esc_html(get_category_link($cat2)); ?>" class="read-news"><?php echo esc_html__( 'Read The Latest', 'education-zone' ); ?></a>
								  <?php } else { ?> 
                                	<a href="<?php the_permalink(); ?>" class="read-news"><?php echo esc_html__( 'Read The Latest', 'education-zone' ); ?></a>
								  <?php } ?>                                </div>
                            </div>
                        </div>
                        </article>
                    </div>
				


            <?php 
            }       
            wp_reset_postdata(); 
        }

}

?>
				  
				  </div>