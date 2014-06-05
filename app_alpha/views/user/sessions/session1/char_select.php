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
				<p class="char-unit"> <img src="http://placehold.it/200x200" class="character" id="0" /> </p>
				<p class="char-unit"> <img src="http://placehold.it/200x201" class="character" id="1" /> </p>
				<p class="char-unit"> <img src="http://placehold.it/200x202" class="character" id="2" /> </p>

			</div>
			
		</div>

	</div>

</div>

<script>

	$(document).ready( function() { 

		$('.character').each(function() {

			$(this).click( function() {

				newId = $(this).attr('id');

				$.post( "user/details/update", { action: "personality", character: newId }).done(function( data ) {
					alert( "Profile Update:" + data );
					$('.choose-char').html('Thank you for choosing a character.');
				});

			});

		});

	});

</script>

<?php $this->load->view('user/sessions/navigation', $links); ?>