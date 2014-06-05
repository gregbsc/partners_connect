<?php //display all users within a row // ?>

<div class="row">

	<div class="container">

		<?php echo form_open('admin/create'); ?>
			<h4>Create User</h4>
			<p><input type="email" name="username" value="" placeholder="Username / email" required="" /></p>
			<!-- <p><input type="email" name="email" value="" placeholder="Email" required="" /></p> -->
			
			<p><input type="text" name="firstname" value="" placeholder="First Name" required="" /></p>
			<p><input type="text" name="lastname" value="" placeholder="Last Name" required="" /></p>

			<p><input type="text" name="phone" value="" placeholder="Phone" required="" /></p>

			<p><input type="text" name="password" value="" placeholder="Password" required="" /></p>
			<p><input type="submit" value="Create User"/></p>

		</form>

	</div>

</div>