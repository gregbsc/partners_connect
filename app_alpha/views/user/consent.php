<div class="row">
	<div class="container">


    <div class="form-group">

      <h4 class="h4">Consent Form - content to be added soon</h4>

      <?php $attributes = array('consent' => 'consent_form'); ?>
      <?php echo form_open('user/consent', $attributes); ?>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <p>By choosing to take part in this study... option below</p>
        
        <select name="consent_box">
          <option>Select option : </option>
          <option value="1">I consent</option>
          <option value="2">I do not consent</option>
          <option value="3">Opt Out</option>
        </select>

        <input class="mtop50" type="hidden" name="user_id" value="<?php echo $user_id; ?>" /> </br>

        <input class="mtop50" type="submit" value="submit" />

      </form>

    </div>          
         
  </div>

</div>