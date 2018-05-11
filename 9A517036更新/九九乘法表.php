<!DOCTYPE HTML>
<html>
	<head>
		<title>jone_0503-九九乘法表</title>
		<style></style>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main1.css" />
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
					</header>

				<!-- Main -->
					<div id="main">
                     <!-- Get Started -->
						<section id="cta1" class="main special">
							<span class="image main"><img src="images/pic04.jpg" alt="" /></span>
							<header class="major">
								<h2>九九乘法表</h2>
							</header>
							
							<?php
							for($s=1;$s<=9;$s++){
				 echo '<br/>';
				 for($y=1;$y<=9;$y++){
			 
					 echo '<span style="display: inline-block;width: 85px;margin-bottom:5px;">'.$y.' * '.$s.' = '.$y * $s.'</span>';
				 }
			 
			 }
			 ?>
							</header>
							</section>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<section>
								<h3><li><a href="九九乘法表.php" class="button special">九九乘法表</a></li></h2>
							<ul class="actions">
									<li><a href="index.html" class="button special">回到上一頁</a></li>
							</ul>
						</section>
						<section>
							<h2>聯絡資訊</h2>
							<dl class="alt">
								<dt>地址</dt>
								臺中市太平區光隆里12鄰光興路663號<br></dd>
								<dt>電話</dt>
								(09) 2391-0000<br></dd>
								<dt>信箱</dt>
								<a href="mailto:peterju.tw@gmail.com"><img src="images/MyMail.png" alt="Email of Peter Ju"><br></a></dd>
							</dl>
							<ul class="icons">
								<li><a href="https://twitter.com/jone_0503" class="icon fa-twitter alt"><span class="label">Twitter</span></a></li>
								<li><a href="https://www.facebook.com/mn11220027" class="icon fa-facebook alt"><span class="label">Facebook</span></a></li>
								<li><a href="https://www.instagram.com/jone_0503_/" class="icon fa-instagram alt"><span class="label">Instagram</span></a></li>
								<li><a href="https://github.com/jone0503" class="icon fa-github alt"><span class="label">GitHub</span></a></li>
								<li><a href="https://dribbble.com/jone0503" class="icon fa-dribbble alt"><span class="label">Dribbble</span></a></li>
							</ul>
						</section>
						<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>