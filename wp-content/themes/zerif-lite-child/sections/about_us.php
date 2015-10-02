<section class="about-us" id="aboutus">
	<div class="container-fluid" id="about-container">


		<!-- SECTION HEADER -->

		<div class="section-header">


			<!-- SECTION TITLE -->

			<?php 
			$zerif_aboutus_title = get_theme_mod('zerif_aboutus_title',__('About Us','zerif-lite'));
			
			if( !empty($zerif_aboutus_title) ):
				echo '<h2>'.__($zerif_aboutus_title,'zerif-lite').'</h2>';
			endif;
			?>

			<!-- SHORT DESCRIPTION ABOUT THE SECTION -->

			<?php


				$zerif_aboutus_subtitle = get_theme_mod('zerif_aboutus_subtitle',__('Add a subtitle in Customizer, "About us section"','zerif-lite'));


				if( !empty($zerif_aboutus_subtitle) ):


					echo '<h6>';


						echo __($zerif_aboutus_subtitle,'zerif-lite');


					echo '</h6>';


				endif;


			?>
		</div><!-- / END SECTION HEADER -->


		<!-- 3 COLUMNS OF ABOUT US-->


		<div class="row">
                    <div class="col-md-6" id="about-first">
						<h3 class="pgraph-header">About Us</h3>
                        <img id="chris_pic" src="/wp-content/uploads/2015/05/chris2.png" width="400px">
                        <p class="pgraph">
                            If you or someone you know has been accused of a criminal
                            offense, you need representation from an experienced
                            criminal defense attorney who is committed to protecting
                            your legal rights. <strong>What you don’t know about your legal
                            rights can hurt you!</strong> At Chris Dorbandt & Associates we
                            aggressively defend our clients to ensure that their rights
                            are protected at every stage of the process. You need and
                            deserve a highly skilled, experienced criminal defense
                            attorney on your side who can explain all aspects of your
                            case before crucial decisions must be made. We understand
                            that being arrested and charged with a crime can be very
                            stressful, and we will attempt to put you at ease by
                            explaining the proceedings and options. Without legal
                            representation, you may be pressured into making potentially
                            damaging statements to law enforcement officers and/or
                            others who can and often times will, testify against you.
                        </p>
                        <p class="pgraph">
                            <strong>Remember, in the United States you are presumed innocent until proven guilty
                            beyond a reasonable doubt.</strong> Pleading “guilty” or “no contest” to a criminal
                            charge will leave you with a criminal conviction and record for the remainder of
                            your life. A criminal conviction is a public record. How might an incident like
                            this impact your personal or professional life, especially if you’ve been
                            convicted of a felony or serious misdemeanor? <strong>Don’t wait to see what happens,
                            call us immediately!</strong>
                        </p>
                        <p class="pgraph">
                            I am a highly experienced criminal defense attorney located in Austin, Texas.
                        </p>
                </div>
                <div class="col-md-6" id="about-right">
		<div class="left-header-about">
		    <h3>You are Presumed Innocent Until Proven Guilty Beyond a Reasonable Doubt</h3>
		</div>
                    <iframe width="85%" height="315" src="https://www.youtube.com/embed/zyKTz7H0g6s" frameborder="0" allowfullscreen></iframe>
                    <div id="about-box">
                        <h4>If you have been charged with a crime in Texas, we can help you!</h4>
                        <p><a href="tel:512-407-9700">Call us today at (512) 407-9700.</a></p>
                    </div>
                </div>

	</div> <!-- / END 3 COLUMNS OF ABOUT US-->





	<!-- CLIENTS -->
	<?php
		if(is_active_sidebar( 'sidebar-aboutus' )):
			echo '<div class="our-clients">';
				echo '<h5><span class="section-footer-title">'.__('OUR HAPPY CLIENTS','zerif-lite').'</span></h5>';
			echo '</div>';

			echo '<div class="client-list">';
				echo '<div data-scrollreveal="enter right move 60px after 0.00s over 2.5s">';
				dynamic_sidebar( 'sidebar-aboutus' );
				echo '</div>';
			echo '</div> ';
		endif;
	?>


</div> <!-- / END CONTAINER -->


</section> <!-- END ABOUT US SECTION -->
