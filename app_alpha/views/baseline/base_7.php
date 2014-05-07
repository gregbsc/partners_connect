<!-- javascript that controls functionality for baseline study is in the javascript file ('baseline.js') -->

<div class="row">

	<div class="container">

		<?php echo form_open($form_direction); ?>
							
		<h4 class="h4 mtop40 tcenter">Baseline Survey</h4>
		
		<?php echo ( isset( $percentDone ) ? $percentDone : "" ); ?>

		<p class="mtop40">21. On a scale from 0 to 10, how ready do you think your partner feels about seeking help for their drinking (for example, talking with a counselor or going to AA meetings regularly).  
			0 = Has not done anything to seek help
			1
			2=  Has talked about seeking help, but has no plans to do so yet 
			3
			4
			5 = Has a plan for seeking help
			5
			7 = Just started seeking help
			8
			9
			10 = Has sought help and plans to continue


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

		<h4 class="h4 mtop50">YOUR RELATIONSHIP</h4>

		<p class="mtop20">The next set of questions asks about your relationship with your partner.  Try to answer all questions as honestly as possible.  Do not spend too much time on any one question.  Give each question a moment’s thought and then answer it.</p>
		<p> Answer all questions with your partner in mind.  Please answer the questions independently of your partner. </p>


		<input type="hidden" name="section" value="7" />
		<input type="submit" value="submit" class="mtop40 mbot40" />

		</form>


	</div>

</div>

<script src="/assets/js/baseline.js" type="text/javascript" />