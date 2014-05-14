<!-- javascript that controls functionality for baseline study is in the javascript file ('baseline.js') -->

<div class="row">

	<div class="container">

		<?php echo form_open($form_direction); ?>
							
		<h4 class="h4 mtop40 tcenter">Baseline Survey</h4>
		
		<?php echo ( isset( $percentDone ) ? form_progress($percentDone) : "" ); ?>

		<p class="mtop40">21. On a scale from 0 to 10, how ready do you think your partner feels about seeking help for their drinking (for example, talking with a counselor or going to AA meetings regularly).  
		
		<table class="top-number-radio">
			
			<tr> 
				<td>0 = Has not done anything to change his/her drinking</td> <td>1</td> <td>2= Has talked about changing, but has no plans to do so yet</td> <td>3</td> <td>4</td> <td>5 = Has a plan for changing</td> <td>6</td> <td>7 = Just started to change</td> <td>8</td> <td>9</td> <td> <strong>10= Has started to change and plans to continue</strong> </td> 
			</tr>

			<tr> 
				<?php table_row_top( 0, 10, '', 'CPD2' ); ?>
			</tr>

		</table>

		<p class="mtop40">22. In the past three months, how often did you…</p>

		<table class="baseline-table">
			<tr> <th>Never or only once</th><th>Sometimes</th><th>Frequently</th><th>Frequently</th><th>Always or almost always</th> </tr>

			<tr> 
				<td>Try to stop your partner's drinking by getting angry?</td>
				<?php table_row( 1, 4, '', 'INT1' ); ?>
			</tr>
			<tr> 
				<td>Have arguments about your partner’s drinking while he/she was drinking?</td>
				<?php table_row( 1, 4, '', 'INT2' ); ?>
			 </tr>
			<tr> 
				<td>Show how unhappy you were when your partner was drinking?</td>
				<?php table_row( 1, 4, '', 'INT3' ); ?>
			</tr>

			<tr> 
				<td>Try to scare your partner from drinking by giving warnings?</td>
				<?php table_row( 1, 4, '', 'INT4' ); ?>
			</tr>
			<tr> 
				<td>Tell your partner the things that he/she did when he/she was drunk?</td>
				<?php table_row( 1, 4, '', 'INT5' ); ?>
			</tr>
			<tr> 
				<td>Spend more time with your partner when he/she was not drinking?</td>
				<?php table_row( 1, 4, '', 'INT6' ); ?>
			</tr>
			<tr> 
				<td>Do things your partner likes when he/she was not drinking?</td>
				<?php table_row( 1, 4, '', 'INT7' ); ?>
			</tr>
			<tr> <td>Give your partner compliments when he/she was not drinking?</td>
				<?php table_row( 1, 4, '', 'INT8' ); ?>
			</tr>
			<tr> 
				<td>Enjoy your partner's company when he/she was not drinking?</td>
				<?php table_row( 1, 4, '', 'INT9' ); ?>
			</tr>
			<tr> <td>Do special things for your partner when he/she was not drinking?</td>
				<?php table_row( 1, 4, '', 'INT10' ); ?> 
			</tr>
			<tr> <td>Support your partner when he/she was having trouble staying sober?</td>
				<?php table_row( 1, 4, '', 'INT11' ); ?>
			<tr> 
				<td>Arrange non-drinking social outings with your partner?</td>
				<?php table_row( 1, 4, '', 'INT12' ); ?>
			</tr>
			<tr> 
				<td>When your partner was not drinking, how much did you enjoy each other?</td>
				<?php table_row( 1, 4, '', 'INT13' ); ?>
			</tr>
			<tr> 
				<td>Bring alcoholic beverages home?</td>
				<?php table_row( 1, 4, '', 'INT14' ); ?> 
			</tr>
			<tr> 
				<td>Do things your partner likes when he/she was drinking?</td>
				<?php table_row( 1, 4, '', 'INT15' ); ?>
			</tr>
			<tr> 
				<td>Support your partner to have "just two or three" drinks?</td>
				<?php table_row( 1, 4, '', 'INT16' ); ?>
			</tr>
			<tr> 
				<td>Refuse be home with your partner when he/she was drinking?</td>
				<?php table_row( 1, 4, '', 'INT17' ); ?>
			</tr>
			<tr> 
				<td>Keep out of your partner's way when he/she was drunk?</td>
				<?php table_row( 1, 4, '', 'INT18' ); ?>
			</tr>
			<tr> 
				<td>Go out alone when your partner was drinking?</td>
				<?php table_row( 1, 4, '', 'INT19' ); ?>
			</tr>
			<tr> 
				<td>Refuse to take care of your partner when he/she was drunk?</td>
				<?php table_row( 1, 4, '', 'INT20' ); ?>
			</tr>

		</table>

		<input type="hidden" name="section" value="6" />
		<input type="submit" value="submit" class="mtop40 mbot40" />

		</form>


	</div>

</div>

<script src="/assets/js/baseline.js" type="text/javascript" />