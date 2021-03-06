<!-- javascript that controls functionality for baseline study is in the javascript file ('baseline.js') -->

<div class="row">

	<div class="container">

		<?php echo form_open($form_direction); ?>
							
		<h4 class="h4 tcenter mtop40">Baseline Survey</h4>

		<?php echo ( isset( $percentDone ) ? form_progress($percentDone) : "" ); ?>



		<p class="h4 mtop40 section-header">YOUR DRINKING</p>
		
		<p class="instructions">The next set of questions asks about your drinking.  For all questions related to alcohol use below, please use the following definitions of standard drinks:</p>

		<p class="mtop50 mbot40"> <img src="<?php echo base_url(); ?>assets/img/drinks.png" class="img-responsive" /> </p>

		<p class="mtop40 question-title"> 10. Consider a typical week during the past month (30 days). How much alcohol, on average (measured in number of drinks), did YOU drink on each day of a typical week? </p>
		
		<table class="baseline-table mtop40">

			<tr> 
				<th> Number of Drinks </th>
			</tr>

			<tr> 
				<td>Monday</td> 
				<td> <input type="number" name="DD1" min="0" max="90"/> </td> 
			</tr>
			<tr>
				<td>Tuesday</td> 
				<td> <input type="number" name="DD2" min="0" max="90"/> </td> 
			</tr>
			<tr> 
				<td>Wednesday</td> 
				<td> <input type="number" name="DD3" min="0" max="90"/> </td> 
			</tr>
			<tr> 
				<td>Thursday</td> 
				<td> <input type="number" name="DD4" min="0" max="90"/> </td> 
			</tr>
			<tr> 
				<td>Friday</td> 
				<td> <input type="number" name="DD5" min="0" max="90"/> </td> 
			</tr>
			<tr> 
				<td>Saturday</td> 
				<td> <input type="number" name="DD6" min="0" max="90"/> </td> 
			</tr>
			<tr> 
				<td>Sunday</td> 
				<td> <input type="number" name="DD7" min="0" max="90"/> </td> 
			</tr>

		</table>

		<p class="mtop40 question-title">11. Think specifically about the <span class="underline">past 30 days</span>, up to and including today. How many days did you drink one or more drinks of an alcoholic beverage?</p>
		<input type="number" name="30D" min="0" max="31" /> </br>


		<p class="mtop40 question-title">12. How often do you have a drink containing alcohol?</p>

		<p class="radio-buttons">
			<input type="radio" name="AUD1" value="0"/> Never </br>						
			<input type="radio" name="AUD1" value="1"/> Monthly or less </br>
			<input type="radio" name="AUD1" value="2"/> 2-4 times a month </br>
			<input type="radio" name="AUD1" value="3"/> 2-3 times a week </br>
			<input type="radio" name="AUD1" value="4"/> 4 or more times a week </br>
		</p>

		<p class="mtop40 question-title">13. How many standard drinks containing alcohol do you have on a typical day?</p>
			<input type="number" name="AUD2" min="0" max="90" /> </br>
			<!-- <p class="mtop20"> I don't know <input type="checkbox" name="AUD2CheckBox" /> </span> </p> -->

		<p class="mtop40 question-title">14. How often do you have six or more drinks on one occasion?</p>

		<p class="radio-buttons">
			<input type="radio" name="AUD3" value="0" /> Never						 </br> 						
			<input type="radio" name="AUD3" value="1" /> Less than monthly   		 </br>
			<input type="radio" name="AUD3" value="2" /> Monthly  	 				 </br>
			<input type="radio" name="AUD3" value="3" /> Weekly  					 </br>
			<input type="radio" name="AUD3" value="4" /> Daily or almost daily   	 </br>
		</p>

				
		<input type="hidden" name="section" value="3" />
		<input type="submit" value="Next" class="mtop40 mbot40" />

		</form>

	</div>

</div>

<script src="/assets/js/baseline.js" type="text/javascript" />
		