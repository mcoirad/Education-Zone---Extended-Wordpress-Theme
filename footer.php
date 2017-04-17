<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Education_Zone
 */

 if(!is_page_template('template-home.php')){?>
    </div>
    </div>
	</div><!-- #content -->
<?php } ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
	    <div class="container">
	      <?php if( is_active_sidebar( 'footer-one' ) || is_active_sidebar( 'footer-two' ) || is_active_sidebar( 'footer-three' ) ) { ?>
            <div class="widget-area">
				<div class="row">
					
                    <?php if( is_active_sidebar( 'footer-one') ) { ?>
                        <div class="col"><?php dynamic_sidebar( 'footer-one' ); ?></div>                        
                    <?php } ?> 
                    
                    <?php if( is_active_sidebar( 'footer-two') ) { ?>
                        <div class="col"><?php dynamic_sidebar( 'footer-two' ); ?></div>                        
                    <?php } ?> 
                    
                    <?php if( is_active_sidebar( 'footer-three') ) { ?>
                        <div class="col"><?php dynamic_sidebar( 'footer-three' ); ?></div>                        
                    <?php } ?>
                        				
				</div>
			</div>
            <?php } ?>
            
			<div class="site-info">
			   <?php if( get_theme_mod('education_zone_ed_social') ) do_action('education_zone_social'); ?> 
                    
                    
            <p><span><?php echo esc_html__('&copy; Copyright ','education-zone') . esc_html( date_i18n( __( ' Y ', 'education-zone' ) ) ); ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>.</span>
					<span class="by"><a href="<?php echo esc_url( 'https://raratheme.com/wordpress-themes/education-zone/' ); ?>" rel="designer"><?php esc_html_e( 'Education Zone ', 'education-zone' ); ?></a><?php printf( esc_html__( ' by Rara Theme. Powered by %s', 'education-zone' ), '<a href="'. esc_url( __( 'https://wordpress.org/', 'education-zone' ) ) .'">WordPress</a>' ); ?>.</span></p>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
