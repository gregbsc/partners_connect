<!-- javascript that controls functionality for baseline study is in the javascript file ('baseline.js') -->

<div class="row">

	<div class="container">

		<?php echo form_open($form_direction); ?>
							
		<h4 class="h4 tcenter mtop40">Baseline Survey</h4>
		
		<?php echo ( isset( $percentDone ) ? $percentDone : "" ); ?>

		<p class="mtop40">Sometimes people need help for personal or emotional issues. These next questions ask about help you might have gotten.</p>

		<p>3. Do you regularly take any prescribed medication for any psychological issues? </p>

		<select name="MHHELP1" required class="mbot40">
			<option selected="selected" disabled="disabled">Select One</option>
			<option value="Yes">Yes</option>
			<option value="No">No</option>
		</select>

		<p>4. In the past year, did you receive mental health counseling or therapy for personal or emotional issues? </p>

		<select name="MHHELP2" required class="mbot40">
			<option selected="selected" disabled="disabled">Select One</option>
			<option value="Yes">Yes</option>
			<option value="No">No</option>
		</select>

		<?php // if yes to 4, 4a. Where did you receive mental health counseling or therapy in the past year? (Check all that apply.) // ?>

		<p>4a. Where did you receive mental health counseling or therapy in the past year? (Check all that apply.)</p>

		<p class="custom-q-wrapper" style="max-width:500px;">
			From a mental health professional at a Military Facility 	 						<input type="checkbox" name="MHHELP3" value="1" class="fright" /> </br>
			From a general medical doctor at a Military Facility 	 							<input type="checkbox" name="MHHELP3" value="2" class="fright"/> </br>
			From a Military Chaplain 	 														<input type="checkbox" name="MHHELP3" value="3" class="fright"/> </br>
			From a mental health professional at a civilian facility 	 						<input type="checkbox" name="MHHELP3" value="4" class="fright"/> </br>
			From a general medical doctor at a civilian facility 	 							<input type="checkbox" name="MHHELP3" value="5" class="fright"/> </br>
			From a civilian clergy member (for example, from a priest, minister, or rabbi)  	<input type="checkbox" name="MHHELP3" value="6" class="fright"/> </br>
			From an adult family member or friend 												<input type="checkbox" name="MHHELP3" value="7" class="fright"/> </br>
			From some other source: <input type="text" value="" placeholder="Please Specify" /> [8 (& 9 if applicable)] Question <--	</br>
		</p>
		

		<p class="mtop40">5. Here are some questions about your health and feelings.  Please read each question carefully and indicate your best answer.  You should answer the questions in your own way.  There are no right or write answers.</p>
		
		<table class="baseline-table">

			<tr> 
				<th> </th> <th>Yes, describes me exactly</th> <th>Somewhat describes me</th> <th>No, doesn’t describe me at all</th> 
			</tr>

			<tr> 
				<td>I like who I am</td> 
				<td> <input type="radio" value="2" name="HF1" required=""/> </td> 
				<td> <input type="radio" value="1" name="HF1"/> </td> 
				<td> <input type="radio" value="0" name="HF1"/> </td> 
			</tr>

			<tr> 
				<td>I am not an easy person to get along with</td> 
				<td> <input type="radio" value="2" name="HF2" required=""/> </td> 
				<td> <input type="radio" value="1" name="HF2"/> </td> 
				<td> <input type="radio" value="0" name="HF2"/> </td> 
			</tr>

			<tr> 
				<td>Trouble falling or staying asleep, or sleeping too much? </td> 
				<td> <input type="radio" value="2" name="HF3" required=""/> </td> 
				<td> <input type="radio" value="1" name="HF3"/> </td> 
				<td> <input type="radio" value="0" name="HF3"/> </td> 
			</tr>

			<tr> 
				<td>I give up too easily </td> 
				<td> <input type="radio" value="2" name="HF4" required=""/> </td> 
				<td> <input type="radio" value="1" name="HF4"/> </td> 
				<td> <input type="radio" value="0" name="HF4"/> </td> 
			</tr>

			<tr> 
				<td>I have difficulty concentrating</td> 
				<td> <input type="radio" value="2" name="HF5" required=""/> </td> 
				<td> <input type="radio" value="1" name="HF5"/> </td> 
				<td> <input type="radio" value="0" name="HF5"/> </td> 
			</tr>

			<tr> 
				<td>I am happy with my family relationships </td>
				<td> <input type="radio" value="2" name="HF6" required=""/> </td> 
				<td> <input type="radio" value="1" name="HF6"/> </td> 
				<td> <input type="radio" value="0" name="HF6"/> </td> 
			</tr>

			<tr> 
				<td>I am comfortable being around people </td> 
				<td> <input type="radio" value="2" name="HF7" required=""/> </td> 
				<td> <input type="radio" value="1" name="HF7"/> </td> 
				<td> <input type="radio" value="0" name="HF7"/> </td> 
			</tr>
			
		</table>

		<p class="mtop40">6. Today would you have any physical trouble or difficulty:</p>
		
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

		<input type="submit" value="submit" class="mtop50"/>

		</form>

	</div>

</div>

<script src="/assets/js/baseline.js" type="text/javascript" />		