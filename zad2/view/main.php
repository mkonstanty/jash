<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Zadanie 2 - <?php echo $this->controller; ?></title>
		<link rel="stylesheet" type="text/css" href="./style/style.css">
	</head>
	<body>
		<div class="background">
			<header>
				<div class="language">
					<a href="#"><img src="./img/fr.png" /></a>
					<a href="#"><img src="./img/uk.jpg" /></a>
				</div>
				<div class="subscribe">
					<form>
						<input type="text" placeholder="Subscribe to our newsletter" />
						<input type="submit" name="" value="" />
					</form>
				</div>
			</header>
			<section class="shadow">
				<nav>
					<ul>
						<li><a href="index.php?controller=home&action=view">Home</a><img id="ahome" src="./img/active.png" style="visibility: <?php echo ("home" == $this->controller ? "visible" : "hidden"); ?>;" /></li>
						<li><a href="index.php?controller=vehicles&action=view">Vehicles</a><img id="avehicles" src="./img/active.png" style="visibility: <?php echo ("vehicles" == $this->controller ? "visible" : "hidden"); ?>;" /></li>
						<li><a href="index.php?controller=architecture&action=view">Architecture</a><img id="aarchitecture" src="./img/active.png" style="visibility: <?php echo ("architecture" == $this->controller ? "visible" : "hidden"); ?>;" /></li>
						<li><a href="index.php?controller=training&action=view">Training</a><img id="atraining" src="./img/active.png" style="visibility: <?php echo ("training" == $this->controller ? "visible" : "hidden"); ?>;" /></li>
						<li><a href="index.php?controller=contact&action=view">Contact</a><img id="acontact" src="./img/active.png" style="visibility: <?php echo ("contact" == $this->controller ? "visible" : "hidden"); ?>;" /></li>
					</ul>
					<img id="logo" src="./img/logo.png" />
					<a href="index.php?controller=<?php echo $this->controller; ?>&action=edit" style="position: absolute; top: 40%; left: 0px">EDIT</a>
				</nav>
				<?php 
					if ($this->action == "view")
					{
						include_once(ROOT.DS."view".DS.$this->controller.".php");
					}
					else
					{
						include_once(ROOT.DS."view".DS.$this->action.".php");
					}
				?>
			</section>
			<div class="corner">
				<div id="lcorner"></div>
				<div id="rcorner"></div>
			</div>
			<footer class="shadow">
				<div class="container">
					<div class="footer">
						<h2>Free estimate request</h2>
						<p>To request an estimate for training or installation, you can contact us using the contact form by clicking the “Contact” button. Please select the “Request estimate” menu.</p>
						<p>We will answer you as soon as possible.</p>
						<p>You can also contact us by phone : 06 07 37 51 64</p>
					</div>
					<div class="footer">
						<h2>Pages</h2>
						<ul>
							<li>Home</li><hr />
							<li>Vehicles</li><hr />
							<li>Architecture</li><hr />
							<li>Training</li><hr />
							<li>Contract</li>
						</ul>
					</div>
					<div class="footer">
						<h2>Contact</h2>
						<p>Jash Technologie</p>
						<p>Jash Technologie</p>
						<p>Jash Technologie</p>
						<p>Jash Technologie</p>
						<p>Jash Technologie</p>
						<p>Jash Technologie</p>
					</div>
				</div>
			</footer>
			<div class="notice">
				<p>Legal notice - Admin access - JASH&copy; 2012 - All rights reserved</p>
			</div>
		</div>
	</body>
</html>