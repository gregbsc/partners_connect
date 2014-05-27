<!-- javascript that controls functionality for baseline study is in the javascript file ('baseline.js') -->

<div class="row">

	<div class="container">

		<?php echo form_open($form_direction); ?>
							
		<h4 class="h4 mtop40 tcenter">Baseline Survey</h4>
		
		<?php echo ( isset( $percentDone ) ? form_progress($percentDone) : "" ); ?>
		
		<h4 class="h4 mtop50">YOUR PARTNER</h4>

		<p>The next set of questions asks about your perceptions about your partner’s drinking. When we say “partner” we are referring to your spouse or partner with whom you live with. You may not know some of this information and that’s okay, please make your best guess. </p>
		<p>For all questions related to alcohol use below, please use the following definitions of standard drinks:</p>

		<p class="mtop40"> <img src="<?php echo base_url(); ?>assets/img/drinks.png" class="img-responsive" /> </p>

		<p class="mtop40">15. The following question asks you about your views of your partner’s drinking behavior. We are not asking you to report on their specific level of drinking (that is, you do not need to ask them how much they drink); rather, we are interested in how much you think they drink.</p>

		<table class="baseline-table">

			<tr> 
				<th>Consider a typical week during the past month (30 days). How much alcohol, on average, (measured in number of drinks), do you think your partner had on each day of a typical week?</th> 
				<th> Number of Drinks </th>
			</tr>

			<tr> 
				<td>Monday</td> 
				<td> <input type="number" name="PPD1" min="0" /> </td> 
			</tr>
			<tr> 
				<td>Tuesday</td> 
				<td> <input type="number" name="PPD2" min="0" /> </td> 
			</tr>
			<tr> 
				<td>Wednesday</td> 
				<td> <input type="number" name="PPD3" min="0" /> </td> 
			</tr>
			<tr> 
				<td>Thursday</td> 
				<td> <input type="number" name="PPD4" min="0" /> </td> 
			</tr>
			<tr> 
				<td>Friday</td> 
				<td> <input type="number" name="PPD5" min="0" /> </td> 
			</tr>
			<tr> 
				<td>Saturday</td> 
				<td> <input type="number" name="PPD6" min="0" /> </td> 
			</tr>
			<tr> 
				<td>Sunday</td> 
				<td> <input type="number" name="PPD7" min="0" /> </td> 
			</tr>

		</table>

		<p class="mtop40">16. The following statements refer to your thoughts and feelings about your partner's drinking. Please indicate how much you agree or disagree with the following statements.</p>

		<table class="baseline-table">
			<tr> 
				<td></td><td>Strongly disagree</td><td></td><td></td><td></td><td></td><td></td><td>Strongly Agree</td> 
			</tr>
			<tr> 
				<td>My partner's drinking is a source of strain in our relationship</td>
				<?php table_row( 1, 7, '', 'CPD1' ); ?>
			</tr>
			
			<tr> 
				<td>My partner has a lack of control over his or her drinking</td> 
				<?php table_row( 1, 7, '', 'CPD2' ); ?>
			</tr>

			<tr> 
				<td>I feel less intimate with my partner because of his or her drinking</td>
				<?php table_row( 1, 7, '', 'CPD3' ); ?>
			</tr>

			<tr> 
				<td>My partner makes excuses about his or her drinking</td>
				<?php table_row( 1, 7, '', 'CPD4' ); ?>
			</tr>

			<tr> 
				<td>My partner and I have arguments about his or her drinking</td>
				<?php table_row( 1, 7, '', 'CPD5' ); ?>
			</tr>

			<tr> 
				<td>My partner is hostile when confronted about drinking</td>
				<?php table_row( 1, 7, '', 'CPD6' ); ?>
			</tr>
			<tr> 
				<td>My partner is defensive when confronted about drinking</td>
				<?php table_row( 1, 7, '', 'CPD7' ); ?>
			</tr>
			<tr> 
				<td>I wish I had more control over how much my partner drinks</td>
				<?php table_row( 1, 7, '', 'CPD8' ); ?>
			</tr>
			<tr> 
				<td>I feel like I have to be ready to handle the consequences of my partner's drinking</td>
				<?php table_row( 1, 7, '', 'CPD9' ); ?>
			</tr>
			<tr> 
				<td>I have considered leaving my partner because of his or her drinking</td>
				<?php table_row( 1, 7, '', 'CPD10' ); ?>
			</tr>
			<tr> 
				<td>Sometimes my partner scares me with how much he or she drinks</td>
				<?php table_row( 1, 7, '', 'CPD11' ); ?>
			</tr>
			<tr> 
				<td>I would be happier if my partner didn't drink so much</td>
				<?php table_row( 1, 7, '', 'CPD12' ); ?>
			</tr>
			<tr> 
				<td>Our relationship would be much better if my partner reduced his or her drinking</td>
				<?php table_row( 1, 7, '', 'CPD13' ); ?>
			</tr>
			<tr> 
				<td>I feel like I have to take on additional responsibilities because of my partner's drinking</td>
				<?php table_row( 1, 7, '', 'CPD14' ); ?>
			</tr>
			<tr> 
				<td>I wish my partner wouldn't drink so many drinks</td>
				<?php table_row( 1, 7, '', 'CPD15' ); ?>
			</tr>
			<tr> 
				<td>I wish there was more I could do to make my partner drink less</td>
				<?php table_row( 1, 7, '', 'CPD16' ); ?>
			</tr>
			<tr> 
				<td>My partner doesn't take part in as many activities with me due to his or her drinking</td>
				<?php table_row( 1, 7, '', 'CPD17' ); ?>
			</tr>
			<tr> 
				<td>I think my partner has a problem controlling his or her drinking</td>
				<?php table_row( 1, 7, '', 'CPD18' ); ?>
			</tr>
			<tr> 
				<td>I think my partner should go to treatment for his or her drinking</td>
				<?php table_row( 1, 7, '', 'CPD19' ); ?>
			</tr>
			<tr> 
				<td>My partner's drinking has interfered with our sex life</td>
				<?php table_row( 1, 7, '', 'CPD20' ); ?>
			</tr>
			<tr> 
				<td>I think my partner is an alcoholic</td>
				<?php table_row( 1, 7, '', 'CPD21' ); ?>
			</tr>
			<tr> 
				<td>My partner hides his or her alcohol use</td>
				<?php table_row( 1, 7, '', 'CPD22' ); ?>
			</tr>
			<tr> 
				<td>I wish my partner wouldn't drink so often</td>
				<?php table_row( 1, 7, '', 'CPD23' ); ?>
			</tr>
			<tr> 
				<td>I have thought about staging a mini-intervention with our family and friends</td>
				<?php table_row( 1, 7, '', 'CPD24' ); ?>
			</tr>
			<tr> 
				<td>My partner is a different person when he or she is drunk</td>
				<?php table_row( 1, 7, '', 'CPD25' ); ?>
			</tr>	
		</table>


		<input type="hidden" name="section" value="4" />
		<input type="submit" value="submit" class="mtop40 mbot40" />

		</form>

	</div>

</div>

<script src="/assets/js/baseline.js" type="text/javascript" />