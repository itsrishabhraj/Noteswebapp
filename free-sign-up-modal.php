<!-- The Modal -->
<div class="modal fade" id="myModal">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">

			<!-- Modal body -->
			<div class="modal-body">
				<form id="sign-up-modal-id" method="post" action="/action_page.php">

					<div class="row">
						<div class="col">
							<h4>Sign Up Here</h4>
						</div>
						<div class="col d-flex flex-coloumn justify-content-end">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
					</div>
					<!-- ############################################################### -->
					<hr>

					<div class="form-group" id="informationsignup">
						<!-- INFORMATION HERE -->
					</div>

					<div class="form-group">
						<input type="text" class="form-control" name="name" id="name" placeholder="Username">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="email" id="email" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="confirm-pwd" id="confirm-pwd" placeholder="Confirm Password">
					</div>
					<div class="form-group form-check">
						<label class="form-check-label">
							<input class="form-check-input" type="checkbox"> Remember me
						</label>
						<a class="float-right" href="#">Forget Password ?</a>
					</div>
					<!-- ####################################################################### -->
					<hr>

					<div class="float-right">
						<button type="submit" form="sign-up-modal-id" class="btn btn-primary">Submit</button>
					</div>

				</form>
			</div>

		</div>
	</div>
</div>