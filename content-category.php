<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Education_Zone
 */

	$metadata = get_theme_mod('education_zone_metadata');

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin-top:50px;">
    <?php 
        if( has_post_thumbnail() ){
		  echo ( is_single() ) ? '<div class="post-thumbnail">' : '<a href="' . esc_url( get_the_permalink() ) . '" class="post-thumbnail col-1 category-post" style="	width: 25%;
	float: left;
	padding: 0 15px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;">';
            ( is_active_sidebar( 'right-sidebar' ) ) ? the_post_thumbnail( 'education-zone-image' ) : the_post_thumbnail( 'education-zone-search-result' );
            echo ( is_single() ) ? '</div>' : '</a>' ; 
        }
    ?>
    
	<header class="entry-header col-2 category-post" style="display:inline-block;	width: 75%;
	float: left;
	padding: 0 15px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;">
		<?php
			if ( is_single() ) {
			  the_title( '<h1 class="entry-title" style="display:inline-block;">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title" style="display:inline-block;"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() && $metadata == FALSE ) : ?>
		<div class="entry-meta">
			<?php education_zone_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->
                           <span class="posted-on" style="padding: 0 15px;">Published on: <a href="<?php the_permalink(); ?>"><?php echo esc_html( get_the_date( __( 'F jS, Y' , 'education-zone' ) ) ); ?></a></span>
           
	  <div class="entry-content" style="width: 75%;
	float: left;
	padding: 0 15px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;">
		<?php
			if( is_single() ){
                the_content( sprintf(
    				/* translators: %s: Name of current post. */
    				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'education-zone' ), array( 'span' => array( 'class' => array() ) ) ),
    				the_title( '<span class="screen-reader-text">"', '"</span>', false )
    			) );
    			
    			wp_link_pages( array(
						'before' => '<div class="page-links" >' . esc_html__( 'Pages:', 'education-zone' ),
						'after'  => '</div>',
					) );
            }else{
                if( false === get_post_format() ){
                    the_excerpt();
                }else{
                    the_content( sprintf(
        				/* translators: %s: Name of current post. */
        				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'education-zone' ), array( 'span' => array( 'class' => array() ) ) ),
        				the_title( '<span class="screen-reader-text">"', '"</span>', false )
        			) );

        			wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'education-zone' ),
						'after'  => '</div>',
					) );
                }
            }    	
		?>
	</div><!-- .entry-content -->

	<?php if( !is_single() ){ ?>
	    <footer class="entry-footer" style="	width: 75%;
	float: left;
	padding: 0 15px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;">
			<a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e( 'Read More', 'education-zone' ); ?></a>
  </footer><!-- .entry-footer -->
	    <?php }?>
</article><!-- #post-## -->
<br style="clear:left" />
<hr style="margin-top:50px;">
