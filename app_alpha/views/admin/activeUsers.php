<?php //display all users within a row // ?>
<div class="row">

	<table style="margin-top:20px;width:100%;margin-left:20px;">

	<tr style="margin-bottom:20px"> <td>Name</td> <td>Email</td> <td>Intial Contact</td> <td>Baseline</td> <td>Consent</td> <td>Last Login</td> <td> Details </td></tr>

		<?php foreach( $activeUsers as $user ) : ?>
		
			<tr style="font-size:14px">

				<td><?php echo $user->first_name; ?> <?php echo $user->last_name; ?> </td> 
				<td> <a href="/admin/user/contact/?uid=<?php echo $user->user_id; ?>"> <?php echo $user->username; ?> </a> </td> 
				<td> <?php echo ( isset( $user->initial_contact) && $user->initial_contact == 0 ? "<span class='urgent'>Need to contact</span>" : "Contacted" ) ; ?>
				<td><a href="/admin/user/details/?uid=<?php echo $user->user_id; ?>&type=baseline">Baseline Results</a></td>
				<td><?php echo ( $user->consent == 1 ? "Consent" : "Needs to consent" );  ?></td>
				<td> <?php echo date('d, M y', $user->last_login); ?></td>
				<td><a href="/admin/user/details/?uid=<?php echo $user->user_id; ?>&type=all">Details</a></td>

			</tr>
		
		<?php endforeach; ?>

	</table>

</div>