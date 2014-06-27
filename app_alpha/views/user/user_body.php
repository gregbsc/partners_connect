<div class="row">

    <div class="container register-fields">

        <p class="h4">Welcome back, <?php echo $user_info->first_name;?> - <a class="md-link"href="/user/update">Edit your contact information</a></p> 
      
        <main>
            
        	<?php echo ( (isset($user_progress) && $user_progress->baseline == 0) && ($consent == true) )  ? "<a href='{$return_base}' class='btn btn-block btn-lg btn-danger user-button' >Click here to take the baseline survey</a>" : "" ; ?>
        	
            <?php if( isset( $schedule_sessions ) ) : 

                echo "<a href='{$schedule_sessions}' class='btn btn-block btn-lg btn-danger user-button'>Schedule Next Session</a>";

            endif; ?>

            <?php echo ( $user_progress->consent == 2 ) ? "Thank you for your interest in this study. If you decide to participate, please click on the button above. If you do not want to participate in the study, thank you for your time and feel free to check out our resources above." : "" ; ?>

            <?php if(isset($all_sessions)) : ?>

                <?php foreach($all_sessions as $session): ?>

                    <?php if( strtotime($session->date) < now() || $session->completed == 1) : ?>
                    
                        <p> <a href="<?php echo "/user/session/{$session->session_number}"; ?>" class="btn btn-block btn-lg btn-inverse button-special" id="start"> <?php echo ( ( isset($session->completed) && $session->completed == 1) ) ? "Click here to review session ".$session->session_number : "Click here to start session ".$session->session_number ?></a> </p>
                    
                    <?php endif; ?>

                <?php endforeach; ?>

            <?php endif; ?>

            <?php echo ( $consent != true ) ? "<a href='/user/consent' class='btn btn-block btn-lg btn-danger user-button'>You need to consent to continue</a>" : "<a href='/user/consent' class='btn btn-block btn-lg btn-danger user-button'>Change Consent Status</a>" ; ?>
            
            <p class="details mtop40">Last login : <?php echo date("d, M Y", $user_info->last_login); ?></p>

    	</main>
   
    </div>

</div>