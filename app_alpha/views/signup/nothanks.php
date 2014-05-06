<div id="container">

	<div class="row">

		<div class="container">

			<div class="mtop50">

				<div class="container">
					<p class="h4">Thank you for your time. If you are interested in other resources, please <a href="<?php echo site_url("resources"); ?>">click here</a>.</p>
				</div>
			
					<?php if( isset( $form_forward ) ) : ?>

						<div class="container mtop40">

							<?php echo form_open( $form_forward ); ?>
								<p>Reason for not taking part</p>
								<textarea name="reason" class="special" required></textarea> </br>
								<input type="hidden" name="subid" />
								<input class="mtop20" type="submit" value="submit" />
							</form>

						</div>

					<?php endif; ?>

			</div>

		</div>

	</div>

</div>