<div class="row">

    <div class="container register-fields">

        <?php // print_r($user_progress); ?> 
        <h4 class="h4">Welcome back, <?php echo $user_info->first_name;?> </h4>
        <p class="details">Last login : <?php echo date("d, M Y", $user_info->last_login); ?> </p>

        <div>
            
        	<?php if( isset($user_progress) ) : ?>

        		<?php echo ( $consent != true ) ? "<p class='urgent-message'> <a href='/user/consent'>You need to consent to continue</a> </p>" : "" ; ?>
        		<?php echo ( ( $user_progress->baseline == 0 ) && ( $consent == true ) )  ? "<p> <a href='/user/baseline'>Click here to take the baseline survey</a> </p>" : "" ; ?>

        	<?php endif; ?>

            <p>You may opt out at any time. To do so click <a href="/user/consent">HERE</a>, and select "Opt out"</p>

    	</div>
   
    </div>

</div>