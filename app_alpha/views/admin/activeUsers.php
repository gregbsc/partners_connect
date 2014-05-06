<?php //display all users within a row // ?>
<div class="row">

	<table style="margin-top:20px;width:100%;margin-left:20px;">

		<tr style="margin-bottom:20px"> 

			<td>Name</td> <td>Email</td> <td> Phone </td> <td>Intial Contact</td> <td>Consent</td> <td>Baseline</td> <td>Last Login</td> <td>Condition</td> <td>Notes</td>

		</tr>

		<?php foreach( $activeUsers as $user ) : ?>

			<tr style="font-size:14px">

				<td> <a href="/admin/user/details/?uid=<?php echo $user->user_id; ?>&type=all"><?php echo $user->first_name; ?> <?php echo $user->last_name; ?> </a> </td> 
				<td> <a href="/admin/user/contact/?uid=<?php echo $user->user_id; ?>"> <?php echo $user->username; ?> </a> </td> 
				<td> <?php echo (isset($user->phone) ? $user->phone : "" ) ?> </td> 
				<td> <?php echo ( isset( $user->initial_contact) && $user->initial_contact == 0 ? "<span class='urgent'>No</span>" : "Yes" ) ; ?>
				<td> <?php echo ( $user->consent == 1 ? "Consent" : "Needs to consent" );  ?> </td>
				<td> <a href="/admin/user/details/?uid=<?php echo $user->user_id; ?>&type=baseline">Baseline Results</a> </td>
				<td> <?php echo date('d, M y', $user->last_login); ?> </td>
				<td> <?php echo ( isset($user->group_condition) && $user->group_condition == 0 ? "WBI" : "Delayed WBI" ); ?></td>
				<td> <a href="/admin/user/notes/?uid=<?php echo $user->user_id; ?>&type=all">Click Here</a> </td>
				<!-- <td><a href="/admin/user/details/?uid=<?php // echo $user->user_id; ?>&type=all">Details</a></td> -->

			</tr>
		
		<?php endforeach; ?>

	</table>

</div>