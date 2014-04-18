<div class="row">

    <div class="container register-fields">

        <?php // print_r($user_progress); ?> 
        <h4 class="h4">Welcome back, </h4>
        <div>
        	<?php if( isset($user_progress) ) : ?>
        	
        		<p class="urgent-message"> <a href="/user/consent"><?php echo ( $user_progress->consent == 0 ) ? "You need to consent to continue" : "" ; ?></a> </p>
        		<p class="urgent-message"> <a href="/user/baseline"><?php echo ( $user_progress->baseline == 0 ) ? "You need to take the baseline survey" : "" ; ?></a> </p>

        	<?php endif; ?>

    	</div>
        <!-- <pre style="margin-top:20px;"> <?php // isset($user_info) ? print_r($user_info) : "not set"; ?> </pre> -->
    </div>

</div>