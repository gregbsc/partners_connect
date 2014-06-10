<div class="row">

    <div class="container register-fields">

    	<?php // echo ( isset($next_registered->date) ? "<p> Next session scheduled for : " . date('m-d-y', strtotime($next_registered->date)) . "</p>" : "" ); ?>

        <h4 class="h4">Schedule your next session - <a href='/user/'>Or click here to go back</a> </h4>

        <?php if(isset($next_options)) : ?>

        	<?php $attributes = array('id' => 'schedule_form'); ?>
        	<?php echo form_open('/user/schedule',$attributes); ?>

        	<select name="baseline_time" id="baseline_time">

        		<option value="default">Choose day below</option>

	        	<?php foreach($next_options as $next) : ?>
					<option value='<?php echo $next; ?>'> <?php echo date('M d',$next); ?></option> 
				<?php endforeach; ?>

        	</select> </br>

        	<!-- <input type="hidden" name="session"	value="" /> -->
    
    	</form>

		<button id="submit-time" class="mtop20">Submit</button>

		<?php else: ?>

			<p>No action required at this time</p>

		<?php endif; ?>

    </div>

</div>

<script>

	$('#submit-time').click( function(){

		select_date = $('#baseline_time').val();
		
		if(select_date != 'default' && !isNaN(select_date)) {
			$('#schedule_form').submit();
		}

	});

</script>