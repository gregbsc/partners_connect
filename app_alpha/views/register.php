<div class="row">

    <div class="container register-fields">
        <p> If you are interested, you can list your contact information below and someone from RAND will contact you within 5 business days 
             to share more about the project, ask a few follow-up questions, and discuss next steps with you.  After talking with RAND study staff, you can decide whether or not you would like to be involved in the project. 
             Participation is entirely voluntary and confidential and there will be no consequences if you decide not to participate. </p>
        <h4 class="h4" style="margin-top:30px;margin-bottom:20px;">Register</h4>

        <?php echo form_open('register'); ?>

        <p>First name</p>
        <input type="text" name="first_name" placeholder="First" required="" />

        <p>Last name</p>
        <input type="text" name="last_name" placeholder="Last" required="" />

        <p>Email address (used for contact and as your username)</p>
        <input type="text" name="username" placeholder="email address" required="" />

        <p>Phone Number</p>
        <input type="text" name="phone" placeholder="555-555-5555" required="" />

        <p>Pin number (to access your account)</p>
        <input type="password" name="password" placeholder="1234" required="" /> </br>

        <input type="hidden" name="subid" value="<?php echo $subid; ?>" />

        <input type="submit" value="submit" style="margin-top:20px;" />
        </form>
    
    </div>

</div>