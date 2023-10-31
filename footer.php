<!--footer-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 footer-grid-agileits-w3ls text-left">
					<h3>About us</h3>
					<p>
					Welcome to [ WORLD IDEAS BLOG], your go-to source for insightful and engaging content on a wide range of topics. We are a team of passionate writers and content creators dedicated to providing you with valuable information, inspiration, and entertainment. At [WORLD IDEAS BLOG], we believe that knowledge is a powerful tool, 
					</p>
					<div class="read">
						<a href="about.php" class="btn btn-primary read-m">اقرا اكثر</a>
					</div>
				</div>
				<div class="col-lg-4 footer-grid-agileits-w3ls text-left">

					<div class="tech-btm">
						<h3>The most famous articles</h3>
						<?php getpopularposts("page_hits"); ?>
					</div>
				</div>
				<!-- subscribe -->
				<div class="col-lg-4 subscribe-main footer-grid-agileits-w3ls text-left">
					<h2>  Don't forget to contact us </h2>
					<div class="subscribe-main text-left">
							<div class="subscribe-form">
									<form action="#" method="post" class="subscribe_form">
										<input class="form-control" type="email" placeholder="Enter your email..." required="">
										<button type="submit" class="btn btn-primary submit">Submit</button>
									</form>
									<div class="clearfix"> </div>
						   </div>
						<p>We respect your privacy</p>
					</div>
					<!-- //subscribe -->
				</div>
			</div>
			<!-- footer -->
			<div class="footer-cpy text-center">
				<div class="footer-social">
					<div class="copyrighttop">
						<ul>
							<li class="mx-3">
								<a class="facebook" href="<?php getlinks("links","facebook");?>">
									<i class="fab fa-facebook-f"></i>
									<span>Facebook</span>
								</a>
							</li>
							<li>
								<a class="facebook" href="<?php getlinks("links","twitter");?>">
									<i class="fab fa-twitter"></i>
									<span>Twitter</span>
								</a>
							</li>
							<li class="mx-3">
								<a class="facebook" href="<?php getlinks("links","googleplus");?>">
									<i class="fab fa-google-plus-g"></i>
									<span>Google+</span>
								</a>
							</li>
							<li>
								<a class="facebook" href="<?php getlinks("links","pinterest");?>">
									<i class="fab fa-pinterest-p"></i>
									<span>Pinterest</span>
								</a>
							</li>
						</ul>

					</div>
				</div>
				<div class="w3layouts-agile-copyrightbottom">
					<p> copyright2023
						</a>
					</p>

				</div>
			</div>
			<!-- //footer -->
		</div>
	</footer>