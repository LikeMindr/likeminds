@extends('layouts.master')
@section('title')
<title> Like Minds At </title>
@stop
@section('content')


	<!-- MAIN CONTENT -->
	<div id="content-block">
		<div class="container be-detail-container">
			<div class="row">
				<div class="col-xs-12 col-md-4 left-feild">
					<div class="be-user-block style-3">
						<div class="be-user-detail">
							<a class="be-ava-user style-2" href="page1.html">
								<img src="img/ava_10.jpg" alt=""> 
							</a>
							<a class="be-ava-left btn color-1 size-2 hover-1"><i class="fa fa-plus"></i>Follow</a>
							<div class="be-ava-right btn btn-message color-4 size-2 hover-7">
								<i class="fa fa-envelope-o"></i>message
								<div class="message-popup">
									<div class="message-popup-inner container">
										<div class="row">
											<div class="col-xs-12 col-sm-8 col-sm-offset-2">
												<i class="fa fa-times close-button"></i>
												<h5 class="large-popup-title">Send Message To DaVinchi</h5>
												<div class="form-group">
													<textarea class="form-input" required="" placeholder="Your text"></textarea>
												</div>
												<a class="btn btn-right color-1 size-1 hover-1">send message</a>	
											</div>
										</div>
									</div>
								</div>
							</div>
							<p class="be-use-name">Chloe Adams</p>
							<div class="be-user-info">
								San Antonio, Tx
							</div>
							<!-- <div class="be-text-tags style-2">
								<a href="page1.html">UI/UX</a>,
								<a href="page1.html">Web Design</a>,
								<a href="page1.html">Art Direction</a>
							</div> -->
							<div class="be-user-social">							
								<a class="social-btn color-1" href="page1.html"><i class="fa fa-facebook"></i></a>
								<a class="social-btn color-2" href="page1.html"><i class="fa fa-twitter"></i></a>
								<a class="social-btn color-3" href="page1.html"><i class="fa fa-google-plus"></i></a>
								<a class="social-btn color-4" href="page1.html"><i class="fa fa-pinterest-p"></i></a>
								<a class="social-btn color-5" href="page1.html"><i class="fa fa-instagram"></i></a>
								<a class="social-btn color-6" href="page1.html"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
						<div class="be-user-statistic">
							<div class="stat-row clearfix"><i class="stat-icon icon-views-b"></i> Events Created<span class="stat-counter">218098</span></div>
							<div class="stat-row clearfix"><i class="stat-icon icon-like-b"></i>Events Attended<span class="stat-counter">14335</span></div>
						</div>
					</div>
					<div class="be-desc-block">
						<div class="be-desc-author">
							<div class="be-desc-label">About Me</div>
							<div class="clearfix"></div>
							<div class="be-desc-text">
								I like tacos.
							</div>
						</div>
						<div class="be-desc-author">
							<div class="be-desc-label">Question</div>
							<div class="clearfix"></div>
							<div class="be-desc-text">
								Sed dignissim scelerisque pretium. Vestibulum vel lacus laoreet nunc fermentum maximus. Proin id sodales sem, at consectetur urna. Proin vestibulum, erat a hendrerit sodales, nulla libero ornare dolor.
							</div>
						</div>
					</div>										
				</div>
				<div class="col-xs-12 col-md-8">
                    <div class="tab-wrapper style-1">
                        <div class="tab-nav-wrapper">
                            <div  class="nav-tab  clearfix">
                                <div class="nav-tab-item active">
                                    <span>Projects</span>
                                </div>
                                <div class="nav-tab-item ">
                                    <span>Work In Progress</span>
                                </div>
                                <div class="nav-tab-item ">
                                    <span>Appreciated</span>
                                </div> 
                                <div class="nav-tab-item ">
                                    <span>Collections</span>
                                </div>                                                               
                            </div>
                        </div>
                        <div class="tabs-content clearfix">
                            <div class="tab-info active"> 
								<div class="row">
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p1.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">The kitsch destruction of our world</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>, 
												<a href="page1.html" class="be-post-tag">UI/UX</a>,  
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a1.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>									
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p2.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Treebeard</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>, 
												<a href="page1.html" class="be-post-tag">UI/UX</a>,  
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a2.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>										
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p3.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Colors of Ramadan</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>, 
												<a href="page1.html" class="be-post-tag">UI/UX</a>,  
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a3.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>									
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p13.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Fran Ewald for The Diaries Project</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>, 
												<a href="page1.html" class="be-post-tag">UI/UX</a>,  
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a6.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>									
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p7.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">raindrops monochrome</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>, 
												<a href="page1.html" class="be-post-tag">UI/UX</a>,  
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a7.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>									
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p8.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Racing Queensland</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>, 
												<a href="page1.html" class="be-post-tag">UI/UX</a>,  
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a7.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>									
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p13.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Stay Ahead Series</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>, 
												<a href="page1.html" class="be-post-tag">UI/UX</a>,  
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a6.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>									
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p14.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Faber-Castell / Psychological Problems</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>, 
												<a href="page1.html" class="be-post-tag">UI/UX</a>,  
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a5.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>									
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p15.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Garry Simpson - Bridges - Intelligent Life Magazinen</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>, 
												<a href="page1.html" class="be-post-tag">UI/UX</a>,  
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a1.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>									
									</div>
								</div>
                            </div>
                            <div class="tab-info">
								<div class="row">
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p8.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Racing Queensland</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>, 
												<a href="page1.html" class="be-post-tag">UI/UX</a>,  
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a7.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>									
									</div>								
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p12.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Face</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>, 
												<a href="page1.html" class="be-post-tag">UI/UX</a>,  
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a6.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>									
									</div>								
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p2.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Treebeard</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>, 
												<a href="page1.html" class="be-post-tag">UI/UX</a>,  
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a1.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>									
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p3.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Colors of Ramadan</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>, 
												<a href="page1.html" class="be-post-tag">UI/UX</a>,  
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a2.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>										
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p4.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Leaving Home - L'Officiel Ukraine</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>, 
												<a href="page1.html" class="be-post-tag">UI/UX</a>,  
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a3.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>									
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p7.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">raindrops monochrome</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>, 
												<a href="page1.html" class="be-post-tag">UI/UX</a>,  
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a6.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>									
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p9.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">NAHA Finalist Hairstylist of the Year Allen Ruiz</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>, 
												<a href="page1.html" class="be-post-tag">UI/UX</a>,  
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a7.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>									
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p13.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Stay Ahead Series</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>, 
												<a href="page1.html" class="be-post-tag">UI/UX</a>,  
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a5.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>									
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											<a href="page1.html" class="be-img-block">
											<img src="img/p14.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Faber-Castell / Psychological Problems</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>, 
												<a href="page1.html" class="be-post-tag">UI/UX</a>,  
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="img/a1.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
											</div>
											<div class="info-block">
												<span><i class="fa fa-thumbs-o-up"></i> 360</span>
												<span><i class="fa fa-eye"></i> 789</span>
												<span><i class="fa fa-comment-o"></i> 20</span>
											</div>
										</div>									
									</div>
								</div>
                            </div>
                            <div class="tab-info">
								<div class="row">
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<a href="page1.html" class="be-img-block">
											<img src="img/p16.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Wisdom For My Children, Life Lessons Through</a>

											<div class="author-post clearfix">
												<img src="img/a1.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>									
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<a href="page1.html" class="be-img-block">
											<img src="img/p17.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Créations Namale</a>
											<div class="author-post clearfix">
												<img src="img/a2.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>												
											</div>
										</div>										
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<a href="page1.html" class="be-img-block">
											<img src="img/p18.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Crossfit : 15.4 Open Workout</a>
											<div class="author-post clearfix">
												<img src="img/a3.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>									
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<a href="page1.html" class="be-img-block">
											<img src="img/p15.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Garry Simpson - Bridges - Intelligent Life Magazine</a>
											<div class="author-post clearfix">
												<img src="img/a6.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>									
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<a href="page1.html" class="be-img-block">
											<img src="img/p14.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Faber-Castell / Psychological Problems</a>
											<div class="author-post clearfix">
												<img src="img/a7.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>									
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<a href="page1.html" class="be-img-block">
											<img src="img/p13.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Stay Ahead Series</a>
											<div class="author-post clearfix">
												<img src="img/a7.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>									
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<a href="page1.html" class="be-img-block">
											<img src="img/p12.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Face</a>
											<div class="author-post clearfix">
												<img src="img/a6.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>									
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<a href="page1.html" class="be-img-block">
											<img src="img/p19.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Promoção Facas Extra</a>
											<div class="author-post clearfix">
												<img src="img/a5.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>									
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<a href="page1.html" class="be-img-block">
											<img src="img/p11.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Tropicalia</a>
											<div class="author-post clearfix">
												<img src="img/a1.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>									
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<a href="page1.html" class="be-img-block">
											<img src="img/p10.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">tomorrow</a>
											<div class="author-post clearfix">
												<img src="img/a1.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>									
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<a href="page1.html" class="be-img-block">
											<img src="img/p9.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">NAHA Finalist Hairstylist of the Year Allen Ruiz</a>
											<div class="author-post clearfix">
												<img src="img/a1.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>									
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<a href="page1.html" class="be-img-block">
											<img src="img/p8.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Racing Queensland</a>
											<div class="author-post clearfix">
												<img src="img/a1.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>									
									</div>																											
								</div>                                                                 
                            </div>
                            <div class="tab-info">
                            	<div class="collection">
                            		<h3 class="menu-article">Creative Ideas</h3>
                            		<div class="collection-header">
                            			<span><i class="fa fa-user"></i>by <a href="page1.html">Leigh Taylor</a> </span>
                            			<span><i class="fa fa-thumbs-o-up"></i> 360</span>
                            			<span><i class="fa fa-eye"></i> 789</span>
                            		</div>
                            		<div class="collection-entry">
	                            		<a href="page1.html" class="portfolio-link type-2 clearfix">
	                            			<img src="img/collection_1.jpg" alt="">
	                            			<img src="img/collection_2.jpg" alt="">
	                            			<img src="img/collection_3.jpg" alt="">
	                            			<img src="img/collection_4.jpg" alt="">
	                            			<img src="img/collection_5.jpg" alt="">
	                            			<div class="color_bg">
												<span>view gallery</span>
												<span class="child"></span>
											</div>
	                            		</a>
                            		</div>
                            	</div>
                            	<div class="collection">
                            		<h3 class="menu-article">Creative Agency</h3>
                            		<div class="collection-header">
                            			<span><i class="fa fa-user"></i>by <a href="page1.html">Leigh Taylor</a> </span>
                            			<span><i class="fa fa-thumbs-o-up"></i> 360</span>
                            			<span><i class="fa fa-eye"></i> 789</span>
                            		</div>
                            		<div class="collection-entry">
	                            		<a href="page1.html" class="portfolio-link type-2 clearfix">
	                            			<img src="img/collection_6.jpg" alt="">
	                            			<img src="img/collection_7.jpg" alt="">
	                            			<img src="img/collection_8.jpg" alt="">
	                            			<img src="img/collection_9.jpg" alt="">
	                            			<img src="img/collection_10.jpg" alt="">
	                            			<div class="color_bg">
												<span>view gallery</span>
												<span class="child"></span>
											</div>
	                            		</a>
                            		</div>
                            	</div>
                            	<div class="collection">
                            		<h3 class="menu-article">Creative Agency</h3>
                            		<div class="collection-header">
                            			<span><i class="fa fa-user"></i>by <a href="page1.html">Inspiration Art</a> </span>
                            			<span><i class="fa fa-thumbs-o-up"></i> 360</span>
                            			<span><i class="fa fa-eye"></i> 789</span>
                            		</div>
                            		<div class="collection-entry">
	                            		<a href="page1.html" class="portfolio-link type-2 clearfix">
	                            			<img src="img/collection_11.jpg" alt="">
	                            			<img src="img/collection_12.jpg" alt="">
	                            			<img src="img/collection_13.jpg" alt="">
	                            			<img src="img/collection_14.jpg" alt="">
	                            			<img src="img/collection_15.jpg" alt="">
	                            			<div class="color_bg">
												<span>view gallery</span>
												<span class="child"></span>
											</div>
	                            		</a>
                            		</div>
                            	</div>
                            	<div class="collection">
                            		<h3 class="menu-article">Ideas For Personal Site</h3>
                            		<div class="collection-header">
                            			<span><i class="fa fa-user"></i>by <a href="page1.html">Inspiration Art</a> </span>
                            			<span><i class="fa fa-thumbs-o-up"></i> 360</span>
                            			<span><i class="fa fa-eye"></i> 789</span>
                            		</div>
                            		<div class="collection-entry">
	                            		<a href="page1.html" class="portfolio-link type-2 clearfix">
	                            			<img src="img/collection_16.jpg" alt="">
	                            			<img src="img/collection_17.jpg" alt="">
	                            			<img src="img/collection_18.jpg" alt="">
	                            			<img src="img/collection_19.jpg" alt="">
	                            			<img src="img/collection_20.jpg" alt="">
	                            			<div class="color_bg">
												<span>view gallery</span>
												<span class="child"></span>
											</div>
	                            		</a>
                            		</div>
                            	</div> 
                            	<div class="collection">
                            		<h3 class="menu-article">Inspiration Photos</h3>
                            		<div class="collection-header">
                            			<span><i class="fa fa-user"></i>by <a href="page1.html">Inspiration Art</a> </span>
                            			<span><i class="fa fa-thumbs-o-up"></i> 360</span>
                            			<span><i class="fa fa-eye"></i> 789</span>
                            		</div>
                            		<div class="collection-entry">
	                            		<a href="page1.html" class="portfolio-link type-2 clearfix">
	                            			<img src="img/collection_16.jpg" alt="">
	                            			<img src="img/collection_17.jpg" alt="">
	                            			<img src="img/collection_18.jpg" alt="">
	                            			<img src="img/collection_19.jpg" alt="">
	                            			<img src="img/collection_20.jpg" alt="">
	                            			<div class="color_bg">
												<span>view gallery</span>
												<span class="child"></span>
											</div>
	                            		</a>
                            		</div>
                            	</div>                        	                            	
                            </div>                          
                        </div>
                    </div> 				
				</div>				
			</div>
		</div>
	</div>

	<footer>
		<div class="footer_slider">
			<div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="4" data-sm-slides="8" data-md-slides="14" data-lg-slides="19" data-add-slides="19">
	            <div class="swiper-wrapper">
	            	<div class="swiper-slide active" data-val="0">

						<a href="gallery.html">				<img class="img-responsive img-full" src="img/f1.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="1">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f2.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="2">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f3.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="3">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f4.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="4">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f5.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="5">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f6.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="6">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f7.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="7">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f8.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="8">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f9.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="9">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f10.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="10">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f11.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="11">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f12.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="12">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f13.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="13">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f14.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="14">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f15.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="15">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f16.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="16">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f17.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="17">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f18.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="18">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f19.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="19">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f1.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="20">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f2.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="21">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f3.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="22">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f4.jpg" alt="">
	            	 </a></div>
	            	<div class="swiper-slide" data-val="23">
						<a href="gallery.html">

	            		 	 <img class="img-responsive img-full" src="img/f5.jpg" alt="">
	            	 </a></div>
	            </div>
	            <div class="pagination hidden"></div>
	        </div>
        </div>	
		<div class="footer-main">
			<div class="container-fluid custom-container">
				<div class="row">	
					<div class="col-md-3 col-xl-4">
						<div class="footer-block">
							<h1 class="footer-title">About Us</h1>
							<p>Vestibulum tincidunt, augue fermentum accumsan viverra, eros dui rutrum libero, nec imperdiet felis sem in augue luctus <a href="page1.html">diam a porta</a> iaculis. Vivamus sit amet fermentum nisl. Duis id <a href="page1.html">massa id purus</a> tristique varius a sit amet est. Fusce dolor libero, efficitur et lobortis at, faucibus nec nunc.</p>
							<ul class="soc_buttons">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
								<li><a href=""><i class="fa fa-pinterest-p"></i></a></li>
								<li><a href=""><i class="fa fa-instagram"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-xl-2">
						<div class="footer-block">
							<h1 class="footer-title">Some Links</h1>
							<div class="row footer-list-footer">
							<div class="col-md-6">
							<ul class="link-list">
								<li><a href="about-us.html">About Us</a></li>
								<li><a href="contact-us.html">Help</a></li>
								<li><a href="contact-us.html">Contacts</a></li>
								<li><a href="activity.html">Job</a></li>
								<li><a href="activity.html">Projets</a></li>
							</ul></div>
							<div class="col-md-6">
							<ul class="link-list">
								<li><a href="activity.html">New Works</a></li>
								<li><a href="author.html">Popular Authors</a></li>
								<li><a href="author.html">New Authors</a></li>
								<li><a href="people.html">Career</a></li>
								<li><a href="faq">FAQ</a></li>
							</ul>
							</div>
							</div>
						</div>
					</div>				
					<div class="col-md-3 galerry">
						<div class="footer-block">					
							<h1 class="footer-title">Recent Works</h1>
							<a href="page1.html"><img src="img/g1.jpg" alt=""></a>
							<a href="page1.html"><img src="img/g2.jpg" alt=""></a>
							<a href="page1.html"><img src="img/g3.jpg" alt=""></a>
							<a href="page1.html"><img src="img/g4.jpg" alt=""></a>
							<a href="page1.html"><img src="img/g5.jpg" alt=""></a>
							<a href="page1.html"><img src="img/g6.jpg" alt=""></a>
							<a href="page1.html"><img src="img/g7.jpg" alt=""></a>
							<a href="page1.html"><img src="img/g8.jpg" alt=""></a>
							<a href="page1.html"><img src="img/g9.jpg" alt=""></a>
							<a href="page1.html"><img src="img/g10.jpg" alt=""></a>
							<a href="page1.html"><img src="img/g11.jpg" alt=""></a>
							<a href="page1.html"><img src="img/g12.jpg" alt=""></a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="footer-block">
							<h1 class="footer-title">Subscribe On Our News</h1>
							<form action="./" class="subscribe-form">
								<input type="text" placeholder="Yout Name" required>
								<div class="submit-block">
									<i class="fa fa-envelope-o"></i>
									<input type="submit" value="">
								</div>
							</form>
							<div class="soc-activity">
								<div class="soc_ico_triangle">
									<i class="fa fa-twitter"></i>
								</div>
								<div class="message-soc">
									<div class="date">16h ago</div>
									<a href="page1.html" class="account">@faq</a> vestibulum accumsan est <a href="page1.html" class="heshtag">page1.htmlmalesuada</a> sem auctor, eu aliquet nisi ornare leo sit amet varius egestas.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container-fluid custom-container">
				<div class="col-md-12 footer-end clearfix">
					<div class="left">
						<span class="copy">© 2015. All rights reserved. <span class="white"><a href="page1.html"> NRGNetwork</a></span></span>
						<span class="created">Created with LOVE by <span class="white"><a href="page1.html"> NRGThemes</a></span></span>
					</div>
					<div class="right">
						<a class="btn color-7 size-2 hover-9">About Us</a>
						<a class="btn color-7 size-2 hover-9">Help</a>
						<a class="btn color-7 size-2 hover-9">Privacy Policy</a>
					</div>
				</div>			
			</div>
		</div>		
	</footer>

	<div class="be-fixed-filter"></div>
	
	<div class="large-popup login">
		<div class="large-popup-fixed"></div>
		<div class="container large-popup-container">
			<div class="row">
				<div class="col-md-8 col-md-push-2 col-lg-6 col-lg-push-3  large-popup-content">
					<div class="row">
						<div class="col-md-12">
							<i class="fa fa-times close-button"></i>
							<h5 class="large-popup-title">Log in</h5>
						</div>
						<form action="./" class="popup-input-search">
						<div class="col-md-6">
							<input class="input-signtype" type="email" required="" placeholder="Your email">
						</div>
						<div class="col-md-6">
							<input class="input-signtype" type="password" required="" placeholder="Password">
						</div>
						<div class="col-xs-6">
							<div class="be-checkbox">
							<label class="check-box">
								    <input class="checkbox-input" type="checkbox" /> <span class="check-box-sign"></span>
								</label>
								<span class="large-popup-text">
									Stay signed in
								</span>
							</div>
							
							<a href="page1.html" class="link-large-popup">Forgot password?</a>
						</div>
						<div class="col-xs-6 for-signin">
							<input type="submit" class="be-popup-sign-button" value="SIGN IN">
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="large-popup register">
		<div class="large-popup-fixed"></div>
		<div class="container large-popup-container">
			<div class="row">
				<div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2 large-popup-content">
					<div class="row">
						<div class="col-md-12">
							<i class="fa fa-times close-button"></i>
							<h5 class="large-popup-title">Register</h5>
						</div>
						<form action="./" class="popup-input-search">
						<div class="col-md-6">
							<input class="input-signtype" type="text" required="" placeholder="First Name">
						</div>
						<div class="col-md-6">
							<input class="input-signtype" type="text" required="" placeholder="Last Name">
						</div>
						<div class="col-md-6">
							<div class="be-custom-select-block">
							<select class="be-custom-select">
								<option value="" disabled selected>
									Country
								</option>
								<option value="">USA</option>
								<option value="">Canada</option>
								<option value="">England</option>
							</select>
							</div>
						</div>
						<div class="col-md-6">
							<input class="input-signtype" type="text" required="" placeholder="Email">
						</div>
						<div class="col-md-6">
							<input class="input-signtype" type="text" required="" placeholder="Password">
						</div>
						<div class="col-md-6">
							<input class="input-signtype" type="text" required="" placeholder="Repeat Password">
						</div>
						<div class="col-md-12 be-date-block">
							<span class="large-popup-text">
								Date of birth
							</span>
							<div class="be-custom-select-block mounth">
								<select class="be-custom-select">
									<option value="" disabled selected>
										Mounth
									</option>
									<option value="">January</option>	
									<option value="">February</option>	
									<option value="">March</option>	
									<option value="">April</option>	
									<option value="">May</option>	
									<option value="">June</option>	
									<option value="">July</option>	
									<option value="">August</option>	
									<option value="">September</option>	
									<option value="">October</option>	
									<option value="">November</option>	
									<option value="">December</option>
								</select>
							</div>
							<div class="be-custom-select-block">
								<select class="be-custom-select">
									<option value="" disabled selected>
										Day
									</option>
									<option value="">1</option>
									<option value="">2</option>
									<option value="">3</option>
									<option value="">4</option>
									<option value="">5</option>
									<option value="">6</option>
									<option value="">7</option>
									<option value="">8</option>
									<option value="">9</option>
									<option value="">10</option>
									<option value="">11</option>
									<option value="">12</option>
									<option value="">13</option>
									<option value="">14</option>
									<option value="">15</option>
									<option value="">16</option>
									<option value="">17</option>
									<option value="">18</option>
									<option value="">19</option>
									<option value="">20</option>
									<option value="">21</option>
									<option value="">22</option>
									<option value="">23</option>
									<option value="">24</option>
									<option value="">25</option>
									<option value="">26</option>
									<option value="">27</option>
									<option value="">28</option>
									<option value="">29</option>
									<option value="">30</option>
								</select>
							</div>
							<div class="be-custom-select-block">
								<select class="be-custom-select">
									<option value="" disabled selected>
										Year
									</option>
									<option value="">1996</option>
									<option value="">1997</option>
									<option value="">1998</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="be-checkbox">
								<label class="check-box">
								    <input class="checkbox-input" type="checkbox" required="" /> <span class="check-box-sign"></span>
								</label>
								<span class="large-popup-text">
									I have read and agree to the <a class="be-popup-terms" href="page1.html">Terms of Use</a> and <a class="be-popup-terms" href="page1.html">Privacy Policy</a>.
								</span>
							</div>
							<div class="be-checkbox">
								<label class="check-box">
								    <input class="checkbox-input" type="checkbox" value=""/> <span class="check-box-sign"></span>
								</label>
								<span class="large-popup-text">
									Send me notifications
								</span>
							</div>
						</div>
						<div class="col-md-6 for-signin">
							<input type="submit" class="be-popup-sign-button" value="SIGN IN">
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="theme-config">
	    <div class="main-color">
	        <div class="title">Main Color:</div>
	        <div class="colours-wrapper">
	            <div class="entry color1 m-color active" data-colour="style/stylesheet.css"></div>   
	            <div class="entry color3 m-color"  data-colour="style/style-green.css"></div>
	            <div class="entry color6 m-color"  data-colour="style/style-orange.css"></div>
	            <div class="entry color8 m-color"  data-colour="style/style-red.css"></div>  
	            <div class="title">Second Color:</div>  
	            <div class="entry s-color  active color10"  data-colour="style/stylesheet.css"></div>
	            <div class="entry s-color color11"  data-colour="style/style-oranges.css"></div> 
	            <div class="entry s-color color12"  data-colour="style/style-greens.css"></div>
	            <div class="entry s-color color13"  data-colour="style/style-reds.css"></div>
	                       
	        </div>
	    </div>
	   <div class="open"><img src="img/icon-134.png" alt=""></div>
	</div>

	<!-- SCRIPT	-->
	<script src="script/jquery-2.1.4.min.js"></script>
	<script src="script/bootstrap.min.js"></script>		
	<script src="script/idangerous.swiper.min.js"></script>
	<script src="script/isotope.pkgd.min.js"></script>	
	<script src="script/jquery.viewportchecker.min.js"></script>	
	<script src="script/global.js"></script>		
	</body>
</html>
@stop