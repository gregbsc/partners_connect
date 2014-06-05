<div class="row">

	<div class="container cust-grey">

		<?php if(isset($previous_link)): ?> <div class="left bottom-nav"> <a href='<?php echo $previous_link; ?>'> <button class="btn"> Previous </button> </a> </div> <?php endif; ?>
		
		<?php if(isset($next_link)): ?> <div class="right bottom-nav <?php echo $required; ?>"> <a href='<?php echo $next_link; ?>'> <button class="btn btn-success"> Next </button> </a> </div> <?php endif; ?>

	</div>

</div>