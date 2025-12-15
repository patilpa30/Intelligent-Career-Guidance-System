<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
	<?php include 'header.php'?>
		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bgc2.jpg); " ></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row" >
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="index.php">Home</a></li>
							<li>Courses</li>
						</ul>
						<h1 class="white-text">Get Started</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->
		
        <!-- Courses -->
		<div id="courses" class="section">

			<!-- container -->
			<div class="container">

				<!-- row 
				<div class="row">
					<div class="section-header text-center">
						<h2>Explore Courses</h2>
						<p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
					</div>
				</div>
				 -->
				
				<!-- tags widget -->
				<div class="widget tags-widget">
					<a class="tag" href="#web">Web</a>
					<a class="tag" href="#prog">Programming Langauges</a>
					<a class="tag" href="#">Css</a>
					<a class="tag" href="#">Responsive</a>
					<a class="tag" href="#bootstrap">bootstrap</a>
					<a class="tag" href="#web">Html</a>
					<a class="tag" href="#">Website</a>
					<a class="tag" href="#">Business</a>
				</div>
				<!-- /tags widget -->
				
				<!-- courses -->
				<hr class="section-hr" id="web">
				<div id="courses-wrapper" >
                 		
					<!-- row -->
					<div class="row" >
                        <div class="section-header text-center" >
							<h2  >Web Development</h2>
						</div>
						   
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/jquery/default.asp" target="_blank" class="course-img">
									<img src="./img/coursejq.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/jquery/default.asp" target="_blank" style="font-size:18px; text-align: center">The Complete jQuery Course</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->
						
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6" >
							<div class="course">
								<a href="https://www.w3schools.com/css/default.asp" target="_blank" class="course-img">
									<img src="./img/course02.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/css/default.asp" target="_blank" style="font-size:18px; text-align: center"><b>Introduction to CSS </b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Design</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.geeksforgeeks.org/learn-html/" target="_blank" class="course-img">
									<img src="./img/coursehtml.jpg " alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.geeksforgeeks.org/learn-html/" target="_blank" style="font-size:18px; text-align: center">The Complete course on HTML</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Development</span>
										<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/bootstrap4/default.asp" class="course-img" target="_blank">
									<img src="./img/coursebtsp.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/bootstrap4/default.asp" target="_blank" style="font-size:18px; text-align: center">Introduction to Bootstrap</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Design</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
                        
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">	
							<div class="course">
								<a href="https://www.w3schools.com/js/default.asp?ref=7-0.cc" target="_blank" class="course-img">
									<img src="./img/coursejs.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/js/default.asp?ref=7-0.cc" target="_blank" style="font-size:18px; text-align: center">JavaScript Tutorial</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/react/" target="_blank" class="course-img">
									<img src="./img/courserea.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/react/" target="_blank" style="font-size:18px; text-align: center">React Tutorial</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.tutorialspoint.com/ruby/index.htm" target="_blank" class="course-img">
									<img src="./img/courseruby.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.tutorialspoint.com/ruby/index.htm" target="_blank" style="font-size:18px; text-align: center">Ruby Tips and Tricks</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.udemy.com/course/web-design-for-beginners-real-world-coding-in-html-css/?matchtype=e&msclkid=29eaf56368b7176fa5d593686699fb1b&utm_campaign=BG-LongTail_la.EN_cc.INDIA_Experiment_2&utm_content=deal4584&utm_medium=udemyads&utm_source=bing&utm_term=_._ag_1326013382489948_._ad__._kw_HTML+tutorial_._de_c_._dm__._pl__._ti_kwd-82876834268585%3Aloc-90_._li_149333_._pd__._&couponCode=IND21PM" class="course-img" target="_blank">
									<img src="./img/course04.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.udemy.com/course/web-design-for-beginners-real-world-coding-in-html-css/?matchtype=e&msclkid=29eaf56368b7176fa5d593686699fb1b&utm_campaign=BG-LongTail_la.EN_cc.INDIA_Experiment_2&utm_content=deal4584&utm_medium=udemyads&utm_source=bing&utm_term=_._ag_1326013382489948_._ad__._kw_HTML+tutorial_._de_c_._dm__._pl__._ti_kwd-82876834268585%3Aloc-90_._li_149333_._pd__._&couponCode=IND21PM" target="_blank" style="font-size:18px; text-align: center">HTML & CSS</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
                        
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.tutorialspoint.com/ruby-on-rails/index.htm" target="_blank" class="course-img">
									<img src="./img/courseror.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.tutorialspoint.com/ruby-on-rails/index.htm" target="_blank" style="font-size:18px; text-align: center">Ruby on Rails5</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/sass/" target="_blank" class="course-img">
									<img src="./img/coursesass.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/sass/" target="_blank" style="font-size:18px; text-align: center">Introduction to Sass</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/cs/index.php" target="_blank" class="course-img">
									<img src="./img/coursereact.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/cs/index.php" target="_blank" style="font-size:18px; text-align: center">C# complete course</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/sql/" class="course-img" target="_blank">
									<img src="./img/coursejas.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/sql/" target="_blank" style="font-size:18px; text-align: center">SQL Tutorial</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Web Development</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
                        <div class="section-header text-center">
                            <h2 id="prog">Programming Langauges</h2>
                        </div>

						
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/r/default.asp" class="course-img">
									<img src="./img/course01.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/r/default.asp" target="_blank" style="font-size:18px; text-align: center">R Programming</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->
						
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/cpp/default.asp" class="course-img" target="_blank">
									<img src="./img/coursecpp.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/cpp/default.asp" target="_blank" style="font-size:18px; text-align: center;" >Learn C++</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/java/default.asp" class="course-img" target="_blank">
									<img src="./img/coursejava.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/java/default.asp" target="_blank" style="font-size:18px; text-align: center">Java Tutorial</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/python/" class="course-img" target="_blank">
									<img src="./img/coursepy.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/python/" target="_blank" style="font-size:18px; text-align: center">Complete guide on python</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
                        
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/java/java_oop.asp" target="_blank" class="course-img">
									<img src="./img/coursejv.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/java/java_oop.asp" target="_blank" style="font-size:18px; text-align: center">OOP</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- <div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/bootstrap4/default.asp" class="course-img" target="_blank">
									<img src="./img/coursepyth.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/bootstrap4/default.asp" target="_blank" style="font-size:18px; text-align: center">Python Programming</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div> -->
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/cs/index.php" target="_blank" class="course-img">
									<img src="./img/coursec.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/cs/index.php" target="_blank" style="font-size:18px; text-align: center">C# Tutorial</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.udemy.com/course/the-complete-c-programming/" target="_blank" class="course-img">
									<img src="./img/coursecp.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.udemy.com/course/the-complete-c-programming/" target="_blank" style="font-size:18px; text-align: center">Complete C programming</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
                        <div class="section-header text-center">
                            <h2 id="prog">Server Side</h2>
                        </div>

						
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/php/" target="_blank" class="course-img">
									<img src="./img/course05.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/php/" target="_blank" style="font-size:18px; text-align: center"><b>PHP Tips, Tricks, and Techniques</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Server Side</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->
						
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.geeksforgeeks.org/sql-tutorial/" target="_blank" class="course-img">
									<img src="./img/coursesql.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.geeksforgeeks.org/sql-tutorial/" target="_blank" style="font-size:18px; text-align: center"><b>SQL Tutorial</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Server Side</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.udemy.com/topic/NodeJS/?utm_source=bing&utm_medium=udemyads&utm_campaign=BG-LongTail_la.EN_cc.INDIA_Experiment_2&utm_content=deal4584&utm_term=_._ag_1320515824048391_._ad__._kw_Node%20Js%20Course_._de_c_._dm__._pl__._ti_kwd-82533225345551:loc-90_._li_149333_._pd__._&matchtype=e&msclkid=3c54d5e01a3511db9ed2b3eb08e19a51" target="_blank" class="course-img">
									<img src="./img/coursend.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.udemy.com/topic/NodeJS/?utm_source=bing&utm_medium=udemyads&utm_campaign=BG-LongTail_la.EN_cc.INDIA_Experiment_2&utm_content=deal4584&utm_term=_._ag_1320515824048391_._ad__._kw_Node%20Js%20Course_._de_c_._dm__._pl__._ti_kwd-82533225345551:loc-90_._li_149333_._pd__._&matchtype=e&msclkid=3c54d5e01a3511db9ed2b3eb08e19a51" target="_blank" style="font-size:18px; text-align: center"><b>Node.js crash course</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Server Side</span>
									<span class="course-price course-premium">Preminum</span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/git/default.asp" target="_blank" class="course-img">
									<img src="./img/coursegit.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/git/default.asp" target="_blank" style="font-size:18px; text-align: center"><b>Mastering Git</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Server Side</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

				</div>
				<!-- /courses -->

				<!--<div class="row">
					<div class="center-btn">
						<a class="main-button icon-button" href="#">More Courses</a>
					</div>
				</div>-->

			</div>
			<!-- container -->

		</div>
		<!-- /Courses -->
		<?php include 'footer.php'?>
		
</html>
