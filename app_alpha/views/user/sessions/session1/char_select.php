<div class="row">

	<div class="container">
		
		<div class="safe-wrap mtop40">
			<p class="session-title"> Session <?php echo ( isset($session) ? $session : "") ; ?> </p>
			<h4 class="h4 page-title"> <?php echo ( isset($page_data->title) ? $page_data->title : "") ; ?> </h4>
		</div>

		<hr>


		<div class="col-md-7">

			<div class="char-portal">	

				<h4 class="h4 choose-char"> Choose your character </h4>
				<p class="char-unit"> <img src="/assets/img/char/Christina_burgandy_shirt.jpg" class="character img-responsive" id="10" /> </p>
				<p class="char-unit"> <img src="/assets/img/char/Jessica_light_blue_shirt.jpg" class="character img-responsive" id="1" /> </p>
				<p class="char-unit"> <img src="/assets/img/char/Michelle_burgandy_shirt.jpg" class="character img-responsive" id="2" /> </p>

			</div>
			
		</div>

	</div>

</div>

<script>

	//move to js file
	$(document).ready( function() { 

		$('.character').each(function() {

			$(this).click( function() {

				newId = $(this).attr('id');

				$.post( "/ajax/update", { action: "personality", character: newId } ).done( function( data ) {

					console.log( "Profile Update attempt :" + data );
					$('.choose-char').html('Thank you for choosing a character. You will now start the session.');

					window.setTimeout( start_session_1, 5000 )

				});

			});

		});

	});

	function start_session_1() {
		$(window.location.replace('/user/session/1/1'));
	}

</script>

<?php // $this->load->view('user/sessions/navigation', $links); ?>