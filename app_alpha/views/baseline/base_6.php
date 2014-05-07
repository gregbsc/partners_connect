<!-- javascript that controls functionality for baseline study is in the javascript file ('baseline.js') -->

<div class="row">

	<div class="container">

		<?php echo form_open($form_direction); ?>
							
		<h4 class="h4 mtop40 tcenter">Baseline Survey</h4>
		
		<?php echo ( isset( $percentDone ) ? $percentDone : "" ); ?>

			<table class="baseline-table mtop40"> 

			<tr> <th></th><th>Not at all</th><th></th><th></th><th></th><th></th><th></th> <th>Very much</th> </tr>
			<tr> <td>17. To what extent do you think your partner has an alcohol problem?1</td> 
				<?php table_row( 1, 7, '', 'CPD26' ); ?>
			</tr>

		</table>

		<p class="mtop40">18. How often do you and your partner argue about your partner’s drinking?</p>

			<p class="radio-buttons">

				<input type="radio" name="ADP1" value="0" required/> Never </br>
				<input type="radio" name="ADP1" value="1" /> Less than once per year </br>
				<input type="radio" name="ADP1" value="2" /> About once per year </br>
				<input type="radio" name="ADP1" value="3" /> Two to three times per year </br>
				<input type="radio" name="ADP1" value="4" /> About once every two months </br>
				<input type="radio" name="ADP1" value="5" /> Once a month </br>
				<input type="radio" name="ADP1" value="6" /> Two times a month </br>
				<input type="radio" name="ADP1" value="7" /> Three times a month </br>
				<input type="radio" name="ADP1" value="8" /> Once or twice a week </br>
				<input type="radio" name="ADP1" value="9" /> Three or more times per week </br>
				<input type="radio" name="ADP1" value="10" /> Everyday </br>
				<input type="radio" name="ADP1" value="11" /> More than once per day </br>

			</p>

		<p class="mtop40">19. How often in the last month have you told your partner your concerns about his/her drinking?</p>
		
		<p class="radio-buttons">

			<input type="radio" name="TPD1" value="0" required/> Never </br>
			<input type="radio" name="TPD1" value="1" /> Once</br>
			<input type="radio" name="TPD1" value="2" /> Two or three times </br>
			<input type="radio" name="TPD1" value="3" /> Four or five times </br>
			<input type="radio" name="TPD1" value="4" /> Weekly </br>
			<input type="radio" name="TPD1" value="5" /> Almost daily </br>
			<input type="radio" name="TPD1" value="6" /> Daily </br>

		</p>


		<p class="mtop40">19a. How satisfied were you with how these discussions went?</p>

		<p class="radio-buttons">
			<input type="radio" name="TPD2" value="0" required/> Not at all satisfied </br>
			<input type="radio" name="TPD2" value="1" /> Somewhat satisfied </br>
			<input type="radio" name="TPD2" value="2" /> Very satisfied </br>
			<input type="radio" name="TPD2" value="3" /> Extremely satisfied </br>
		</p>

		if 19 > 1 show following

		<p class="mtop40">19b. What influence do you think the conversation(s) has had on your partner’s drinking?</p>

		<p class="radio-buttons">
			<input type="radio" name="TPD3" value="0" required/> He/she is drinking more </br>
			<input type="radio" name="TPD3" value="1" />No influence </br>
			<input type="radio" name="TPD3" value="2" />He/she is thinking of drinking less or none at all </br>
			<input type="radio" name="TPD3" value="3" />He/she is preparing to drink less or none at all </br>
			<input type="radio" name="TPD3" value="4" />He/she has started to drink less or none at all </br>
			<input type="radio" name="TPD3" value="5" />He/she has already made a change by drinking less and is sticking with it </br>
		</p>

		<p>On the ruler below, please indicate the number that best describes how you think your partner feels right now:</p>

		<p class="mtop40">20. On a scale from 0 to 10, how ready do you feel your partner is to change his/her drinking? </br>

		0 = Has not done anything to change his/her drinking</br>
		1</br>
		2= Has talked about changing, but has no plans to do so yet</br>
		3</br>
		4</br>
		5 = Has a plan for changing</br>
		6</br>
		7 = Just started to change</br>
		8</br>
		9</br>
		10= Has started to change and plans to continue</br>




		<input type="hidden" name="section" value="6" />
		<input type="submit" value="submit" class="mtop40 mbot40" />

		</form>


	</div>

</div>

<script src="/assets/js/baseline.js" type="text/javascript" />