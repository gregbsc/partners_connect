<div class="row">

	<div class="container">

		<h1> Session 1 feedback form </h1>

		<h4 class="h4">Session feedback </h4>

		<form id="required-completion">

			<p>Help your loved one stop drinking (0-4 ruler)</p>

			<p>Relieve your emotional distress (0-4 ruler) </p>

			<p>Get your loved one into treatment (0-4 ruler)</p>

			<p>Learn how to support your loved one’s sobriety (0-4 ruler)</p>

			<p>Increase your loved one’s motivation for change (0-4 ruler)</p>

			<p>Help you help your family (0-4 ruler) </p>

			<p>Learn how to communicate more effectively (0-4 ruler)</p>

			<p>Is there another goal important to you not on this list? [type in goal]</p>
			<p> <textarea name="other_goal"> </textarea>

			<input type="hidden" name="session" value="<?php echo $session; ?>" />
			<input type="hidden" name="page" value="<?php echo $page; ?>" />

			<input type="hidden" name="location" value="goals" />

			<?php // feedback action finishes session AND processes form ??> 
			<input type="hidden" name="action" value="feedback" />

		</form>

		<button id="submit-form" class="mbot40"> Submit </button>

	</div>

</div>