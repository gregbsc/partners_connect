<!-- javascript that controls functionality for baseline study is in the javascript file ('baseline.js') -->

<div class="row">

	<div class="container">

		<?php echo form_open($form_direction); ?>
							
		<h4 class="h4 mtop40 tcenter">Baseline Survey</h4>
		
		<?php echo ( isset( $percentDone ) ? $percentDone : "" ); ?>

		<p class="h4 mtop40">YOUR PARTNER</p>
		
		<p class="">The next set of questions asks about your perceptions about your partner’s drinking. When we say “partner” we are referring to your spouse or partner with whom you live with. You may not know some of this information and that’s okay, please make your best guess. </p>
		
		<p>For all questions related to alcohol use below, please use the following definitions of standard drinks:</p>

		<p class="mtop50"> <img src="<?php echo base_url(); ?>assets/img/drinks.png" class="img-responsive" /> </p>

		<p class="mtop40">10. The following question asks you about your views of your partner’s drinking behavior. We are not asking you to report on their specific level of drinking (that is, you do not need to ask them how much they drink); rather, we are interested in how much you think they drink.</p>

		<table class="baseline-table">

			<tr> 
				<th>Consider a typical week during the past month (30 days). How much alcohol, on average, (measured in number of drinks), did YOU drink on each day of a typical week?</th> 
				<th> Number of Drinks </th>
			</tr>

			<tr> <td>Monday</td> <td> </td> </tr>
			<tr> <td>Tuesday</td> <td> </td> </tr>
			<tr> <td>Wednesday</td> <td> </td> </tr>
			<tr> <td>Thursday</td> <td> </td> </tr>
			<tr> <td>Friday</td> <td> </td> </tr>
			<tr> <td>Saturday</td> <td> </td> </tr>
			<tr> <td>Sunday</td> <td> </td> </tr>

		</table>

		<p class="mtop40">11. Think specifically about the past 30 days, from [DATEFILL*], up to and including today. During the past 30 days, on how many days did you drink one or more drinks of an alcoholic beverage?</p>
			number of days [0-30] </br>
			Dont know </br>

		<p class="mtop40">12. How often do you have a drink containing alcohol?</p>
			Never [0] </br>
			Monthly or less [1] </br>
			2-4 times a month [2] </br>
			2-3 times a week [3] </br>
			4 or more times a week [4] </br>

		<p class="mtop40">13. How many standard drinks containing alcohol do you have on a typical day?</p>
			# OF DRINKS: ____ [RANGE: 0 - 90] </br>
			Don’t Know / Refused [999] </br>


		<p class="mtop40">14. How often do you have six or more drinks on one occasion?</p>
			Never [0] </br>
			Less than monthly [1] </br>
			Monthly [2] </br>
			Weekly [3] </br>
			Daily or almost daily 4] </br>

		<h4 class="h4 mtop50">YOUR PARTNER</h4>

		<p>The next set of questions asks about your perceptions about your partner’s drinking. When we say “partner” we are referring to your spouse or partner with whom you live with. You may not know some of this information and that’s okay, please make your best guess. </p>

		<p>For all questions related to alcohol use below, please use the following definitions of standard drinks:</p>
		<p class="mtop40"> <img src="<?php echo base_url(); ?>assets/img/drinks.png" class="img-responsive" /> </p>

		<p class="mtop40">15. The following question asks you about your views of your partner’s drinking behavior. We are not asking you to report on their specific level of drinking (that is, you do not need to ask them how much they drink); rather, we are interested in how much you think they drink.</p>

		<table class="baseline-table">

			<tr> 
				<th>Consider a typical week during the past month (30 days). How much alcohol, on average, (measured in number of drinks), did YOU drink on each day of a typical week?</th> 
				<th> Number of Drinks </th>
			</tr>

			<tr> <td>Monday</td> <td> </td> </tr>
			<tr> <td>Tuesday</td> <td> </td> </tr>
			<tr> <td>Wednesday</td> <td> </td> </tr>
			<tr> <td>Thursday</td> <td> </td> </tr>
			<tr> <td>Friday</td> <td> </td> </tr>
			<tr> <td>Saturday</td> <td> </td> </tr>
			<tr> <td>Sunday</td> <td> </td> </tr>

		</table>

		<a href="/<?php echo $form_direction; ?>"> <button class="mtop50">Next Section</button> </a>

	</div>

</div>

<script src="/assets/js/baseline.js" type="text/javascript" />