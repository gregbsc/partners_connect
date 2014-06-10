<div class="row">

	<div class="container">
		
		<div class="safe-wrap mtop40">
			<p class="session-title"> Session <?php echo $session; ?> </p>
			<h4 class="h4 page-title"> <?php echo $page_data->title; ?> </h4>
		</div>

		<hr>

		<div class="col-md-5 nomargin">

			<?php if(isset($page_data->audio)) : ?>
				<div class="audio">
					<p> <?php echo $page_data->audio; ?> </p>
				</div>
			<?php endif; ?>

		<?php if(isset($video_content)) : ?>
			
			<div class="char-container ">

			<?php $contentCount = 0; ?>
			<?php foreach($video_content as $content_sesction): ?>

				<?php
				if( $contentCount != $default_char ) {
					$activeClasses = "possible " . $contentCount;
				} else {
					$activeClasses =  "possible " . $contentCount . " hidden";
				} ?>
				
				<p class="<?php echo $activeClasses; ?>"> <img src="http://placehold.it/200x20<?php echo $contentCount; ?>" /> </p>
				
				<?php $contentCount++; ?>
				<?php unset($activeClasses); ?>

			<?php endforeach; ?>

			</div>

		<?php endif; ?>

		</div>

		<div class="col-md-7">

			<div class="main-content show-logic">

			<?php if(isset($video_content)): ?>

				<?php $count = 0; ?>
				<?php foreach($video_content as $video): ?>

					<?php
					if( $count == $default_char ) {
						$activeClasses = "default";
					} else {
						$activeClasses = "hidden";
					} ?>
					<div class="<?php echo $activeClasses . " " . $count; ?>">
						<p> <iframe src="//player.vimeo.com/video/<?php echo $video->vimeo_id; ?>?title=0&byline=0&portrait=0" width="610" height="350" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> </p>
						<div> <?php echo $video->video_content; ?> </div>
					</div>

					<?php $count++; ?>
					<?php unset($activeClasses); ?>

				<?php endforeach; ?>

			<?php endif; ?>

			</div>
			
		</div>

	</div>

</div>

<script>

	$('.possible').each( function() {

		$(this).click( function() { 

			selectedClass = $(this).attr('class').split(' ')[1];
			$(this).addClass('hidden');
			$(this).siblings().removeClass('hidden');
			useCLass = "."+selectedClass;
	
			$('.show-logic').children().addClass('hidden');
			$('.show-logic').children(useCLass).removeClass('hidden');
			
		});

	});

</script>

<?php $this->load->view('user/sessions/navigation', $links); ?>