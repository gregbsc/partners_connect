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

			<tr> 
				<td>Monday</td> 
				<td> <input type="number" name="DD1" min="0" required /> </td> 
			</tr>
			<tr>
				<td>Tuesday</td> 
				<td> <input type="number" name="DD2" min="0" required /> </td> 
			</tr>
			<tr> 
				<td>Wednesday</td> 
				<td> <input type="number" name="DD3" min="0" required /> </td> 
			</tr>
			<tr> 
				<td>Thursday</td> 
				<td> <input type="number" name="DD4" min="0" required /> </td> 
			</tr>
			<tr> 
				<td>Friday</td> 
				<td> <input type="number" name="DD5" min="0" required /> </td> 
			</tr>
			<tr> 
				<td>Saturday</td> 
				<td> <input type="number" name="DD6" min="0" required /> </td> 
			</tr>
			<tr> 
				<td>Sunday</td> 
				<td> <input type="number" name="DD7" min="0" required /> </td> 
			</tr>

		</table>

		<p class="mtop40">11. Think specifically about the past 30 days, up to and including today. During the past 30 days, on how many days did you drink one or more drinks of an alcoholic beverage?</p>
			<input type="number" name="30D" min="0" max="30" required /> </br>
			<p class="mtop20"> I don't know <input type="checkbox" name="30Db" /> </span> </p>

		<p class="mtop40">12. How often do you have a drink containing alcohol?</p>

		<p class="custom-q-wrapper med-width">
			<input type="checkbox" name="AUD1" value="0"/> Never </br>						
			<input type="checkbox" name="AUD1" value="1"/> Monthly or less </br>
			<input type="checkbox" name="AUD1" value="2"/> 2-4 times a month </br>
			<input type="checkbox" name="AUD1" value="3"/> 2-3 times a week </br>
			<input type="checkbox" name="AUD1" value="4"/> 4 or more times a week </br>
		</p>

		<p class="mtop40">13. How many standard drinks containing alcohol do you have on a typical day?</p>
			<input type="number" name="AUD2" min="0" max="90" required /> </br>
			<p class="mtop20"> I don't know <input type="checkbox" name="AUD2b" /> </span> </p>


		<p class="mtop40">14. How often do you have six or more drinks on one occasion?</p>

		<p class="custom-q-wrapper max-form med-width">	
			Never 						<input type="checkbox" name="AUD3" value="0" required /> </br>
			Less than monthly   		<input type="checkbox" name="AUD3" value="1" /> </br>
			Monthly  	 				<input type="checkbox" name="AUD3" value="2" /> </br>
			Weekly  					<input type="checkbox" name="AUD3" value="3" /> </br>
			Daily or almost daily   	<input type="checkbox" name="AUD3" value="4" /> </br>
		</p>

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

			<tr> 
				<td>Monday</td> 
				<td> <input type="number" name="PPD1" min="0" required /> </td> 
			</tr>
			<tr> 
				<td>Tuesday</td> 
				<td> <input type="number" name="PPD2" min="0" required /> </td> 
			</tr>
			<tr> 
				<td>Wednesday</td> 
				<td> <input type="number" name="PPD3" min="0" required /> </td> 
			</tr>
			<tr> 
				<td>Thursday</td> 
				<td> <input type="number" name="PPD4" min="0" required /> </td> 
			</tr>
			<tr> 
				<td>Friday</td> 
				<td> <input type="number" name="PPD5" min="0" required /> </td> 
			</tr>
			<tr> 
				<td>Saturday</td> 
				<td> <input type="number" name="PPD6" min="0" required /> </td> 
			</tr>
			<tr> 
				<td>Sunday</td> 
				<td> <input type="number" name="PPD7" min="0" required /> </td> 
			</tr>

		</table>

		<input type="hidden" name="section" value="4" />
		<input type="submit" value="submit" class="mtop40 mbot40" />

		</form>

	</div>

</div>

<script src="/assets/js/baseline.js" type="text/javascript" />