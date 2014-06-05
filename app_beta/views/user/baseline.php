<div class="row">

	<div class="container">

	    <div class="form-group">

	      <h4 class="h4">Baseline survey</h4>

	      <p>Choose the time for your next session.</p>

	    	<?php echo form_open('user/schedule'); ?>

	    		<select>
	    			
	    			<?php foreach($schedule_options as $option) : ?>

	    				<?php echo $option->time; ?>

	    			<?php endforeach; ?>

	    		</select>

	  		</form>

	    </div>          
         
  	</div>

</div>