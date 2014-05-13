<div class="row">

    <div class="container register-fields">

         <h4 class="h4">Schedule your next session - <a href='/user/'>Click here to go back</a> </h4>

         <p> ** Under Development ** </p>

        <?php if(isset($password_post_url)) : ?>

            <?php echo form_open($password_post_url); ?>

            <input type="password" name="password" /> </br>

            <input type="submit" value="submit" class="mtop20"/>

        <?php endif; ?>

    </div>

</div>