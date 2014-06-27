<div class="row">

    <div class="container register-fields">

        <?php if(!isset($message)) : ?>

            <?php echo form_open('/user/lost'); ?>
            <p>Enter your address to reset your password.</p>
            <input type="text" name="uemail" placeholder="Email address here." required="" /> </br>
            <input type="submit" value="submit" style="margin-top:20px;" />
            </form>

        <?php else: ?>

            <h4 class="h4"> <?php echo $message; ?> </h4>           

        <?php endif; ?>

        <?php if(isset($password_post_url)) : ?>

            <?php echo form_open($password_post_url); ?>

            <input type="password" name="password" /> </br>

            <input type="submit" value="submit" class="mtop20"/>

        <?php endif; ?>

        <p>If you are having trouble changing your password, click <a href="/user/update/password">HERE</a> to restart the process. </p>

    </div>

</div>