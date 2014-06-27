<?php //display all users within a row // ?>

<div class="row">

	<div class="container">

		<table style="margin-top:20px;width:100%;margin-left:20px;">
			
			<tr>
				<th>Action</th> <th> Title </th> <th> Run Time </th> <th> Content </th> 
			</tr>

			<?php if( isset($events) ) : foreach ( $events as $event ) : ?>
				
		
				<tr style="height:50px">
					<td> <?php echo $event->action; ?> </td> <td> <?php echo $event->title; ?> </td> <td> <?php echo $event->run_time; ?> </td> <td style="max-width:350px;"> <?php echo $event->message ;?> </td>
				</tr>
			
			<?php endforeach;  endif; ?>

		</table>

	</div>

</div>