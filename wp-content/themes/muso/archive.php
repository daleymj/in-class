<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Muso
 */

get_header(); ?>
	<div class="container">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
            	<div class="row">
                	<div class="col-md-12">
                        <header>
                            <?php
                                the_archive_title( '<h1 class="page-title">', '</h1>' );
                                the_archive_description( '<div class="archive-description">', '</div>' );
                            ?>
                        </header>
                    </div>
				</div>
                <div class="row">
                	<div id="manson">
    
						<?php
                        if ( have_posts() ) : ?>
                            
                            <?php
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                
                                /*
                                 * Include the Post-Format-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
                                get_template_part( 'template-parts/content', get_post_format() );
                
                            endwhile;
                
                        else :
                
                            get_template_part( 'template-parts/content', 'none' );
                
                        endif; ?>
    			
                	</div>
                </div>
                 <?php 
					the_posts_pagination( array(
						'mid_size' => 2,
						'prev_text' => '<span class="fa fa-chevron-left"></span>',
						'next_text' => '<span class="fa fa-chevron-right"></span>'
					) ); 	
				?>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div>

<?php
get_footer();
