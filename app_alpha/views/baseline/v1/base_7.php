<!-- javascript that controls functionality for baseline study is in the javascript file ('baseline.js') -->

<div class="row">

	<div class="container">

		<?php echo form_open($form_direction); ?>
							
		<h4 class="h4 mtop40 tcenter">Baseline Survey</h4>
		
		<?php echo ( isset( $percentDone ) ? form_progress($percentDone) : "" ); ?>


		<h4 class="h4 mtop50">YOUR RELATIONSHIP</h4>

		<p class="mtop20 question-title">The next set of questions asks about your relationship with your partner. Please answer each question for yourself and not based on what your partner might think.</p>
		
		<p> Answer all questions with your partner in mind.  Please answer the questions independently of your partner. </p>
	
		<p class="mtop40 question-title">23. Thinking about your relationship with your spouse or partner, please indicate the extent to which you agree with each of the following statements.</p>

		<table class="baseline-table">

			<tr> <th></th><th>Strongly Disagree</th> <th></th><th></th> <th>I strongly agree</th> <th></th><th></th> <th>Strongly Agree</th> </tr>
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

		<p class="mtop40 question-title">24. Fill in the circle that best describes the degree of happiness in your relationship. The middle point (‘happy’) represents the degree of happiness most get from a relationship. </p>
		<p>The middle point (‘happy’) represents how happy most people are in their relationship.</p>

		<table class="baseline-table">

			<tr> <th>Very Unhappy</th><th></th><th></th><th></th><th>Happy</th><th>Happy</th><th></th><th></th> <th></th> <th>Perfectly Happy</th> </tr>
			<tr style="text-align:center;"> <td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td> </tr>
			
			<tr>
				<?php table_row( 1, 10, '', 'RQUAL6' ); ?>
			</tr>

		</table>

		<p class="mtop40 question-title">25. Taking things altogether, how satisfied are you with your relationship right now?</p>
		
		<p class="radio-buttons">
			<input type="radio" name="RQUAL7" value="5"/> Very satisfied </br>
			<input type="radio" name="RQUAL7" value="4"/> Somewhat satisfied </br>
			<input type="radio" name="RQUAL7" value="3"/> Neutral </br>
			<input type="radio" name="RQUAL7" value="2"/> Somewhat dissatisfied </br>
			<input type="radio" name="RQUAL7" value="1"/> Very dissatisfied </br>
		</p>
		
		<p class="mtop40">Listed below are statements about families. You are to decide how much you agree with each of these statements or how much you disagree.  Remember we would like to know what your family seems like to you. So do no try to figure out how other members see your family, but do give us your general impression of your family for each statement. </p>
		
		<p class="mtop40 question-title"> 26. Here are a few statements about the way things are in your family, and when we say your family, we mean the family that lives under one roof in your home. For each statement, please indicate the extent to which you agree with the statement using the scale provided. </p>

		<table class="baseline-table">
			
			<tr> 
				<td></td><td>Strongly disagree</td><td>Disagree</td><td>Neight Agree No Disagree</td><td>Agree</td><td>Strongly Agree</td> 
			</tr>

			<tr> 
				<td>We fight a lot in our family.</td>
				<?php table_row( 1, 5, '', 'FAM1' ); ?>
			</tr>
			<tr> 
				<td>Family members rarely become openly angry.</td>
				<?php table_row( 1, 5, '', 'FAM2' ); ?>
			</tr>
			<tr> 
				<td>Family members sometimes get so angry they throw things.</td>
				<?php table_row( 1, 5, '', 'FAM3' ); ?>
			</tr>
			<tr> 
				<td>Family-members hardly ever lose their tempers.</td>
				<?php table_row( 1, 5, '', 'FAM4' ); ?>
			</tr>
			<tr> 
				<td>Family members often criticize each other.</td>
				<?php table_row( 1, 5, '', 'FAM5' ); ?>
			</tr>
			<tr> 
				<td>Family members sometimes hit each other.</td>
				<?php table_row( 1, 5, '', 'FAM6' ); ?>
			</tr>												
			<tr> 
				<td>If there's a disagreement in our family, we try hard to smooth things over and keep the peace.</td>
				<?php table_row( 1, 5, '', 'FAM7' ); ?>
			</tr>
			<tr> 
				<td>Family members often try to one-up or outdo each other.</td>
				<?php table_row( 1, 5, '', 'FAM8' ); ?>
			</tr>
			<tr> 
				<td>In our family, we believe you don’t ever get anywhere by raising your voice. </td>
				<?php table_row( 1, 5, '', 'FAM9' ); ?>
			</tr>
		</table>		

			<p class="mtop40 question-title"> 27. We are interested in how you and your partner deal with problems in your relationship. Click on the appropriate number. </p>
			<p class="directions">When issues or problems arise, how likely is it that... </p>
		
		<!-- <table class="top-number-radio"> -->
			<table class="baseline-table">
			<tr> 
				<th> </th> <th><strong>Very Unlikely</strong></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th><strong>Very Likely</strong></th> 
			</tr>
<!-- 			<tr class="tcenter">
				<th> </th> <th>1 </th> <th>2 </th> <th> 3</th> <th>4 </th> <th>5 </th> <th>6 </th> <th> 7</th> <th>8 </th> 
			</tr> -->

			<tr> 
				<td>Both partners avoid discussing the problem </td>
				<?php table_row( 1, 8, '', 'COMM1' ); ?>
			</tr>
			<tr> 
				<td>Both partners try to discuss the problem </td>
				<?php table_row( 1, 8, '', 'COMM2' ); ?>
			</tr>
			<tr> 
				<td>You try to start a discussion while your partner tries to avoid a discussion </td>
				<?php table_row( 1, 8, '', 'COMM3' ); ?>
			</tr>
			<tr> 
				<td>Your partner tries to start a discussion while you try to avoid a discussion </td>
				<?php table_row( 1, 8, '', 'COMM4' ); ?>
			</tr>
			<tr> 
				<td>Both partners express feelings to each other</td>
				<?php table_row( 1, 8, '', 'COMM5' ); ?>
			</tr>
			<tr> 
				<td>Both partners blame, accuse, or criticize each other </td>
				<?php table_row( 1, 8, '', 'COMM6' ); ?>
			</tr>
			<tr> 
				<td>Both partners suggest possible solutions and compromises </td>
				<?php table_row( 1, 8, '', 'COMM7' ); ?>
			</tr>
			<tr> 
				<td>You pressure, nag, or demand while your partner withdraws, becomes silent, or refuses to discuss the matter further</td>
				<?php table_row( 1, 8, '', 'COMM8' ); ?>
			</tr>
			<tr> 
				<td>Your partner pressures, nags, or demands while you withdraw, become silent, or refuse to discuss the matter further</td>
				<?php table_row( 1, 8, '', 'COMM9' ); ?>
			</tr>
			<tr> 
				<td>You criticize while your partner defends himself </td>
				<?php table_row( 1, 8, '', 'COMM10' ); ?>
			</tr>
			<tr> 
				<td>Your partner criticizes while you defend yourself</td>
				<?php table_row( 1, 8, '', 'COMM11' ); ?>
			</tr>
																													
		</table>

			<p class="mtop40 question-title"> 28. Have you and/or your partner received couples counseling in the past 90 days or do you intend to do so in the next 60 days?</p>
			
			<p class="radio-buttons">
				<input type="radio" name="COUNS" value="1" /> Yes </br>
				<input type="radio" name="COUNS" value="0"/> No </br>
			</p>

			<p class="mtop40 question-title"> 29. Have you and/or your partner received couples counseling in the past 90 days or do you intend to do so in the next 60 days?</p>
			
			<p class="radio-buttons">
				<input type="radio" name="COUNS" value="1" /> Yes </br>
				<input type="radio" name="COUNS" value="0"/> No </br>

			</p>

			<input type="hidden" name="section" value="7" />
			<input type="submit" value="submit" class="mtop40 mbot40" />
			
		</form>


	</div>

</div>

<script src="/assets/js/baseline.js" type="text/javascript" />