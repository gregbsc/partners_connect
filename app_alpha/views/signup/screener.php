<div id="container">

	<div class="row mtop40">

		<div class="container mtop40">

			<h4>Welcome to the PARTNERS CONNECT Survey.</h4>

			<p>  The purpose of these questions is to understand how you are currently doing and what your relationship is like. Your answers to this survey will be kept private. That means we will not share your responses with anyone outside the research team.</p>
			
			<h4 class="h4">This first section asks you some general health questions about yourself.</h4>		

				<p>Thank you for your interest in Partners Connect, an online program designed to help partners and spouses take care of their own needs and communicate to their loved ones in a positive manner. This project focuses on providing support to concerned military partners and spouses who are experiencing difficulty as a result of their service member’s alcohol use. </p>

				<p>Many others have been in these types of relationships. Research shows that family members can successfully learn skills to improve their mood, communicate effectively, help reduce their loved one’s drinking, and encourage them to seek help. This study hopes to develop an online program to accomplish these goals. </p>

				<h4 class="h4 mtop30">Important things to know about this study:</h4>
				<p>This project is confidential and the information you provide will not be shared with the military, your partner, or other individuals outside of the research project staff involved with this study.
				This project is voluntary and it is up to you to decide if you would like to participate.  You may stop being involved in the project at any time.
				If you are eligible to participate, you will be asked to complete one online survey (30 minutes), four online feedback forms (5 minutes each), and a brief phone interview about the Partners Connect program.
				This program is being evaluated by the RAND Corporation, a non-profit research and analysis organization, with funding support from the National Institutes of Health (R34 AA023123-01).
				If this study is right for you and you complete all components of the study, you will earn up to a total of $95.</p>

				<p>Before we go into detail about the program, we must first make sure this project is a good fit for you. Depending on your answers, and if you are interested in participating, we will ask for your name and contact information at the bottom of this form. Your responses are strictly confidential.</p>
				
				<!-- <form action="<?php // echo base_url(); ?>screen" method="POST"> -->

				<?php echo form_open('screen'); ?>
					
					<h4 class="h4 mtop30">1. Is your partner currently serving in the military, including the National Guard or the Reserve?</h4>
					<input type="radio" name="screen_1" value="yes" class="mright10"> Yes <br>  <input type="radio" name="screen_1" value="no" class="mright10"> No <br>

					<h4 class="h4 mtop30">2. Are you currently serving in the military, including the National Guard or the Reserve?</h4>
					<input type="radio" name="screen_2" value="yes" class="mright10"> Yes <br>  <input type="radio" name="screen_2" value="no" class="mright10"> No <br>

					<h4 class="h4 mtop30">3. Are you currently living with your partner?</h4>
					<input type="radio" name="screen_3" value="yes" class="mright10"> Yes <br>  <input type="radio" name="screen_3" value="no" class="mright10"> No <br>

					<h4 class="h4 mtop30">4. Have you had contact with your partner at least 40% of the time in the past 90 days? </br> <span class="thin"> (For example, most of the evenings or most of the days in a given week.)</span> </h4>
					<input type="radio" name="screen_4" value="yes" class="mright10"> Yes <br>  <input type="radio" name="screen_4" value="no" class="mright10"> No <br>

					<h4 class="h4 mtop30">5. Are you in a romantic relationship with your partner?</h4>
					<input type="radio" name="screen_5" value="yes" class="mright10"> Yes <br>  <input type="radio" name="screen_5" value="no" class="mright10"> No <br>

					<h4 class="h4 mtop30">6. Do you have a computer that you can use in a private area?</h4>
					<input type="radio" name="screen_6" value="yes" class="mright10"> Yes <br>  <input type="radio" name="screen_6" value="no" class="mright10"> No <br>

					<h4 class="h4 mtop30">7. Are you and your partner at least 18 years of age?</h4>
					<input type="radio" name="screen_7" value="yes" class="mright10"> Yes <br>  <input type="radio" name="screen_7" value="no" class="mright10"> No <br>
					
					<p class="hidden" id="">SCREENS NEGATIVE: If “No” to any of the following screener questions: 1, 3, 4-7 OR a “Yes” to question 2,  (CP does not qualify for Stage 2 screening):
					We are sorry, but based on your responses this research study does not appear to be a good fit for you at this time.  Thanks for completing the questions.  If you would like some information about other places you can go to for help, please click on the link below.  If you’d like, you may also talk with our project coordinator, Stefanie.  Her phone number is 1-800-447-2631 x8224.</p>

					
					<p class="hidden" id="">SCREENS POSITIVE: If “Yes” to all of the following screener questions: 1, 3, 4-7 AND a “No” to question 2, (CP qualifies for Stage 2 screening): </p>
					

					<input type="submit" value="submit" class="mtop40 mbot20" />
					
			</form>


		</div>

	</div>

</div>