<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
	<a class="navbar-brand" href="index.php"> NotesWebApp </a>
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapseit, #collapseit2">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="collapseit">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="profile.php">Profile</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="mainloggedin.php">My Notes</a>
			</li>
		</ul>
	</div>
	<!-- ######################################################################### -->

	<div class="collapse navbar-collapse justify-content-end" id="collapseit2">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link active" href="#">Welcome <?php echo $_SESSION['username']; ?></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php?logout=1">Logout</a>
			</li>
		</ul>
	</div>

</nav>