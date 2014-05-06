<?php //display all deactivated users within a row // ?>

<div class="email-wrapper">

	<h4 class="h4"> User Notes  </h4>
	
	<div class="email-box">

		<?php echo form_open( $post_string ); ?>

			<p class="form-element"> Title </p>

			<p><input type="text" name="note_title"/></p>
			
			<p class="form-element"> Body </p>
			<p><textarea name="note_body"/> </textarea></p>

			<input type="submit" value="submit"/> 

		</form>
		
	</div>

</div>