<?php //display all users within a row // ?>


	<table style="margin-top:20px;width:100%;margin-left:20px;" class="display" id="users-table" cellspacing="0">
		
		<thead>

			<tr>

				<th>ID</th> <th>PW Sent</th> <th>Informed Consent</th> <th>BL Completed</th> <th>Last Login</th> <th>Condition</th> <th>U1</th> <th>U2</th> <th>U3</th> <th>U4</th>

			</tr>

		</thead>

		<tbody>

			<?php foreach( $activeUsers as $user ) : ?>

				<tr style="font-size:14px">

					<?php // more logic than should be put in view but I did not see a better solution given time and framework // ?>
					<td> <a href="/admin/user/details/?uid=<?php echo $user->user_id; ?>&type=all"><?php echo $user->user_id; ?> </a> </td> 
					<!-- <td> <?php // echo (isset($user->phone) ? $user->phone : "" ) ?> </td>  -->
					<td> <?php echo ( isset( $user->initial_contact) && $user->initial_contact == 0 ? "<span class='urgent'>No</span>" : "Yes" ) ; ?> </td>
					<td> <?php echo ( $user->consent == 1 ? "Consent" : "Needs to consent" );  ?> </td>		
					<td> <?php echo ( isset($user) && $user->baseline == 1 ? date('m-d-y', strtotime($user->baseline_completed)) : "" ); ?> </td>
					<td> <?php echo date('m-d-y', $user->last_login); ?> </td>
					<td> <?php echo ( isset($user->group_condition) && $user->group_condition == 0 ? "WBI" : "Delayed WBI" ); ?></td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>

				</tr>
			
			<?php endforeach; ?>

		</tbody>

	</table>
