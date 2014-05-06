<!-- javascript that controls functionality for baseline study is in the javascript file ('baseline.js') -->

<div class="row">

	<div class="container">

		<?php echo form_open($form_direction); ?>
							
		<h4 class="h4 mtop40 tcenter">Baseline Survey</h4>
		
		<?php echo ( isset( $percentDone ) ? $percentDone : "" ); ?>

		
		<p class="mptop40">23</p>

		<table class="baseline-table">

			<tr> <th></th><th>I do not agree at all</th><th>I strongly agree</th><th>PERFECT!</th> </tr>
			<tr> <td>We have a good relationship.</td> <td>1</td> <td>2</td> <td>3</td> <td>4</td> <td>5</td> <td>6</td> <td>7</td> </tr>
			<tr> <td>My relationship with my partner is very stable. </td> <td>1</td> <td>2</td> <td>3</td> <td>4</td> <td>5</td> <td>6</td> <td>7</td> </tr>
			<tr> <td>Our relationship is strong. </td> <td>1</td> <td>2</td> <td>3</td> <td>4</td> <td>5</td> <td>6</td> <td>7</td> </tr>
			<tr> <td>My relationship with my partner makes me happy. </td> <td>1</td> <td>2</td> <td>3</td> <td>4</td> <td>5</td> <td>6</td> <td>7</td> </tr>
			<tr> <td>I really feel like part of a team with my partner.</td> <td>1</td> <td>2</td> <td>3</td> <td>4</td> <td>5</td> <td>6</td> <td>7</td> </tr>

		</table>

		<p>24. Fill in the circle that best describes the degree of happiness in your relationship. The middle point (‘happy’) represents the degree of happiness most get from a relationship. </p>

		<table class="baseline-table">

			<tr> <th>Very Unhappy</th><th></th><th></th><th></th><th>Happy</th><th></th><th></th><th></th><th>Totally Perfect</th> </tr>
			<tr> <td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td> </tr>

		</table>

		<p class="mtop40">25. Taking things altogether, how satisfied are you with your relationship right now?</p>
		Very satisfied [5] </br>
		Somewhat satisfied [4] </br>
		Neutral [3] </br>
		Somewhat dissatisfied [2] </br>
		Very dissatisfied [1] </br>

		<p class="mtop40">Listed below are statements about families. You are to decide how much you agree with each of these statements or how much you disagree.  Remember we would like to know what your family seems like to you. So do no try to figure out how other members see your family, but do give us your general impression of your family for each statement. </p>
		<h4>Table needed here</h4>
		<p class="mtop40">27. We are interested in how you and your partner deal with problems in your relationship. Please rate each item on a scale of 1 (= very unlikely) to 9 (= very likely). Circle the appropriate number.  </p>
		<h4>Table needed here</h4>

<!-- start copy paste -->

		28. Have you and/or your partner received couples counseling in the past 90 days or do you intend to do so in the next 60 days? [COUNS]</br>
		Yes [1]</br>
		No [0]</br>

		FINAL QUESTIONS ABOUT YOU
		This section asks you some general background questions about yourself.</br>

		29. What is your gender? [GEN]</br>
		Male [1]</br>
		Female [0]</br>
		Prefer not to answer [2]</br>

		30. What is your age? [AGE]</br>
		______ years old</br>

		31. Are you Hispanic/Latino(a) or of Spanish origin? [HISP]</br>
		Yes [1]</br>
		No [0]</br>

		32. Which race/group best describes you? (Please mark all that apply.) [RACE]</br>
		American Indian or Alaska Native [1]</br>
		Asian (for example, Asian Indian, Chinese, Filipino, Japanese, Korean, Vietnamese) [2]</br>
		Black or African American [3]</br>
		Native Hawaiian or other Pacific Islander (for example, Samoan, Guamanian, or Chamorro) [4]</br>
		White [5]</br>
		Some other race (please specify): __________________________ [6]</br>

		33. What is the highest grade or year of school that you have finished? [EDUC]</br>
		Less than high school diploma [0]</br>
		High school graduate or diploma [1]</br>
		Some college but no degree [2]</br>
		Technical or vocational school [3]</br>
		Bachelor’s degree [4]</br>
		Master’s, professional, or doctorate degree [5]</br>

		34. What is your current relationship status?1 [REL1-REL3]Married [1]</br>
		Living with partner [2]</br>
		Widowed [3]</br>
		Divorced [4]</br>
		Separated [5]</br>
		Never married/single [0]</br>

		[If Question 34 = “Married,” then ask:]</br>

		34a. How many years have you been married to your spouse?</br>
		______years</br>

		[If Question 34 = “Living with partner,” then ask:]</br>

		34b. How many years have you been living with your partner?</br>
		______years</br>



		<a href="/<?php echo $form_direction; ?>"> <button class="mtop50">Next Section</button> </a>


	</div>

</div>

<script src="/assets/js/baseline.js" type="text/javascript" />