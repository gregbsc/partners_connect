<!-- javascript that controls functionality for baseline study is in the javascript file ('baseline.js') -->

<div class="row">

	<div class="container">

		<?php echo form_open($form_direction); ?>

		<h4 class="h4 mtop40 tcenter">Baseline Survey</h4>

		<?php echo ( isset( $percentDone ) ? $percentDone : "" ); ?>

		35. Do you have any children, including step-children and/or foster children, who live with you at least half of the time? [KID1-KID2]</br>
			
			Yes [1]</br>
			No [0]</br>

			[If Question 35 = “Yes,” then ask:]</br>

			35a. How old are the children who live with you?  Mark the number of children you have in each category.</br>
			0-5 _________ [1]</br>
			6-10 ________[2]</br>
			11-15________[3]</br>
			16-20 ________[4]</br>
			21+ _________[5]</br>

			36. Which U.S. state or territory do you currently live in? [STATE]</br>
			[Drop down of all 50 states and territories] [code 1-50 alphabetically]</br>

			37. Are you a U.S. veteran? [VET1-VET4]</br>
			No [0]</br>
			Yes, I am a discharged veteran [1]</br>
			Yes, I am a retired veteran [2]</br>

			[If Question 37 = yes (discharged or retired) then ask:]</br>
			37a. Which branch of military service were you a part of?</br>
			Army [1]</br>
			Army Reserve [2]</br>
			Army National Guard [3]</br>
			Air Force [4]</br>
			Air Force Reserve [5]</br>
			Air National Guard [6]</br>
			Coast Guard [7]</br>
			Coast Guard Reserve [8]</br>
			Marine Corps [9]</br>
			Marine Corps Reserve [10]</br>
			Navy [11]</br>
			Navy Reserve [12]</br>

			37b. How many years did you serve in the military?</br>
			______ years</br>

			37c. What was your current pay grade at discharge?</br>
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


			FINAL QUESTIONS ABOUT YOUR PARTNER [PMIL1-PMIL4]</br>
			Now we would like to ask you some general questions about your partner.  When we say “partner” we are referring to your spouse or partner with whom you live with.</br>

			38. Which branch of military service is your partner a part of? </br>
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

			39. How many years has your partner been in the military?</br>
			______ years </br>

			40. What is your partner’s current pay grade?</br>
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

			41. Which of the following best describes your partner’s status with respect to deployment? </br>
			Not deployed and has no deployment currently scheduled [0]</br>
			Not deployed but preparing for a scheduled deployment [1]</br>
			Currently deployed [2]</br>
			Home on block leave (R&R) but will return to deployment soon [3]</br>
			Returned from a deployment within the last four months [4]</br>
			Returned from a deployment within the last year [5]</br>

			42. What is your partner’s gender? [PGEN]</br>
			Male [1]</br>
			Female [0]</br>
			Prefer not to answer [2]</br>

			43. What is your partner’s age? [PAGE]</br>
			______ years old</br>

			44. Is your partner Hispanic/Latino(a) or of Spanish origin? [PHISP]</br>
			Yes [1]</br>
			No [0]</br>

			45. Which race/group best describes your partner? (Please mark all that apply.) [PRACE]</br>
			American Indian or Alaska Native [1]</br>
			Asian (for example, Asian Indian, Chinese, Filipino, Japanese, Korean, Vietnamese) [2]</br>
			Black or African American [3]</br>
			Native Hawaiian or other Pacific Islander (for example, Samoan, Guamanian, or Chamorro) [4]</br>
			White [5]</br>
			Some other race (please specify): __________________________ [6]</br>

			46. What is the highest grade or year of school that your partner has finished? [PEDUC]</br>
			Less than high school diploma [0]</br>
			High school graduate or diploma [1]</br>
			Some college but no degree [2]</br>
			Technical or vocational school [3]</br>
			Bachelor’s degree [4]</br>
			Master’s, professional, or doctorate degree [5]</br>

		<a href="/<?php echo $form_direction; ?>"> <button class="mtop50">Next Section</button> </a>

	</div>

</div>

<script src="/assets/js/baseline.js" type="text/javascript" />