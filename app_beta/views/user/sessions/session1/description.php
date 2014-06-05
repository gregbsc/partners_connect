<div class="row">

	<div class="container">
		
		<div class="safe-wrap mtop40">
			<p class="session-title"> Session <?php echo $session; ?> </p>
			<h4 class="h4 page-title"> <?php echo $page_data->title; ?> </h4>
		</div>

		<hr>

		<div class="col-md-5 nomargin">

			<?php if(isset($page_data->content)): ?>
			
				<p> <?php echo $page_data->content; ?> </p>

			<?php endif; ?>

		</div>

		<div class="col-md-7">

			<div class="main-content show-logic">

			<?php if(isset($video_content)): ?>

				<p> <iframe src="//player.vimeo.com/video/<?php echo $video_content[0]->vimeo_id; ?>?title=0&byline=0&portrait=0" width="610" height="350" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> </p>
				
			<?php endif; ?>

			</div>
			
		</div>

	</div>

</div>


<?php $this->load->view('user/sessions/navigation', $links); ?>