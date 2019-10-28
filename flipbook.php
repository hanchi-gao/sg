<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>科學少女</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="icon" type="image/x-icon" href="favicon-20191020032621647.ico">
	<script type="text/javascript" src="turn.js"></script>
	<style>
		#flipbook{
			margin: 5% auto;
			width: 600px;
			height: 300px;
		}
		#flipbook .turn-page{
			-webkit-background-size: 100% 100%;
			background-size: 100% 100%;
		}
	</style>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container-fluid">
				<div class="navbar-brand">
					<img src="trollfacelogo.jpg" width="90" height="30">
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarText">
					<ul class="nav navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="#about">關於《科學少女》</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#story">劇情大綱</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#cast">人物介紹</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#designTeam">主創團隊</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#photos">精彩劇照</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#pictureBook">音樂繪本</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#movieNovel">電影小說</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#event">最新活動</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<main>
		<div style="padding: auto; background-color: #DDDDDD;">
			<div class="container-fluid">
				<!-- <div id="flipbook">
					<div class="hard"> Turn.js </div>
					<div class="hard"></div>
					<div> Page 1 </div>
					<div> Page 2 </div>
					<div> Page 3 </div>
					<div> Page 4 </div>
					<div class="hard"></div>
					<div class="hard"></div>
				</div> -->
				<div style="margin: auto;">
					<div id="flipbook" style="position: relative;">
						<div class="hard" style="background-color: red;"> Turn.js </div>
						<div class="hard" style="background-color: blue;"></div>
						<div style="background-color: red;">
							<img src="14_birb1.jpg">
						</div>
						<div>
							<img src="14_birb2.jpg">
						</div>
						<div>
							<img src="14_birb3.jpg">
						</div>
						<div>
							<img src="14_birb4.jpg">
						</div>
						<div class="hard" style="background-color: red;"></div>
						<div class="hard" style="background-color: blue;"></div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer>
		<div style="padding: auto;">
			
		</div>
	</footer>
</body>
</html>
<script>
	// $("#flipbook").turn({
	// 	width: 320,
	// 	height: 300,
	// 	autoCenter: true
	// });
	$('#flipbook').turn({gradients: true, acceleration: true});
	// $(window).resize(function(){
	// 	$("#flipbook").turn(
	// 		"size",
	// 		window.innerWidth*0.5,
	// 		window.innerHigh*0.8
	// 	);
	// });
</script>