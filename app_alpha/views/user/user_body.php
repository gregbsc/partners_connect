<div class="row">

    <div class="container register-fields">

        <p class="h4">Welcome back, <?php echo $user_info->first_name;?> - <a class="md-link"href="/user/update">Edit your details</a></p> 
      

        <div>
            
        	<?php 

            if( isset($user_progress) ) : 
                echo ( $consent != true ) ? "<a href='/user/consent' class='btn btn-block btn-lg btn-danger user-button'>You need to consent to continue</a>" : "" ;
        		echo ( ( $user_progress->baseline == 0 ) && ( $consent == true ) )  ? "<a href='/user/baseline' class='btn btn-block btn-lg btn-danger user-button' >Click here to take the baseline survey</a>" : "" ;
        	endif; 

            if( isset( $schedule_sessions ) ) : 

                echo "<a href='{$schedule_sessions}' class='btn btn-block btn-lg btn-danger user-button'>Schedule Sessions</a>"; 

            endif;

            ?>



            <!-- <p><a href="/user/update">Edit your details</a></p> -->

            <!-- <p class="mtop50">You may opt out at any time. To do so click <a href="/user/consent">HERE</a>, and select "Opt out"</p> -->
            <p class="details nomargin">Last login : <?php echo date("d, M Y", $user_info->last_login); ?> </p>

    	</div>
   
    </div>

</div>