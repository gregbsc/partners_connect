<div class="row">

    <div class="container register-fields">

        <h4 class="h4"><?php echo $user_info->first_name . " " . $user_info->last_name;?> </h4>

        <div>
            <p><a href="/user/">Back to account</a></p>

            <?php $attributes = array('id' => 'personal_details'); ?>
            <?php echo form_open('user/update', $attributes); ?>

                <p>Email (This cannot be changed)</p>
                <p style="margin-top:0;"><strong><?php echo $user_info->username; ?></strong></p>

                 <p>First name</p>
                <input type="text" name="first_name" placeholder="First" required="" value="<?php echo $user_info->first_name; ?>"/>

                <p>Last name</p>
                <input type="text" name="last_name" placeholder="Last" required="" value="<?php echo $user_info->last_name; ?>" />

                <p>Phone Number</p>
                <input type="tel" name="phone" placeholder="" value="<?php echo $user_info->phone; ?>" /> </br>

                <input type="submit" value="submit" class="mtop20" />

            </form>

    	</div>
   
    </div>

</div>