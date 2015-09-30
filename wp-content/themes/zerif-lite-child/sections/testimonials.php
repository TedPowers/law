<?php


			echo '<section class="testimonial" id="testimonials">';


				echo '<div class="container">';


					echo '<div class="section-header">';


						$zerif_testimonials_title = get_theme_mod('zerif_testimonials_title',__('Testimonials','zerif-lite'));
						
						if( !empty($zerif_testimonials_title) ):
					
							echo '<h2 class="white-text">'.__($zerif_testimonials_title,'zerif-lite').'</h2>';
							
						endif;	


						$zerif_testimonials_subtitle = get_theme_mod('zerif_testimonials_subtitle');


						if( !empty($zerif_testimonials_subtitle) ):


							echo '<h6 class="white-text">'.__($zerif_testimonials_subtitle,'zerif-lite').'</h6>';


						endif;


					echo '</div>';


					echo '<div class="row" id="test_row" data-scrollreveal="enter right after 0s over 1s">';


						echo '<div class="col-md-12" id="test_col">';


							echo '<div id="client-feedbacks" class="owl-carousel owl-theme">';

									if(is_active_sidebar( 'sidebar-testimonials' )):


										dynamic_sidebar( 'sidebar-testimonials' );
									else:

										the_widget( 'zerif_testimonial_widget','title=John Dow&text=Add a testimonial widget in the "Widgets: Testimonials section" in Customizer&image_uri='.get_stylesheet_directory_uri().'/images/product-bg.png' );
										the_widget( 'zerif_testimonial_widget','title=John Dow&text=Add a testimonial widget in the "Widgets: Testimonials section" in Customizer&image_uri='.get_stylesheet_directory_uri().'/images/product-bg.png' );
										the_widget( 'zerif_testimonial_widget','title=John Dow&text=Add a testimonial widget in the "Widgets: Testimonials section" in Customizer&image_uri='.get_stylesheet_directory_uri().'/images/product-bg.png' );
										the_widget( 'zerif_testimonial_widget','title=John Dow&text=Add a testimonial widget in the "Widgets: Testimonials section" in Customizer&image_uri='.get_stylesheet_directory_uri().'/images/product-bg.png' );
										the_widget( 'zerif_testimonial_widget','title=John Dow&text=Add a testimonial widget in the "Widgets: Testimonials section" in Customizer&image_uri='.get_stylesheet_directory_uri().'/images/product-bg.png' );

									endif;

							echo '</div>';


						echo '</div>';


					echo '</div>';


				echo '</div>';
echo  '<span id="left" class="glyphicon" aria-hidden="true"><img src="/wp-content/themes/zerif-lite/images/left-arrow.png"></span>';
echo  '<span id="right" class="glyphicon" aria-hidden="true"><img src="/wp-content/themes/zerif-lite/images/right-arrow.png"></span>';

			echo '</section>';


?>


  