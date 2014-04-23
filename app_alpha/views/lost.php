<div class="row">

    <div class="container register-fields">

        <?php //if(isset($lost_message)) : ?>

        <?php //echo "<p>".$lost_message."</p>"; ?> 

    	<?php // endif; ?>

        <p>If you lost your pin number simply submit your email address below. If you have an account an email reset form will be sent to you.</p>
        <?php echo form_open('user/lost'); ?>

        <p>Email address (used for contact and as your username)</p>
        <input type="email" name="username" placeholder="email address" required="" />

        <!-- <input type="hidden" name="subid" value="<?php // echo $subid; ?>" /> -->

        <input type="submit" value="submit" style="margin-top:20px;" />
        </form>
    
    </div>

</div>