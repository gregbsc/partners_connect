<!-- javascript that controls functionality for baseline study is in the javascript file ('baseline.js') -->

<div class="row">

	<div class="container">

		<?php echo form_open($form_direction); ?>
							
		<h4 class="h4 mtop40 tcenter">Baseline Survey</h4>
		
		<?php echo ( isset( $percentDone ) ? $percentDone : "" ); ?>

		
		<p class="mtop40">23.</p>

		<table class="baseline-table">

			<tr> <th></th><th>I do not agree at all</th> <th></th><th></th> <th>I strongly agree</th> <th></th><th></th> <th>PERFECT!</th> </tr>
			<tr> 
				<td>We have a good relationship.</td> 
				<?php table_row( 1, 7, '', 'RQUAL1' ); ?>
			</tr>
			<tr> 
				<td>My relationship with my partner is very stable. </td> 
				<?php table_row( 1, 7, '', 'RQUAL2' ); ?>
			</tr>
			<tr> 
				<td>Our relationship is strong. </td> 
				<?php table_row( 1, 7, '', 'RQUAL3' ); ?> 
			</tr>
			<tr>
				<td>My relationship with my partner makes me happy. </td> 
				<?php table_row( 1, 7, '', 'RQUAL4' ); ?> 
			</tr>
			<tr> 
				<td>I really feel like part of a team with my partner.</td> 
				<?php table_row( 1, 7, '', 'RQUAL5' ); ?> 
			</tr>

		</table>

		<p class="mtop40">24. Fill in the circle that best describes the degree of happiness in your relationship. The middle point (‘happy’) represents the degree of happiness most get from a relationship. </p>

		<table class="baseline-table">

			<tr> <th>Very Unhappy</th><th></th><th></th><th></th><th>Happy</th><th></th><th></th><th></th> <th></th> <th>Totally Perfect</th> </tr>
			<tr style="text-align:center;"> <td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td> </tr>
			<tr>
				<?php table_row( 1, 10, '', 'RQUAL6' ); ?>
			</tr>

		</table>

		<p class="mtop40">25. Taking things altogether, how satisfied are you with your relationship right now?</p>

		<input type="radio" name="RQUAL7" value="5" required/> Very satisfied </br>
		<input type="radio" name="RQUAL7" value="4"/> Somewhat satisfied </br>
		<input type="radio" name="RQUAL7" value="3"/> Neutral </br>
		<input type="radio" name="RQUAL7" value="2"/> Somewhat dissatisfied </br>
		<input type="radio" name="RQUAL7" value="1"/> Very dissatisfied </br>

		<p class="mtop40">Listed below are statements about families. You are to decide how much you agree with each of these statements or how much you disagree.  Remember we would like to know what your family seems like to you. So do no try to figure out how other members see your family, but do give us your general impression of your family for each statement. </p>
		
		<h4>Table needed here</h4>
		
		<p class="mtop40">26. We are interested in how you and your partner deal with problems in your relationship. 
			Please rate each item on a scale of 1 (= very unlikely) to 9 (= very likely). Circle the appropriate number.  </p>
		
		<h4>Table needed here</h4>

<!-- start copy paste -->

		<p class="mtop40"> 27. Have you and/or your partner received couples counseling in the past 90 days or do you intend to do so in the next 60 days?</p>

		<input type="radio" name="COUNS" value="1" required /> </br>
		<input type="radio" name="COUNS" value="0"/> </br>

		<h4 class="h4">FINAL QUESTIONS ABOUT YOU</h4>
		
		<p>This section asks you some general background questions about yourself.</p>

		<p class="mtop40"> 28. What is your gender? </p>
		<input type="radio" name="GEN" value="1" required /> Male </br>
		<input type="radio" name="GEN" value="0" required /> Female </br>
		<input type="radio" name="GEN" value="2" required /> Prefer not to answer </br>

		<p class="mtop40"> 29. What is your age? (In years) </p>
		<input type="number" name="AGE" min="16" required /> </br>

		<p class="mtop40"> 30. Are you Hispanic/Latino(a) or of Spanish origin?</p>
		<input type="radio" name="HISP" value="1" required /> Yes </br>
		<input type="radio" name="HISP" value="0" /> No </br>

		<p class="mtop40">31. Which race/group best describes you? (Please mark all that apply.) </p>
		
		<p class="left-checkbox">

			<input type="checkbox" name="RACE" value="1"/> American Indian or Alaska Native </br>
			<input type="checkbox" name="RACE" value="2"/> Asian (for example, Asian Indian, Chinese, Filipino, Japanese, Korean, Vietnamese) </br>
			<input type="checkbox" name="RACE" value="3"/> Black or African American </br>
			<input type="checkbox" name="RACE" value="4"/> Native Hawaiian or other Pacific Islander (for example, Samoan, Guamanian, or Chamorro) </br>
			<input type="checkbox" name="RACE" value="5"/> White </br>
			<input type="checkbox" name="RACE" value="6"/> Some other race (please specify): <input type="text" name="RACE-TEXT"/> </br>

		</p>

		<p class="mtop40">33. What is the highest grade or year of school that you have finished? [EDUC]</p>

		<p class="left-checkbox">

			<input type="checkbox" name="EDUC" value="0"/> Less than high school diploma </br>
			<input type="checkbox" name="EDUC" value="1"/> High school graduate or diploma </br>
			<input type="checkbox" name="EDUC" value="2"/> Some college but no degree </br>
			<input type="checkbox" name="EDUC" value="3"/> Technical or vocational school </br>
			<input type="checkbox" name="EDUC" value="4"/> Bachelor’s degree </br>
			<input type="checkbox" name="EDUC" value="5"/> Master’s, professional, or doctorate degree </br>

		</p>

		<p class="mtop40">34. What is your current relationship status? [REL1-REL3]Married</p>

		<p class="radio-buttons">

			<input type="radio" name="REL1" value="1" required /> Married</br>
			<input type="radio" name="REL1" value="2" /> Living With Partner</br>
			<input type="radio" name="REL1" value="3" /> Widowed</br>
			<input type="radio" name="REL1" value="4" /> Divorced</br>
			<input type="radio" name="REL1" value="5" /> Separated</br>
			<input type="radio" name="REL1" value="6" /> Never married/single</br>

		</p>

		[If Question 34 = “Married,” then ask:]</br>

		<p class="mtop40">34a. How many years have you been married to your spouse?</p>
		<input type="number" name="REL2" /> years</br>

		[If Question 34 = “Living with partner,” then ask:]</br>

		<p class="mtop40">34b. How many years have you been living with your partner?</p>
		<input type="number" name="REL3" />years</br>



		<input type="hidden" name="section" value="8" />
		<input type="submit" value="submit" class="mtop40 mbot40" />

		</form>


	</div>

</div>

<script src="/assets/js/baseline.js" type="text/javascript" />