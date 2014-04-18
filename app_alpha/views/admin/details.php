<?php //display all deactivated users within a row // ?>

<div class="row">

	<div class="container">

		<h4 class="h4">Baseline Survey</h4>

		<?php 
		echo "Submitted from IP address : ";
		echo ( isset( $baseline_results[0]->user_ip ) ) ?  $baseline_results[0]->user_ip : "No recorded IP"; 
		?>

		<ul style="padding-left:5px;list-style:none;">

			<?php foreach( $baseline_results as $question ) : ?>

				<li> <?php echo $question->question_name; ?> : <?php echo $question->question_response; ?> </pre> </li>

			<?php endforeach; ?>

		</ul>

	</div>

</div>