<?php


	echo '<div class="header-content-wrap">';

		echo '<div class="container">';
	
		echo '<div class="row">';
			echo '<div class="col-sm-6">';
				echo '<div class="main-header-box">';
					echo '<h1>Criminal Defense Attorney</h1>';
					echo '<button id="header-button"><strong>FREE</strong> Consultation Now</button>';
				echo '</div>';
		echo '</div>';

		$zerif_bigtitle_title = get_theme_mod('zerif_bigtitle_title',__('To add a title here please go to Customizer','zerif-lite'));


		if( !empty($zerif_bigtitle_title) ):


			echo '<h1 class="intro-text">'.__($zerif_bigtitle_title,'zerif-lite').'</h1>';


		endif;





		$zerif_bigtitle_redbutton_label = get_theme_mod('zerif_bigtitle_redbutton_label',__('One button','zerif-lite'));


		$zerif_bigtitle_redbutton_url = get_theme_mod('zerif_bigtitle_redbutton_url','#');





		$zerif_bigtitle_greenbutton_label = get_theme_mod('zerif_bigtitle_greenbutton_label',__('Another button','zerif-lite'));


		$zerif_bigtitle_greenbutton_url = get_theme_mod('zerif_bigtitle_greenbutton_url','#');





		if( (!empty($zerif_bigtitle_redbutton_label) && !empty($zerif_bigtitle_redbutton_url)) ||


		(!empty($zerif_bigtitle_greenbutton_label) && !empty($zerif_bigtitle_greenbutton_url))):


			echo '<div class="buttons">';


				if ( !empty($zerif_bigtitle_redbutton_label) && !empty($zerif_bigtitle_redbutton_url) ):


					echo '<a href="'.$zerif_bigtitle_redbutton_url.'" class="btn btn-primary custom-button red-btn">'.__($zerif_bigtitle_redbutton_label,'zerif-lite').'</a>';


				endif;


				if ( !empty($zerif_bigtitle_greenbutton_label) && !empty($zerif_bigtitle_greenbutton_url) ):


					echo '<a href="'.$zerif_bigtitle_greenbutton_url.'" class="btn btn-primary custom-button green-btn">'.__($zerif_bigtitle_greenbutton_label,'zerif-lite').'</a>';


				endif;


			echo '</div>';


		endif;





		echo '</div>';
		
	echo '</div><!-- .header-content-wrap -->';
	
		echo '<div id="orange-bar"><img src="/wp-content/uploads/2015/09/dorbandt-portrait1.jpg"><p>Call 512.407.9700</p></div>';

	
		echo '<div class="clear"></div>';


?>