<?php

/**

 * The template for displaying the footer.
*

 * Contains the closing of the #content div and all content after

 *

 * @package zerif

 */

?>



<footer id="footer">

<div class="container-fluid">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3442.9071710237404!2d-97.74942799999994!3d30.35358800000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644b50b515f8e95%3A0x28d3904da5491541!2sThe+Law+Office+of+Chris+Dorbandt!5e0!3m2!1sen!2sus!4v1432578770420" width="100%" height="400" frameborder="0" style="border:0"></iframe>
	
	<div class="row">	

	<?php
		$footer_sections = 0;
		$zerif_address = get_theme_mod('zerif_address','24B, Fainari Street, Bucharest, Romania');
		$zerif_address_icon = get_theme_mod('zerif_address_icon',get_template_directory_uri().'/images/map25-redish.png');
		
		$zerif_email = get_theme_mod('zerif_email','support@codeinwp.com');
		$zerif_email_icon = get_theme_mod('zerif_email_icon',get_template_directory_uri().'/images/envelope4-green.png');
		
		$zerif_phone = get_theme_mod('zerif_phone','Phone number');
		$zerif_phone_icon = get_theme_mod('zerif_phone_icon',get_template_directory_uri().'/images/telephone65-blue.png');

		$zerif_socials_facebook = get_theme_mod('zerif_socials_facebook','#');
		$zerif_socials_twitter = get_theme_mod('zerif_socials_twitter','#');
		$zerif_socials_linkedin = get_theme_mod('zerif_socials_linkedin','#');
		$zerif_socials_behance = get_theme_mod('zerif_socials_behance','#');
		$zerif_socials_dribbble = get_theme_mod('zerif_socials_dribbble','#');
			
		$zerif_copyright = get_theme_mod('zerif_copyright');

		if(!empty($zerif_address) || !empty($zerif_address_icon)):
			$footer_sections++;
		endif;
		
		if(!empty($zerif_email) || !empty($zerif_email_icon)):
			$footer_sections++;
		endif;
		
		if(!empty($zerif_phone) || !empty($zerif_phone_icon)):
			$footer_sections++;
		endif;
		if(!empty($zerif_socials_facebook) || !empty($zerif_socials_twitter) || !empty($zerif_socials_linkedin) || !empty($zerif_socials_behance) || !empty($zerif_socials_dribbble) || 
		!empty($zerif_copyright)):
			$footer_sections++;
		endif;
		
		if( $footer_sections == 1 ):
			$footer_class = 'col-md-12';
		elseif( $footer_sections == 2 ):
			$footer_class = 'col-md-6';
		elseif( $footer_sections == 3 ):
			$footer_class = 'col-md-4';
		elseif( $footer_sections == 4 ):
			$footer_class = 'col-md-3';
		else:
			$footer_class = 'col-md-3';
		endif;
		
		/* COMPANY ADDRESS */
		if( !empty($zerif_address) ):
			echo '<div class="'.$footer_class.' company-details">';
				echo '<div class="icon-top red-text">';
					if( !empty($zerif_address_icon) ) echo '<img src="'.esc_url(__($zerif_address_icon,'zerif-lite')).'">';
				echo '</div>';
				echo $zerif_address;
			echo '</div>';
		endif;
		
		/* COMPANY EMAIL */
		
		
		if( !empty($zerif_email) ):
			echo '<div class="'.$footer_class.' company-details">';
				echo '<div class="icon-top green-text">';
					
					if( !empty($zerif_email_icon) ) echo '<img src="'.esc_url(__($zerif_email_icon,'zerif-lite')).'">';
				echo '</div>';
				echo $zerif_email;
			echo '</div>';
		endif;
		
		/* COMPANY PHONE NUMBER */
		
		
		if( !empty($zerif_phone) ):
			echo '<div class="'.$footer_class.' company-details">';
				echo '<div class="icon-top blue-text">';
					if( !empty($zerif_phone_icon) ) echo '<img src="'.esc_url(__($zerif_phone_icon,'zerif-lite')).'">';
				echo '</div>';
				echo $zerif_phone;
			echo '</div>';
		endif;
		
		if( !empty($zerif_socials_facebook) || !empty($zerif_socials_twitter) || !empty($zerif_socials_linkedin) || !empty($zerif_socials_behance) || !empty($zerif_socials_dribbble) || 
		!empty($zerif_copyright)):
		
					echo '<div class="'.$footer_class.' copyright">';
					if(!empty($zerif_socials_facebook) || !empty($zerif_socials_twitter) || !empty($zerif_socials_linkedin) || !empty($zerif_socials_behance) || !empty($zerif_socials_dribbble)):
						echo '<ul class="social">';
						
						/* facebook */
						if( !empty($zerif_socials_facebook) ):
							echo '<li><a target="_blank" href="'.esc_url(__($zerif_socials_facebook,'zerif-lite')).'"><i class="fa fa-facebook"></i></a></li>';
						endif;
						/* twitter */
						if( !empty($zerif_socials_twitter) ):
							echo '<li><a target="_blank" href="'.esc_url(__($zerif_socials_twitter,'zerif-lite')).'"><i class="fa fa-twitter"></i></a></li>';
						endif;
						/* linkedin */
						if( !empty($zerif_socials_linkedin) ):
							echo '<li><a target="_blank" href="'.esc_url(__($zerif_socials_linkedin,'zerif-lite')).'"><i class="fa fa-linkedin"></i></a></li>';
						endif;
						/* behance */
						if( !empty($zerif_socials_behance) ):
							echo '<li><a target="_blank" href="'.esc_url(__($zerif_socials_behance,'zerif-lite')).'"><i class="fa fa-behance"></i></a></li>';
						endif;
						/* dribbble */
						if( !empty($zerif_socials_dribbble) ):
							echo '<li><a target="_blank" href="'.esc_url(__($zerif_socials_dribbble,'zerif-lite')).'"><i class="fa fa-dribbble"></i></a></li>';
						endif;
						echo '</ul>';
					endif;	
			
			
					if( !empty($zerif_copyright) ):
						echo esc_attr($zerif_copyright);
					endif;
					
			
			
		endif;
	?>
	</div> <!-- Row -->
</div> <!-- / END CONTAINER -->

</footer> <!-- / END FOOOTER  -->



<?php wp_footer(); ?>



</body>

</html>
