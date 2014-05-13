<!-- javascript that controls functionality for baseline study is in the javascript file ('baseline.js') -->

<div class="row">

	<div class="container">

		<?php echo form_open($form_direction); ?>

		<h4 class="h4 mtop40 tcenter">Baseline Survey</h4>

		<?php echo ( isset( $percentDone ) ? $percentDone : "" ); ?>

			<p class="mtop40">35. Do you have any children, including step-children and/or foster children, who live with you at least half of the time? [KID1-KID2]</p>
			
			<p class="radio-buttons">
				<input type="radio" name="KID1" value="1" required /> Yes </br>
				<input type="radio" name="KID1" value="0" /> No </br>
			</p>

			[If Question 35 = “Yes,” then ask:] </br>
			<div class="hidden">

				<p class="mtop40"> 35a. How old are the children who live with you?  Mark the number of children you have in each category.</p>

				<p class="left-checkbox">
					<input type="checkbox" name="KID2[]" value="1"/> 0-5 </br>
					<input type="checkbox" name="KID2[]" value="2"/> 6-10 </br>
					<input type="checkbox" name="KID2[]" value="3"/> 11-15 </br>
					<input type="checkbox" name="KID2[]" value="4"/> 16-20 </br>
					<input type="checkbox" name="KID2[]" value="5"/> 21+ </br>
				</p>

			</div>

			<p class="mtop40">36. Which U.S. state or territory do you currently live in? [STATE]</p>
			<?php print_r(state_list_dropwdown( 'STATE' )); ?> [code 1-50 alphabetically]</br>


			<p class="mtop40">37. Are you a U.S. veteran? </p>

				<p class="radio-buttons">
					<input type="radio" name="VET1" value="0" required /> No</br>
					<input type="radio" name="VET1" value="1" /> Yes, I am a discharged veteran </br>
					<input type="radio" name="VET1" value="2" /> Yes, I am a retired veteran </br>
				</p>

			[If Question 37 = yes (discharged or retired) then ask:]</br>
			
			<!-- 37 sub questions depend on 37 answer  -->
			<div class="hidden"> 

				<p class="mtop40">37a. Which branch of military service were you a part of?</p>

				<p class="radio-buttons">
					<input type="radio" name="VET2" value="1" required /> Army </br>
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

				<p class="mtop40">37b. How many years did you serve in the military?</p>
					
					<input type="number" name="VET3" /> years </br>

				<p class="mtop40">37c. What was your current pay grade at discharge?</p>

				<p class="radio-buttons">
					<input type="radio" name="VET4" value="1" required /> E-1 </br>
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

			<h4 class="h4">FINAL QUESTIONS ABOUT YOUR PARTNER</h4>

			<p>Now we would like to ask you some general questions about your partner.  When we say “partner” we are referring to your spouse or partner with whom you live with.</p>

			<p class="mtop40">38. Which branch of military service is your partner a part of? </p>

			<p class="radio-buttons">
				<input type="radio" name="PMIL1" value="1" required/> Army </br>
				<input type="radio" name="PMIL1" value="2" /> Army Reserve</br>
				<input type="radio" name="PMIL1" value="3" /> Army National Guard</br>
				<input type="radio" name="PMIL1" value="4" /> Air Force</br>
				<input type="radio" name="PMIL1" value="5" /> Air Force Reserve</br>
				<input type="radio" name="PMIL1" value="6" /> Air National Guard</br>
				<input type="radio" name="PMIL1" value="7" /> Coast Guard</br>
				<input type="radio" name="PMIL1" value="8" /> Coast Guard Reserve</br>
				<input type="radio" name="PMIL1" value="9" /> Marine Corps</br>
				<input type="radio" name="PMIL1" value="10" /> Marine Corps Reserve</br>
				<input type="radio" name="PMIL1" value="11" /> Navy</br>
				<input type="radio" name="PMIL1" value="12" /> Navy Reserve</br>
			</p>

			<p class="mtop40">39. How many years has your partner been in the military? </p>
				
				<input type="number" name="PMIL2" required /> years </br>

			<p class="mtop40">40. What is your partner’s current pay grade? </p>

			<p class="radio-buttons">
				<input type="radio" name="PMIL3" value="1" required/> E-1 [code 1-20]</br>
				<input type="radio" name="PMIL3" value="2" /> E-2</br>
				<input type="radio" name="PMIL3" value="3" /> E-3</br>
				<input type="radio" name="PMIL3" value="4" /> E-4</br>
				<input type="radio" name="PMIL3" value="5" /> E-5</br>
				<input type="radio" name="PMIL3" value="6" /> E-6</br>
				<input type="radio" name="PMIL3" value="7" /> E-7</br>
				<input type="radio" name="PMIL3" value="8" /> E-8</br>
				<input type="radio" name="PMIL3" value="9" /> E-9</br>
				<input type="radio" name="PMIL3" value="10" /> W-1</br>
				<input type="radio" name="PMIL3" value="11" /> W-2</br>
				<input type="radio" name="PMIL3" value="12" /> W-3</br>
				<input type="radio" name="PMIL3" value="13" /> W-4</br>
				<input type="radio" name="PMIL3" value="14" /> W-5</br>
				<input type="radio" name="PMIL3" value="15" /> O-1</br>
				<input type="radio" name="PMIL3" value="16" /> O-2</br>
				<input type="radio" name="PMIL3" value="17" /> O-3</br>
				<input type="radio" name="PMIL3" value="18" /> O-4</br>
				<input type="radio" name="PMIL3" value="19" /> O-5</br>
				<input type="radio" name="PMIL3" value="20" /> O-6 or above</br> 
			</p>

			<p class="mtop40">41. Which of the following best describes your partner’s status with respect to deployment? </p>

			<p class="radio-buttons">
				<input type="radio" name="PMIL4" value="1" required/> Not deployed and has no deployment currently scheduled </br>
				<input type="radio" name="PMIL4" value="0"/> Not deployed but preparing for a scheduled deployment </br>
				<input type="radio" name="PMIL4" value="0"/> Currently deployed [2]</br>
				<input type="radio" name="PMIL4" value="0"/> Home on block leave (R&R) but will return to deployment soon </br>
				<input type="radio" name="PMIL4" value="0"/> Returned from a deployment within the last four months </br>
				<input type="radio" name="PMIL4" value="0"/> Returned from a deployment within the last year </br>
			</p>

			<p class="mtop40"> 42. What is your partner’s gender? </p>

			<p class="radio-buttons">
				<input type="radio" name="PGEN" value="1" required/> Male </br>
				<input type="radio" name="PGEN" value="0"/> Female </br>
				<input type="radio" name="PGEN" value="2"/> Prefer not to answer </br>
			</p>

			<p class="mtop40">43. What is your partner’s age? </p>

				<input type="number" name="PAGE" required /> years old</br>

			<p class="mtop40">44. Is your partner Hispanic/Latino(a) or of Spanish origin? </p>

			<p class="radio-buttons">
				<input type="radio" name="PHISP" value="1" required/> Yes </br>
				<input type="radio" name="PHISP" value="0" /> No </br>
			</p>

			<p class="mtop40">45. Which race/group best describes your partner? (Please mark all that apply.)</p>

				<input type="checkbox" name="PRACE" value="1"> American Indian or Alaska Native </br>
				<input type="checkbox" name="PRACE" value="2"> Asian (for example, Asian Indian, Chinese, Filipino, Japanese, Korean, Vietnamese) </br>
				<input type="checkbox" name="PRACE" value="3"> Black or African American </br>
				<input type="checkbox" name="PRACE" value="4"> Native Hawaiian or other Pacific Islander (for example, Samoan, Guamanian, or Chamorro) </br>
				<input type="checkbox" name="PRACE" value="5"> White </br>
				Some other race (please specify): <input type="text" name="PRACE-OTHER"> </br>

			<p class="mtop40">46. What is the highest grade or year of school that your partner has finished?</p>

			<p class="radio-buttons">
				<input type="radio" name="PDEUC" value="0" required/> Less than high school diploma</br>
				<input type="radio" name="PDEUC" value="1"/> High school graduate or diploma</br>
				<input type="radio" name="PDEUC" value="2"/> Some college but no degree</br>
				<input type="radio" name="PDEUC" value="3"/> Technical or vocational school</br>
				<input type="radio" name="PDEUC" value="4"/> Bachelor’s degree</br>
				<input type="radio" name="PDEUC" value="5"/> Master’s, professional, or doctorate degree</br>
			</p>

			<input type="hidden" name="section" value="9" />
			<input type="submit" value="submit" class="mtop40 mbot40" />

		</form>

	</div>

</div>

<script src="/assets/js/baseline.js" type="text/javascript" />