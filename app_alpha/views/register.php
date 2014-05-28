<div class="row">

    <div class="container register-fields">
        
        <p> Please list your information below and someone from RAND will contact you within 5 business days. He or she will ask a few follow-up questions and discuss next steps with you. </p>
                
        <?php if( isset($user_creation) ) : ?>

            <p class="urgent-message">That username / email already exists.</p>

        <?php endif; ?>

        <?php echo form_open('register'); ?>

        <p>First name</p>
        <input type="text" name="first_name" placeholder="First" required="" />

        <p>Last name</p>
        <input type="text" name="last_name" placeholder="Last" required="" />

        <p>Email address</p>
        <input type="email" name="username" placeholder="email address" required="" />

        <p>Phone Number </p>
        <input type="tel" name="phone" placeholder="" required="" /> </br>

        <p>Best time to contact</p>
        <textarea name='best_time'></textarea> </br>

        <p>Enter time zone</p>
        <input type="text" value="" placeholder="Example: Pacific standard time" name="time_zone" />

        <input type="hidden" name="subid" value="<?php echo $subid; ?>" />

        <input type="submit" value="submit" style="margin-top:20px;" />

        </form>
    
    </div>

</div>