<?php //display all deactivated users within a row // ?>

<div class="email-wrapper">

	<h4 class="h4"> Contact  </h4>
	
	<div class="email-box">

		<?php if($this->input->get('uid')) {
			$uid = $this->input->get('uid');
			$uid_string = "/admin/user/contact/?uid=".$uid;
		} else {
			$uid_string = "/admin/user/contact/";
		} ?>

		<?php echo form_open( $uid_string ); ?>

			<p class="form-element"> TItle </p>
			<p><input type="text" name="email_title"/></p>
			
			<p class="form-element"> Contact Type </p>

			<p><select name="email_type"> 
				<option>General</option>
				<option>Gift Card</option>
				<option>Follow Up</option>
				<option>Initial Contact</option>
			</select></p>
			
			<p class="form-element"> Message </p>
			<p><textarea name="email_body"/> </textarea></p>

			<input type="submit" value="submit"/> 

		</form>

	</div>

</div>