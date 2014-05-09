<div class="row">

    <div class="container register-fields">

        <p class="h4">Welcome back, <?php echo $user_info->first_name;?> - <a class="md-link"href="/user/update">Edit your details</a></p> 
      

        <div>
            
        	<?php 

             
                echo ( $consent != true ) ? "<a href='/user/consent' class='btn btn-block btn-lg btn-danger user-button'>You need to consent to continue</a>" : "" ;
        		echo ( (isset($user_progress) && $user_progress->baseline == 0) && ($consent == true) )  ? "<a href='{$return_base}' class='btn btn-block btn-lg btn-danger user-button' >Click here to take the baseline survey</a>" : "" ;
        	

            if( isset( $schedule_sessions ) ) : 

                echo "<a href='{$schedule_sessions}' class='btn btn-block btn-lg btn-danger user-button'>Schedule Next Session</a>"; 

            endif;

            ?>

            <p class="details nomargin">Last login : <?php echo date("d, M Y", $user_info->last_login); ?> </p>

    	</div>
   
    </div>

</div>