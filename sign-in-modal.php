<!-- The Modal -->
<div class="modal fade" id="mySigninModal">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">

			<!-- Modal body -->
			<div class="modal-body">


				<form id="sign-in-modal-id" method="post" action="/action_page.php">
					<div class="row">
						<div class="col">
							<h4>Sign In</h4>
						</div>
						<div class="col d-flex flex-coloumn justify-content-end align-self-start">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
					</div>
					<!-- ############################################################################## -->
					<hr>

					<div class="form-group" id="login_message">

					</div>

					<div class="form-group">
						<input type="email" class="form-control" name="signin_email" id="signin_email" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="signin_pwd" id="signin_pwd" placeholder="Password">
					</div>
					<div class="form-group form-check">
						<label class="form-check-label">
							<input class="form-check-input" type="checkbox" name="rememberme"> Remember me
						</label>
						<a class="float-right" href="#" data-dismiss="modal" data-toggle="modal" data-target="#ForgotPasswordModal">Forget Password ?</a>
					</div>
					<!-- ######################################################################################### -->
					<hr>

					<button type="button" data-dismiss="modal" data-toggle="modal" data-target="#myModal" class="btn btn-warning float-left">Sign Up</button>
					<div class="d-flex flex-row justify-content-end">
						<button type="submit" form="sign-in-modal-id" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>