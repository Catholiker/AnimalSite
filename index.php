<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/default.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>
		<?php
			if (!@$_GET['page'] OR $_GET['page'] == 'home') {
				echo "Home";
			}elseif ($_GET['page'] == 'about' ) {
				echo "About hamsters";
			}elseif ($_GET['page'] == 'all-hamster') {
				echo "Show all hamsters";
			}

		?>


	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<header>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					</button>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li class="<?php if(@$_GET['page'] == 'home'){echo "active";} ?>"><a href="?page=home">Home</a></li>
						<li class="<?php if(@$_GET['page'] == 'about'){echo "active";} ?>" ><a href="?page=about">About hamsters</a></li>
						<li class="<?php if(@$_GET['page'] == 'all-hamster'){echo "active";} ?>"><a href="?page=all-hamster">Show all hamsters</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<section class="container">
		<div class="row">
			<?php
				error_reporting(0);
				$url = $_GET['page'];
				if (@$url) {
					require_once "contentPages/".$url.".html";
				}else{
					require_once "contentPages/blank.html";
				}
			?>
		</div>
	</section>
</body>
</html>