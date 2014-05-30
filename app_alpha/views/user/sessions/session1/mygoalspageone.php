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

			<?php echo main_content( $page_data->content ); ?>

		</div>

		<div class="col-md-7">

			<?php if(isset($custom_form)): ?>
				<?php $this->load->view($custom_form); ?>
			<?php endif; ?>

			<div class="main-content">
 

			</div>
			
		</div>

	</div>

</div>

<?php $this->load->view('user/sessions/navigation', $links); ?>