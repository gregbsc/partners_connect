<!-- javascript that controls functionality for baseline study is in the javascript file ('baseline.js') -->

<div class="row">

	<div class="container">

		<?php echo form_open( $form_direction ); ?>
							
		<h4 class="h4 tcenter mtop40">Baseline Survey</h4>

		<?php echo ( isset( $percentDone ) ? form_progress($percentDone) : "" ); ?>

		<p>Welcome to the PARTNERS CONNECT Survey. The purpose of these questions is to understand how you are currently doing and what your relationship is like. Your answers to this survey will be kept private. That means we will not share your responses with anyone outside the research team.  </p>
			
		<h4 class="h4 mtop40 section-header">YOUR HEALTH</h4>

		<p class="instructions">This first section asks you some general health questions about yourself.</p>

		<p class="mtop40 question-title">1. <strong>Over the <span class="underline">last 2 weeks</span> </strong>, how often have you been bothered by any of the following:</p>

		<table class="baseline-table">

			<tr> <th> </th> <th>Not at all</th> <th>Several days</th> <th>More than half days</th> <th>Nearly everyday</th> </tr>

			<tr> <td>Little interest or pleasure in doing things</td> 
				<td> <input type="radio" name="DEP1" value="0" /> </td> 
				<td> <input type="radio" name="DEP1" value="1" /></td> 
				<td> <input type="radio" name="DEP1" value="2"/>
				</td> <td> <input type="radio" name="DEP1" value="3"/></td> 
			</tr>

			<tr> 
				<td>Feeling down, depressed, or hopeless</td> 
				<td><input type="radio" name="DEP2" value="0" /> </td> 
				<td><input type="radio" name="DEP2" value="1"/>  </td> 
				<td><input type="radio" name="DEP2" value="2"/>  </td> 
				<td><input type="radio" name="DEP2" value="3"/>  </td> 
			</tr>

			<tr> 
				<td>Trouble falling or staying asleep, or sleeping too much</td> 
				<td> <input type="radio" name="DEP3" value="0" /> </td> 
				<td> <input type="radio" name="DEP3" value="1"/> </td> 
				<td> <input type="radio" name="DEP3" value="2"/> </td>  
				<td> <input type="radio" name="DEP3" value="3"/> </td> 
			</tr>

			<tr> 
				<td>Feeling tired or having little energy</td> 
				<td> <input type="radio" name="DEP4" value="0" /> </td> 
				<td><input type="radio" name="DEP4" value="1" /> </td> 
				<td><input type="radio" name="DEP4" value="2"/> </td> 
				<td><input type="radio" name="DEP4" value="3"/> </td> 
			</tr>

			<tr> 
				<td>Poor appetite or overeating</td> 
				<td> <input type="radio" name="DEP5" value="0" /> </td> 
				<td> <input type="radio" name="DEP5" value="1" /> </td> 
				<td> <input type="radio" name="DEP5" value="2"/> </td> 
				<td> <input type="radio" name="DEP5" value="3"/>  </td> 
			</tr>

			<tr> 
				<td>Feeling bad about yourself, or that you are a failure, or have let yourself or your family down</td> 
				<td> <input type="radio" name="DEP6" value="0" /> </td> 
				<td> <input type="radio" name="DEP6" value="1"/>  </td> 
				<td> <input type="radio" name="DEP6" value="2"/>  </td> 
				<td> <input type="radio" name="DEP6" value="3"/>  </td>
			</tr>

			<tr> 
				<td>Trouble concentdating on things, such as reading the newspaper or watching television</td> 
				<td> <input type="radio" name="DEP7" value="0" /> </td> 
				<td> <input type="radio" name="DEP7" value="1"/> </td> 
				<td><input type="radio" name="DEP7" value="2"/> </td> 
				<td><input type="radio" name="DEP7" value="3"/> </td>
			</tr>
			
			<tr> <td>Moving or speaking so slowly that other people could have noticed. Or the opposite – being so fidgety or restless that you have been moving around a lot more than usual</td> 
				<td> <input type="radio" name="DEP8" value="0"/> </td> 
				<td> <input type="radio" name="DEP8" value="1"/> </td> 
				<td> <input type="radio" name="DEP8" value="2"/> </td> 
				<td> <input type="radio" name="DEP8" value="3"/> </td> </tr>
		
		</table>

		<p class="mtop40 question-title">2. Over the last 2 weeks, how often have you been bothered by the following problems?</p>
		
		<table class="baseline-table">

			<tr>
				<th> </th> <th>Not at all</th> <th>Several Days</th> <th>More than half days</th> <th>Nearly everyday</th> 
			</tr>

			<tr> <td>Feeling nervous, anxious, or on edge</td> 
				<td> <input type="radio" value="0" name="ANX1" /> </td> 
				<td> <input type="radio" value="1" name="ANX1"/> </td> 
				<td> <input type="radio" value="2" name="ANX1"/> </td> 
				<td> <input type="radio" value="3" name="ANX1"/> </td> 
			</tr>

			<tr> <td>Not being able to stop or control worrying </td> 
				<td> <input type="radio" value="0" name="ANX2"/> </td> 
				<td> <input type="radio" value="1" name="ANX2"/> </td> 
				<td> <input type="radio" value="2" name="ANX2"/> </td> 
				<td> <input type="radio" value="3" name="ANX2"/> </td> 
			</tr>

			<tr> 
				<td>Worrying too much about different things </td> 
				<td> <input type="radio" value="0" name="ANX3"/> </td> 
				<td> <input type="radio" value="1" name="ANX3"/> </td> 
				<td> <input type="radio" value="2" name="ANX3"/> </td> 
				<td> <input type="radio" value="3" name="ANX3"/> </td> 
			</tr>

			<tr> 
				<td>Trouble relaxing </td> 
				<td> <input type="radio" value="0" name="ANX4"/> </td> 
				<td> <input type="radio" value="1" name="ANX4"/> </td> 
				<td> <input type="radio" value="2" name="ANX4"/> </td> 
				<td> <input type="radio" value="3" name="ANX4"/> </td> 
			</tr>

			<tr> 
				<td>Being so restless that it's hard to sit still </td> 
				<td> <input type="radio" value="0" name="ANX5"/> </td> 
				<td> <input type="radio" value="1" name="ANX5"/> </td> 
				<td> <input type="radio" value="2" name="ANX5"/> </td> 
				<td> <input type="radio" value="3" name="ANX5"/> </td> 
			</tr>

			<tr> 
				<td>Becoming easily annoyed or irritable </td>
				<td> <input type="radio" value="0" name="ANX6"/> </td> 
				<td> <input type="radio" value="1" name="ANX6"/> </td> 
				<td> <input type="radio" value="2" name="ANX6"/> </td> 
				<td> <input type="radio" value="3" name="ANX6"/> </td> 
			</tr>

			<tr> 
				<td>Feeling afraid as if something awful might happen </td> 
				<td> <input type="radio" value="0" name="ANX7"/> </td> 
				<td> <input type="radio" value="1" name="ANX7"/> </td> 
				<td> <input type="radio" value="2" name="ANX7"/> </td> 
				<td> <input type="radio" value="3" name="ANX7"/> </td> 
			</tr>

		</table>

		<p class="mtop40 instructions">Sometimes people need help for personal or emotional issues. These next questions ask about help you might have gotten.</p>

		<p class="question-title mtop20">3. Do you regularly take any prescribed medication for any psychological issues? </p>

		<input type="radio" name="MHHELP1" value="1"> Yes </br>
		<input type="radio" name="MHHELP1" value="0"> No </br>
		

		<p class="question-title mtop40">4. In the past year, did you receive mental health counseling or therapy for personal or emotional issues? </p>

		<input type="radio" name="MHHELP2" value="1" onclick="$('#4a').show()"> Yes </br>
		<input type="radio" name="MHHELP2" value="0" onclick="$('#4a').hide()"> No </br>
	
		<?php // if yes to 4, 4a. Where did you receive mental health counseling or therapy in the past year? (Check all that apply.) // ?>
		
		<div class="cover" id="4a">
			
			<p class="question-title mtop40">4a. Where did you receive mental health counseling or therapy in the past year? (Check all that apply.)</p>

			<p class="checkboxes">

				<input type="checkbox" name="MHHELP3[]" value="1" /> From a mental health professional at a Military Facility 	 						 </br>
				<input type="checkbox" name="MHHELP3[]" value="2" /> From a general medical doctor at a Military Facility 	 							 </br>
				<input type="checkbox" name="MHHELP3[]" value="3" /> From a Military Chaplain 	 														 </br>
				<input type="checkbox" name="MHHELP3[]" value="4" /> From a mental health professional at a civilian facility 	 						 </br>
				<input type="checkbox" name="MHHELP3[]" value="5" /> From a general medical doctor at a civilian facility 	 							 </br>
				<input type="checkbox" name="MHHELP3[]" value="6" /> From a civilian clergy member (for example, from a priest, minister, or rabbi)  	 </br>
				<input type="checkbox" name="MHHELP3[]" value="7" /> From an adult family member or friend 												 </br>
				<span id='other' class='cover'>From some other source: <input type="text" value="" placeholder="Please Specify" name="8"/> <strong> </span> </strong>	</br>

			</p>

		</div>

		<input type="hidden" name="section" value="1" />

		<input type="submit" value="submit" class="mtop20 mbot40" />

		</form>

		<!-- <a href="<?php // echo $form_direction; ?>"><button class="mtop50">Next Section</button></a> -->

	</div>

</div>



<script src="/assets/js/baseline.js" type="text/javascript" />
		