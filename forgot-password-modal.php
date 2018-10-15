<!-- The Modal -->
<div class="modal fade" id="ForgotPasswordModal">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">

			<!-- Modal body -->
			<div class="modal-body">


				<form id="forgot-password-modal-id" method="post" action="/action_page.php">
					<div class="row">
						<div class="col">
							<h4>Forgot Password?</h4>
                            <br>
                            <h5>Enter your Email</h5>
						</div>
						<div class="col d-flex flex-coloumn justify-content-end align-self-start">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
					</div>
					<!-- ############################################################################## -->
					<hr>

					<div class="form-group" id="forgot_password_message">

					</div>

					<div class="form-group">
						<input type="email" class="form-control" name="forgotemail" id="forgotemail" placeholder="Email">
					</div>
					<!-- ######################################################################################### -->
					<hr>

					<button type="button" data-dismiss="modal" data-toggle="modal" data-target="#myModal" class="btn btn-warning float-left">Sign Up</button>
					<div class="d-flex flex-row justify-content-end">
						<button type="submit" form="forgot-password-modal-id" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>