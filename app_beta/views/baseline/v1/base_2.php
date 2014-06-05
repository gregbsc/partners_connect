<!-- javascript that controls functionality for baseline study is in the javascript file ('baseline.js') -->

<div class="row">

	<div class="container">

		<?php echo form_open($form_direction); ?>
							
		<h4 class="h4 tcenter mtop40">Baseline Survey</h4>
		
		<?php echo ( isset( $percentDone ) ? form_progress($percentDone) : "" ); ?>
		
		<p class="instructions">Please read each question carefully and indicate your best answer.  You should answer the questions in your own way.  There are no right or wrong answers.</p>

		<p class="mtop40 question-title">5. Here are some statements about your health and feelings.</p>
		
		<table class="baseline-table">

			<tr> 
				<th> </th> <th>Yes, describes me exactly</th> <th>Somewhat describes me</th> <th>No, doesn’t describe me at all</th> 
			</tr>

			<tr> 
				<td>I like who I am</td> 
				<td> <input type="radio" value="2" name="HF1"/> </td> 
				<td> <input type="radio" value="1" name="HF1"/> </td> 
				<td> <input type="radio" value="0" name="HF1"/> </td> 
			</tr>

			<tr> 
				<td>I am not an easy person to get along with</td> 
				<td> <input type="radio" value="2" name="HF2"/> </td> 
				<td> <input type="radio" value="1" name="HF2"/> </td> 
				<td> <input type="radio" value="0" name="HF2"/> </td> 
			</tr>

			<tr> 
				<td>Trouble falling or staying asleep, or sleeping too much? </td> 
				<td> <input type="radio" value="2" name="HF3"/> </td> 
				<td> <input type="radio" value="1" name="HF3"/> </td> 
				<td> <input type="radio" value="0" name="HF3"/> </td> 
			</tr>

			<tr> 
				<td>I give up too easily </td> 
				<td> <input type="radio" value="2" name="HF4"/> </td> 
				<td> <input type="radio" value="1" name="HF4"/> </td> 
				<td> <input type="radio" value="0" name="HF4"/> </td> 
			</tr>

			<tr> 
				<td>I have difficulty concentrating</td> 
				<td> <input type="radio" value="2" name="HF5"/> </td> 
				<td> <input type="radio" value="1" name="HF5"/> </td> 
				<td> <input type="radio" value="0" name="HF5"/> </td> 
			</tr>

			<tr> 
				<td>I am happy with my family relationships </td>
				<td> <input type="radio" value="2" name="HF6"/> </td> 
				<td> <input type="radio" value="1" name="HF6"/> </td> 
				<td> <input type="radio" value="0" name="HF6"/> </td> 
			</tr>

			<tr> 
				<td>I am comfortable being around people </td> 
				<td> <input type="radio" value="2" name="HF7"/> </td> 
				<td> <input type="radio" value="1" name="HF7"/> </td> 
				<td> <input type="radio" value="0" name="HF7"/> </td> 
			</tr>
			
		</table>

		<p class="mtop40 question-title">6. TODAY, would you have any physical trouble or difficulty:</p>
		
		<table class="baseline-table">

			<tr> <th> </th> <th>None</th> <th>Some</th> <th>A Lot</th> </tr>

			<tr> 
				<td>Walking up a flight of stairs</td> 
				<td> <input type="radio" value="0" name="HF8" /> </td> 
				<td> <input type="radio" value="1" name="HF8" /> </td> 
				<td> <input type="radio" value="2" name="HF8" /> </td> 
			</tr>

			<tr> 
				<td>Running the length of a football field</td>
				<td> <input type="radio" value="0" name="HF9" /> </td> 
				<td> <input type="radio" value="1" name="HF9" /> </td> 
				<td> <input type="radio" value="2" name="HF9" /> </td> 
			</tr>

		</table>

		<p class="mtop40 question-title">7. During the <span class="underline">PAST WEEK</span>, how much trouble have you had with:</p>

		<table class="baseline-table">
			
			<tr> <th> </th> <th>None</th> <th>Some</th> <th>A Lot</th> </tr>

			<tr> 
				<td>Sleeping</td> 
				<td> <input type="radio" name="HF10" value="0" /> </td> 
				<td> <input type="radio" name="HF10" value="1" /> </td> 
				<td> <input type="radio" name="HF10" value="2" /> </td> 
			</tr>
			<tr> 
				<td>Hurting or aching in any part of your body</td> 
				<td> <input type="radio" name="HF11" value="0" /> </td> 
				<td> <input type="radio" name="HF11" value="1" /> </td> 
				<td> <input type="radio" name="HF11" value="2" /> </td> 
			</tr>
			<tr> 
				<td>Getting tired easily</td> 
				<td> <input type="radio" name="HF12" value="0" /> </td> 
				<td> <input type="radio" name="HF12" value="1" /> </td> 
				<td> <input type="radio" name="HF12" value="2" /> </td> 
			</tr>
			<tr> 
				<td>Feeling depressed or sad</td> 
				<td> <input type="radio" name="HF13" value="0" /> </td> 
				<td> <input type="radio" name="HF13" value="1" /> </td> 
				<td> <input type="radio" name="HF13" value="2" /> </td> 
			</tr>
			<tr> 
				<td>Nervousness</td> 
				<td> <input type="radio" name="HF14" value="0"/> </td> 
				<td> <input type="radio" name="HF14" value="1"/> </td> 
				<td> <input type="radio" name="HF14" value="2"/> </td>  
			</tr>

		</table>

		<p class="mtop40 question-title">8. During the past week, how often did you:</p>

		<table class="baseline-table">
			<tr> <th> </th> <th>None</th> <th>Some</th> <th>A Lot</th> </tr>

			<tr> 
				<td>Socialize with other people (talk or visit with friends or relatives)</td> 
				<td> <input type="radio" name="HF15" value="0" /> </td> 
				<td> <input type="radio" name="HF15" value="1" /> </td> 
				<td> <input type="radio" name="HF15" value="2" /> </td> 
			</tr>

			<tr> 
				<td>Take part in social, religious, or recreational activities (meetings, church, movies, sports, parties)</td> 
				<td> <input type="radio" name="HF16" value="0" /> </td> 
				<td> <input type="radio" name="HF16" value="1" /> </td> 
				<td> <input type="radio" name="HF16" value="2" /> </td> 
			</tr>
		</table>

		<p class="mtop40 question-title">9. During the past week, how often did you:</p>

		<table class="baseline-table">

			<tr> <th> </th> <th>None</th> <th>1-4 Days</th> <th>5-7 Days</th> </tr>

			<tr> 
				<td>Stay in your home, a nursing home, or hospital because of sickness, injury, or other health problem</td> 
				<td> <input type="radio" name="HF17" value="0" /> </td>
				<td> <input type="radio" name="HF17" value="1" /> </td> 
				<td> <input type="radio" name="HF17" value="2" /> </td> 
			</tr>

		</table>

		<input type="hidden" name="section" value="2" />

		<input type="submit" value="submit" class="mtop50 mbot40"/>

	</form>

	</div>

</div>

<script src="/assets/js/baseline.js" type="text/javascript" />		