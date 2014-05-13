<div class="row">

    <div class="container register-fields">
        
        <p> If you are interested, please list your information below and someone from RAND will contact you within 5 business days to share more about the project, ask a few follow-up questions, and discuss next steps with you. We will keep your contact information confidential and secure, and will only call you to tell you more about this project. After we talk, you can decide whether or not you would like to be involved in the project. Participation is entirely voluntary and confidential and there will be no consequences if you decide not to participate. If you’re not interested, no worries, we will safely discard your contact information and won’t contact you again. </p>
                
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

        <p>Phone Number ( format : 555-555-5555 ) </p>
        <input type="tel" name="phone" placeholder="" required="" /> </br>

        <input type="hidden" name="subid" value="<?php echo $subid; ?>" />

        <input type="submit" value="submit" style="margin-top:20px;" />

        </form>
    
    </div>

</div>