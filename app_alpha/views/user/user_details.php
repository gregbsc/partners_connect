<div class="row">

    <div class="container register-fields">

        <h4 class="h4"><?php echo $user_info->first_name . " " . $user_info->last_name;?> - <a href="/user/">Back to account</a></h4>
        <p class="nomargin"><a href="/user/update/password?uid=<?php echo $user_info->user_id; ?>">Click here to change your password</a></p>
        
        <div>

            <?php $attributes = array('id' => 'personal_details'); ?>
            <?php echo form_open('user/update', $attributes); ?>

                <p class="mtop20">Email ( This cannot be changed )</p>
                <p class="nomargin"><strong><?php echo $user_info->username; ?></strong></p>

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