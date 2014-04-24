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