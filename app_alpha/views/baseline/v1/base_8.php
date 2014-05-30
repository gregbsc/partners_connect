<!-- javascript that controls functionality for baseline study is in the javascript file ('baseline.js') -->

<div class="row">

	<div class="container">

		<?php echo form_open($form_direction); ?>
							
		<h4 class="h4 mtop40 tcenter">Baseline Survey</h4>
		
		<?php echo ( isset( $percentDone ) ? form_progress($percentDone) : "" ); ?>

		<h4 class="h4">FINAL QUESTIONS ABOUT YOU</h4>
		
		<p>This section asks you some general background questions about yourself.</p>

		<p class="mtop40 question-title"> 30. What is your gender? </p>

		<p class="radio-buttons">
			<input type="radio" name="GEN" value="1" /> Male </br>
			<input type="radio" name="GEN" value="0" /> Female </br>
			<input type="radio" name="GEN" value="2" /> Prefer not to answer </br>
		</p>

		<p class="mtop40 question-title"> 31. What is your age? (In years) </p>
		<input type="number" name="AGE" min="16" /> </br>

		<p class="mtop40 question-title"> 32. Are you Hispanic/Latino(a) or of Spanish origin?</p>
		<input type="radio" name="HISP" value="1" /> Yes </br>
		<input type="radio" name="HISP" value="0" /> No </br>

		<p class="mtop40 question-title">33. Which race/group best describes you? (Please mark all that apply.) </p>
		
		<p class="left-checkbox">

			<input type="checkbox" name="RACE[]" value="1"/> American Indian or Alaska Native </br>
			<input type="checkbox" name="RACE[]" value="2"/> Asian (for example, Asian Indian, Chinese, Filipino, Japanese, Korean, Vietnamese) </br>
			<input type="checkbox" name="RACE[]" value="3"/> Black or African American </br>
			<input type="checkbox" name="RACE[]" value="4"/> Native Hawaiian or other Pacific Islander (for example, Samoan, Guamanian, or Chamorro) </br>
			<input type="checkbox" name="RACE[]" value="5"/> White </br>
			<input type="checkbox" name="RACE[]" value="6"/> Some other race (please specify): <input type="text" name="RACE-TEXT"/> </br>

		</p>

		<p class="mtop40 question-title">34. What is the highest grade or year of school that you have finished?</p>

		<p class="left-checkbox">

			<input type="radio" name="EDUC" value="0"/> Less than high school diploma </br>
			<input type="radio" name="EDUC" value="1"/> High school graduate or diploma </br>
			<input type="radio" name="EDUC" value="2"/> Some college but no degree </br>
			<input type="radio" name="EDUC" value="3"/> Technical or vocational school </br>
			<input type="radio" name="EDUC" value="4"/> Bachelor’s degree </br>
			<input type="radio" name="EDUC" value="5"/> Master’s, professional, or doctorate degree </br>

		</p>

		<p class="mtop40 question-title">35. What is your current relationship status?</p>

		<p class="radio-buttons">

			<input type="radio" name="REL1" value="1" onclick="$('#married').show()"/> Married </br>
			<input type="radio" name="REL1" value="2" onclick="$('#living-partner').hide()" /> Living With partner </br>
			<input type="radio" name="REL1" value="3" onclick="$('#living-partner').hide()" /> Widowed </br>
			<input type="radio" name="REL1" value="4" onclick="$('#living-partner').hide()" /> Divorced </br>
			<input type="radio" name="REL1" value="5" onclick="$('#living-partner').hide()" /> Separated </br>
			<input type="radio" name="REL1" value="6" onclick="$('#living-partner').hide()" /> Never married/single </br>

		</p>

			<!-- [If Question 34 = “Married,” then ask:] </br> -->

			<div class="cover" id="married">
				<p class="mtop40 question-title"> 35a. How many years have you been married to your spouse? </p>
				<input type="number" name="REL2" /> years </br>
			</div>

			<!-- If Question 34 = “Living with partner,” then ask:] </br> -->

			<div class="cover" id="living-partner">
				<p class="mtop40">35b. How many years have you been living with your partner?</p>
				<input type="number" name="REL3" /> years </br>
			</div>

			<p class="mtop40 question-title">36. Do you have any children, including step-children and/or foster children, who live with you at least half of the time?</p>
				
			<p class="radio-buttons">
				<input type="radio" name="KID1" value="1" onclick="$('#35a').show()" /> Yes </br>
				<input type="radio" name="KID1" value="0" /> No </br>
			</p>

			<div class="cover" id="35a">

				<p class="mtop40 question-title"> 35a. How old are the children who live with you?  Mark the number of children you have in each category.</p>

				<p class="left-checkbox">
					<input type="checkbox" name="KID2[]" value="1"/> 0-5 </br>
					<input type="checkbox" name="KID2[]" value="2"/> 6-10 </br>
					<input type="checkbox" name="KID2[]" value="3"/> 11-15 </br>
					<input type="checkbox" name="KID2[]" value="4"/> 16-20 </br>
					<input type="checkbox" name="KID2[]" value="5"/> 21+ </br>
				</p>

			</div>

			<p class="mtop40 question-title">36. Which U.S. state or territory do you currently live in? </p>
			<?php echo state_list_dropwdown( 'STATE' ); ?> </br>


			<p class="mtop40 question-title">37. Are you a U.S. veteran? </p>

				<p class="radio-buttons">
					<input type="radio" name="VET1" value="0" /> No</br>
					<input type="radio" name="VET1" value="1" onclick="$('#37subs').show()"/> Yes, I am a discharged veteran </br>
					<input type="radio" name="VET1" value="2" onclick="$('#37subs').show()"/> Yes, I am a retired veteran </br>
				</p>

			<!-- [If Question 37 = yes (discharged or retired) then ask:]</br> -->

			<div class="cover" id="37subs">

				<p class="mtop40 question-title">37a. Which branch of military service were you a part of?</p>

				<p class="radio-buttons">
					<input type="radio" name="VET2" value="1" /> Army </br>
					<input type="radio" name="VET2" value="2" /> Army Reserve </br>
					<input type="radio" name="VET2" value="3" /> Army National Guard </br>
					<input type="radio" name="VET2" value="4" /> Air Force </br>
					<input type="radio" name="VET2" value="5" /> Air Force Reserve </br>
					<input type="radio" name="VET2" value="6" /> Air National Guard </br>
					<input type="radio" name="VET2" value="7" /> Coast Guard </br>
					<input type="radio" name="VET2" value="8" /> Coast Guard Reserve </br>
					<input type="radio" name="VET2" value="9" /> Marine Corps </br>
					<input type="radio" name="VET2" value="10" /> Marine Corps Reserve </br>
					<input type="radio" name="VET2" value="11" /> Navy </br>
					<input type="radio" name="VET2" value="12" /> Navy Reserve </br>
				</p>

				<p class="mtop40 question-title">37b. How many years did you serve in the military?</p>
					
					<input type="number" name="VET3" /> years </br>

				<p class="mtop40 question-title">37c. What was your current pay grade at discharge?</p>

				<p class="radio-buttons">
					<input type="radio" name="VET4" value="1" /> E-1 </br>
					<input type="radio" name="VET4" value="2"/> E-2</br>
					<input type="radio" name="VET4" value="3"/> E-3</br>
					<input type="radio" name="VET4" value="4"/> E-4</br>
					<input type="radio" name="VET4" value="5"/> E-5</br>
					<input type="radio" name="VET4" value="6"/> E-6</br>
					<input type="radio" name="VET4" value="7"/> E-7</br>
					<input type="radio" name="VET4" value="8"/> E-8</br>
					<input type="radio" name="VET4" value="9"/> E-9</br>
					<input type="radio" name="VET4" value="10"/> W-1</br>
					<input type="radio" name="VET4" value="11"/> W-2</br>
					<input type="radio" name="VET4" value="12"/> W-3</br>
					<input type="radio" name="VET4" value="13"/> W-4</br>
					<input type="radio" name="VET4" value="14"/> W-5</br>
					<input type="radio" name="VET4" value="15"/> O-1</br>
					<input type="radio" name="VET4" value="16"/> O-2</br>
					<input type="radio" name="VET4" value="17"/> O-3</br>
					<input type="radio" name="VET4" value="18"/> O-4</br>
					<input type="radio" name="VET4" value="19"/> O-5</br>
					<input type="radio" name="VET4" value="20"/> O-6 or above</br> 
				</p>

			</div>
			<!-- end of hidden by default for sub 37 -->

			<input type="hidden" name="section" value="8" />
			<input type="submit" value="submit" class="mtop40 mbot40" />

		</form>

	</div>

</div>

<script src="/assets/js/baseline.js" type="text/javascript" />