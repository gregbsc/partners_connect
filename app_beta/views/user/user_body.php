<div class="row">

    <div class="container register-fields">

        <p class="h4">Welcome back, <?php echo $user_info->first_name;?> - <a class="md-link"href="/user/update">Edit your details</a></p> 
      
        <div>
            
            <?php echo ( $consent != true ) ? "<a href='/user/consent' class='btn btn-block btn-lg btn-danger user-button'>You need to consent to continue</a>" : "" ; ?>

        	<?php echo ( (isset($user_progress) && $user_progress->baseline == 0) && ($consent == true) )  ? "<a href='{$return_base}' class='btn btn-block btn-lg btn-danger user-button' >Click here to take the baseline survey</a>" : "" ; ?>
        	
            <?php if( isset( $schedule_sessions ) ) : 

                echo "<a href='{$schedule_sessions}' class='btn btn-block btn-lg btn-danger user-button'>Schedule Next Session</a>";

            endif; ?>

            <?php if(isset($all_sessions)) : ?>

                <?php foreach($all_sessions as $session): ?>

                    <?php // print_r($session); ?>
                    
                    <p> <a href="<?php echo "/user/session/{$session->session_number}"; ?>" class="btn btn-block btn-lg btn-inverse button-special" id="start"> <?php echo ( ( isset($session->completed) && $session->completed == 1) ) ? "Click here to review session ".$session->session_number : "Click here to start session ".$session->session_number ?></a> </p>

                <?php endforeach; ?>

            <?php endif; ?>

            <?php // if( isset($start_session) ) : ?>
                 <!-- <a href='<?php echo $start_session ?>'> Start Session </a> -->
            <?php // endif; ?>

            <p class="details nomargin">Last login : <?php echo date("d, M Y", $user_info->last_login); ?> </p>

    	</div>
   
    </div>

</div>