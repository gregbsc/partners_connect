<!-- javascript that controls functionality for baseline study is in the javascript file ('baseline.js') -->

<div class="row">

	<div class="container">

		<?php echo form_open($form_direction); ?>
							
		<h4 class="h4 tcenter mtop40">Baseline Survey</h4>

		<?php echo ( isset( $percentDone ) ? $percentDone : "" ); ?>

		<p class="mtop40">7. During the past week, how much trouble have you had with:</p>

		<table class="baseline-table">
			<tr> <th> </th> <th>None</th> <th>Some</th> <th>A Lot</th> </tr>

			<tr> 
				<td>Sleeping</td> 
				<td> <input type="radio" name="HF10" value="0" required /> </td> 
				<td> <input type="radio" name="HF10" value="1" /> </td> 
				<td> <input type="radio" name="HF10" value="2" /> </td> 
			</tr>
			<tr> 
				<td>Hurting or aching in any part of your body</td> 
				<td> <input type="radio" name="HF11" value="0" required/> </td> 
				<td> <input type="radio" name="HF11" value="1" /> </td> 
				<td> <input type="radio" name="HF11" value="2" /> </td> 
			</tr>
			<tr> 
				<td>Getting tired easily</td> 
				<td> <input type="radio" name="HF12" value="0" required /> </td> 
				<td> <input type="radio" name="HF12" value="1" /> </td> 
				<td> <input type="radio" name="HF12" value="2" /> </td> 
			</tr>
			<tr> 
				<td>Feeling depressed or sad</td> 
				<td> <input type="radio" name="HF13" value="0" required /> </td> 
				<td> <input type="radio" name="HF13" value="1" /> </td> 
				<td> <input type="radio" name="HF13" value="2" /> </td> 
			</tr>
			<tr> 
				<td>Nervousness</td> 
				<td> <input type="radio" name="HF14" value="0" required /> </td> 
				<td> <input type="radio" name="HF14" value="1" /> </td> 
				<td> <input type="radio" name="HF14" value="2" /> </td>  
			</tr>
		</table>

		<p class="mtop40">8. During the past week, how often did you:</p>

		<table class="baseline-table">
			<tr> <th> </th> <th>None</th> <th>Some</th> <th>A Lot</th> </tr>

			<tr> 
				<td>Socialize with other people (talk or visit with friends or relatives)</td> 
				<td> <input type="radio" name="HF15" value="0" required /> </td> 
				<td> <input type="radio" name="HF15" value="1" /> </td> 
				<td> <input type="radio" name="HF15" value="2" /> </td> 
			</tr>

			<tr> 
				<td>Take part in social, religious, or recreation activities (meetings, church, movies, sports, parties)</td> 
				<td> <input type="radio" name="HF16" value="0" required /> </td> 
				<td> <input type="radio" name="HF16" value="1" /> </td> 
				<td> <input type="radio" name="HF16" value="2" /> </td> 
			</tr>
		</table>

		<p class="mtop40">9. During the past week, how often did you:</p>

		<table class="baseline-table">

			<tr> <th> </th> <th>None</th> <th>1-4 Days</th> <th>5-7 Days</th> </tr>

			<tr> 
				<td>Stay in your home, a nursing home, or hospital because of sickness, injury, or other health problem</td> 
				<td> <input type="radio" name="HF17" value="0" required /> </td>
				<td> <input type="radio" name="HF17" value="1" /> </td> 
				<td> <input type="radio" name="HF17" value="2" /> </td> 
			</tr>

		</table>
		
		<input type="submit" value="submit" class="mtop40 mbot40" />

		</form>

	</div>

</div>

<script src="/assets/js/baseline.js" type="text/javascript" />
		