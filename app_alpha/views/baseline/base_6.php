<!-- javascript that controls functionality for baseline study is in the javascript file ('baseline.js') -->

<div class="row">

	<div class="container">

		<?php echo form_open($form_direction); ?>
							
		<h4 class="h4 mtop40 tcenter">Baseline Survey</h4>
		
		<?php echo ( isset( $percentDone ) ? $percentDone : "" ); ?>

			<table class="baseline-table mtop40"> 
			<tr> <th></th><th>Not at all</th><th></th><th></th><th></th><th></th><th></th> <th>Very much</th> </tr>
			<tr> <td>17. To what extent do you think your partner has an alcohol problem?1</td> <td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td> </tr>
		</table>

		<p class="mtop40">18. How often do you and your partner argue about your partner’s drinking?</p>
			Never [0] </br>
			Less than once per year [1] </br>
			About once per year [2]</br>
			Two to three times per year [3]</br>
			About once every two months [4]</br>
			Once a month [5]</br>
			Two times a month [6]</br>
			Three times a month [7]</br>
			Once or twice a week [8]</br>
			Three or more times per week [9]</br>
			Everyday [10]</br>
			More than once per day [11]</br>


		<p class="mtop40">19. How often in the last month have you told your partner your concerns about his/her drinking?</p>
		Never [0]</br>
		Once [1]</br>
		Two or three times [2]</br>
		Four or five times [3]</br>
		Weekly [4]</br>
		Almost daily [5]</br>
		Daily [6]</br>



		<p class="mtop40">19a. How satisfied were you with how these discussions went?</p>
		Not at all satisfied [0] </br>
		Somewhat satisfied [1] </br>
		Very satisfied [2] </br>
		Extremely satisfied [3] </br>

		if 19 > 1 show following

		<p class="mtop40">19b. What influence do you think the conversation(s) has had on your partner’s drinking?</p>
		He/she is drinking more [0]</br>
		No influence [1]</br>
		He/she is thinking of drinking less or none at all [2]</br>
		He/she is preparing to drink less or none at all [3]</br>
		He/she has started to drink less or none at all [4]</br>
		He/she has already made a change by drinking less and is sticking with it [5]</br>



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




		<a href="/<?php echo $form_direction; ?>"> <button class="mtop50">Next Section</button> </a>


	</div>

</div>

<script src="/assets/js/baseline.js" type="text/javascript" />