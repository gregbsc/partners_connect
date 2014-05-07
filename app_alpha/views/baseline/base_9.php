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

			[If Question 35 = “Yes,” then ask:]</br>
			
			<p class="mtop40"> 35a. How old are the children who live with you?  Mark the number of children you have in each category.</p>

			<p class="left-checkbox">
				<input type="checkbox" name="KID2" value="1"/> 0-5 </br>
				<input type="checkbox" name="KID2" value="2"/> 6-10 </br>
				<input type="checkbox" name="KID2" value="3"/> 11-15 </br>
				<input type="checkbox" name="KID2" value="4"/> 16-20 </br>
				<input type="checkbox" name="KID2" value="5"/> 21+ </br>
			</p>

			<p class="mtop40">36. Which U.S. state or territory do you currently live in? [STATE]</p>
			[Drop down of all 50 states and territories] [code 1-50 alphabetically]</br>

			<p class="mtop40">37. Are you a U.S. veteran? [VET1-VET4]</p>
			<input type="radio" name="VET2" value="0" required /> </br>
			<input type="radio" name="VET2" value="1" /> Yes, I am a discharged veteran </br>
			<input type="radio" name="VET2" value="2" /> Yes, I am a retired veteran </br>

			[If Question 37 = yes (discharged or retired) then ask:]</br>

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
			______ years</br>

			<p class="mtop40">37c. What was your current pay grade at discharge?</p>
			E-1 [code 1-20]</br>
			E-2</br>
			E-3</br>
			E-4</br>
			E-5</br>
			E-6</br>
			E-7</br>
			E-8</br>
			E-9</br>
			W-1</br>
			W-2</br>
			W-3</br>
			W-4</br>
			W-5</br>
			O-1</br>
			O-2</br>
			O-3</br>
			O-4</br>
			O-5</br>
			O-6 or above</br> 


			<h4 class="h4">FINAL QUESTIONS ABOUT YOUR PARTNER [PMIL1-PMIL4]</h4>
			<p>Now we would like to ask you some general questions about your partner.  When we say “partner” we are referring to your spouse or partner with whom you live with.</p>

			<p class="mtop40">38. Which branch of military service is your partner a part of? </p>
				Army [code 1-12]</br>
				Army Reserve</br>
				Army National Guard</br>
				Air Force</br>
				Air Force Reserve</br>
				Air National Guard</br>
				Coast Guard</br>
				Coast Guard Reserve</br>
				Marine Corps</br>
				Marine Corps Reserve</br>
				Navy</br>
				Navy Reserve</br>

			<p class="mtop40">39. How many years has your partner been in the military? </p>
				______ years </br>

			<p class="mtop40">40. What is your partner’s current pay grade? </p>
				E-1 [code 1-20]</br>
				E-2</br>
				E-3</br>
				E-4</br>
				E-5</br>
				E-6</br>
				E-7</br>
				E-8</br>
				E-9</br>
				W-1</br>
				W-2</br>
				W-3</br>
				W-4</br>
				W-5</br>
				O-1</br>
				O-2</br>
				O-3</br>
				O-4</br>
				O-5</br>
				O-6 or above</br> 

			<p class="mtop40">41. Which of the following best describes your partner’s status with respect to deployment? </p>
				Not deployed and has no deployment currently scheduled [0]</br>
				Not deployed but preparing for a scheduled deployment [1]</br>
				Currently deployed [2]</br>
				Home on block leave (R&R) but will return to deployment soon [3]</br>
				Returned from a deployment within the last four months [4]</br>
				Returned from a deployment within the last year [5]</br>

			<p class="mtop40">42. What is your partner’s gender? [PGEN]</p>
				Male [1]</br>
				Female [0]</br>
				Prefer not to answer [2]</br>

			<p class="mtop40">43. What is your partner’s age? [PAGE]</p>
				______ years old</br>

			<p class="mtop40">44. Is your partner Hispanic/Latino(a) or of Spanish origin? [PHISP]</p>
				Yes [1]</br>
				No [0]</br>

			<p class="mtop40">45. Which race/group best describes your partner? (Please mark all that apply.) [PRACE]</p>
				American Indian or Alaska Native [1]</br>
				Asian (for example, Asian Indian, Chinese, Filipino, Japanese, Korean, Vietnamese) [2]</br>
				Black or African American [3]</br>
				Native Hawaiian or other Pacific Islander (for example, Samoan, Guamanian, or Chamorro) [4]</br>
				White [5]</br>
				Some other race (please specify): __________________________ [6]</br>

			<p class="mtop40">46. What is the highest grade or year of school that your partner has finished? [PEDUC]</p>
				Less than high school diploma [0]</br>
				High school graduate or diploma [1]</br>
				Some college but no degree [2]</br>
				Technical or vocational school [3]</br>
				Bachelor’s degree [4]</br>
				Master’s, professional, or doctorate degree [5]</br>

		<input type="hidden" name="section" value="9" />
		<input type="submit" value="submit" class="mtop40 mbot40" />

		</form>

	</div>

</div>

<script src="/assets/js/baseline.js" type="text/javascript" />