<div id="container">

	<div class="row">

		<div class="container">

			<div class="mtop50">

				<?php if( isset( $form_forward ) ) : ?>

				<p class="h4">Thank you for your time. We collect reasons why people don't want to participate so that we can improve our program. Please tell us your main reason, it'll be anonymous.</p>

						<div class="container mtop40">

							<?php echo form_open( $form_forward ); ?>
								
								<input type="radio" name="reason_select" value="busy"/> Busy/No time </br>
								<input type="radio" name="reason_select" value="confidential"/> Confidentiality concerns </br>
								<input type="radio" name="reason_select" value="no-research"/> Do not like research </br>
								<input type="radio" name="reason_select" value="no-disc-alc"/> Do not want to discuss alcohol </br>
								<input type="radio" name="reason_select" value="not-financial"/> Not enough financial incentive</br>

								<p>Other (Please type here):</p>
								<textarea name="reason" class="special" required></textarea> </br>
								<input type="hidden" name="subid" />
								<input class="mtop20" type="submit" value="submit" />

							</form>

						</div>

					<?php endif; ?>

				<p class="mtop40">If you are interested in other resources, please <a href="<?php echo site_url("resources"); ?>">click here</a>.</p>

			</div>

		</div>

	</div>

</div>