@extends('layouts.master')
@section('title')
<title> Like Minds At </title>
@stop
@section('content')


	<!-- MAIN CONTENT -->
	<div id="profile-page-bg">
		<div class="container be-detail-container">
			<div class="row">
				<div class="col-xs-12 col-md-4 left-feild">
					<div class="be-user-block style-3">
						<div class="be-user-detail">

							<div class="be-ava-right btn">
								<div class="message-popup">
									<div class="container">
									</div>
								</div>
							</div>
  							<img src="/assets/../assets/img/usericon.png" width="300px" height="300px">
							<p class="be-use-name">{{$user->name}}</p>
							<div class="be-user-info">
								San Antonio, Tx
							</div>
							<div class="be-user-social">
								<a class="social-btn color-1" href="page1.html"><i class="fa fa-facebook"></i></a>
								<a class="social-btn color-2" href="page1.html"><i class="fa fa-twitter"></i></a>
								<a class="social-btn color-4" href="page1.html"><i class="fa fa-pinterest-p"></i></a>
								<a class="social-btn color-5" href="page1.html"><i class="fa fa-instagram"></i></a>
								<a class="btn color-1 size-2 hover-1"><i class="fa fa-plus"></i>MESSAGE</a>
							</div>
						</div>
						<div class="be-user-statistic">
							<div class="stat-row clearfix"><i class="stat-icon icon-views-b"></i> EVENTS CREATED<span class="stat-counter">218098</span></div>
							<div class="stat-row clearfix"><i class="stat-icon icon-like-b"></i>EVENTS ATTENDED<span class="stat-counter">14335</span></div>
						</div>
					</div>
					<div class="be-desc-block">
						<div class="be-desc-author">
							<div class="be-desc-label">ABOUT ME</div>
							<div class="clearfix"></div>
							<div class="be-desc-text">
								I like tacos.
							</div>
						</div>
						<div class="be-desc-author">
							<div class="be-desc-label">QUESTION</div>
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
                            	@if(Auth::check())
                                <div class="nav-tab-item ">
                                    <span>MY EVENTS</span>
                                </div>
                                <div class="nav-tab-item ">
                                    <a href="/accounts/{{Auth::id()}}/edit" ><span>EDIT PROFILE</span></a>
                                </div>
                            	@else
                                <div class="nav-tab-item active">
                                    <span>EVENTS</span>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="tabs-content clearfix">
                            <div class="tab-info active">
								<div class="row">
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post">
											</a>
											<a href="page1.html" class="be-post-title">The kitsch destruction of our world</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="../assets/img/a1.png" alt="" class="ava-author">
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
											</a>
											<a href="page1.html" class="be-post-title">Treebeard</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="../assets/img/a2.png" alt="" class="ava-author">
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

											</a>
											<a href="page1.html" class="be-post-title">Colors of Ramadan</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="../assets/img/a3.png" alt="" class="ava-author">
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
											<img src="../assets/img/p13.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Fran Ewald for The Diaries Project</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="../assets/img/a6.png" alt="" class="ava-author">
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
											<img src="../assets/img/p7.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">raindrops monochrome</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="../assets/img/a7.png" alt="" class="ava-author">
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
											<img src="../assets/img/p8.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Racing Queensland</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="../assets/img/a7.png" alt="" class="ava-author">
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
											<img src="../assets/img/p13.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Stay Ahead Series</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="../assets/img/a6.png" alt="" class="ava-author">
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
											<img src="../assets/img/p14.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Faber-Castell / Psychological Problems</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="../assets/img/a5.png" alt="" class="ava-author">
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
											<img src="../assets/img/p15.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Garry Simpson - Bridges - Intelligent Life Magazinen</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="../assets/img/a1.png" alt="" class="ava-author">
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
											<img src="../assets/img/p8.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Racing Queensland</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="../assets/img/a7.png" alt="" class="ava-author">
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
											<img src="../assets/img/p12.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Face</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="../assets/img/a6.png" alt="" class="ava-author">
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
											<img src="../assets/img/p2.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Treebeard</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="../assets/img/a1.png" alt="" class="ava-author">
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
											<img src="../assets/img/p3.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Colors of Ramadan</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="../assets/img/a2.png" alt="" class="ava-author">
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
											<img src="../assets/img/p4.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Leaving Home - L'Officiel Ukraine</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="../assets/img/a3.png" alt="" class="ava-author">
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
											<img src="../assets/img/p7.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">raindrops monochrome</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="../assets/img/a6.png" alt="" class="ava-author">
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
											<img src="../assets/img/p9.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">NAHA Finalist Hairstylist of the Year Allen Ruiz</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="../assets/img/a7.png" alt="" class="ava-author">
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
											<img src="../assets/img/p13.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Stay Ahead Series</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="../assets/img/a5.png" alt="" class="ava-author">
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
											<img src="../assets/img/p14.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Faber-Castell / Psychological Problems</a>
											<span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
											<div class="author-post">
												<img src="../assets/img/a1.png" alt="" class="ava-author">
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
											<img src="../assets/img/p16.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Wisdom For My Children, Life Lessons Through</a>

											<div class="author-post clearfix">
												<img src="../assets/img/a1.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<img src="../assets/img/p17.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Créations Namale</a>
											<div class="author-post clearfix">
												<img src="../assets/img/a2.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<img src="../assets/img/p18.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Crossfit : 15.4 Open Workout</a>
											<div class="author-post clearfix">
												<img src="../assets/img/a3.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<img src="../assets/img/p15.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Garry Simpson - Bridges - Intelligent Life Magazine</a>
											<div class="author-post clearfix">
												<img src="../assets/img/a6.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<img src="../assets/img/p14.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Faber-Castell / Psychological Problems</a>
											<div class="author-post clearfix">
												<img src="../assets/img/a7.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<img src="../assets/img/p13.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Stay Ahead Series</a>
											<div class="author-post clearfix">
												<img src="../assets/img/a7.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<img src="../assets/img/p12.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Face</a>
											<div class="author-post clearfix">
												<img src="../assets/img/a6.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<img src="../assets/img/p19.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Promoção Facas Extra</a>
											<div class="author-post clearfix">
												<img src="../assets/img/a5.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<img src="../assets/img/p11.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Tropicalia</a>
											<div class="author-post clearfix">
												<img src="../assets/img/a1.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<img src="../assets/img/p10.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">tomorrow</a>
											<div class="author-post clearfix">
												<img src="../assets/img/a1.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<img src="../assets/img/p9.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">NAHA Finalist Hairstylist of the Year Allen Ruiz</a>
											<div class="author-post clearfix">
												<img src="../assets/img/a1.png" alt="" class="ava-author">
												<span>by <a href="page1.html">Hoang Nguyen</a></span>
												<span class="like-counter"><i class="fa fa-thumbs-o-up"></i> 405</span>
											</div>
										</div>
									</div>
									<div class="col-ml-12 col-xs-6 col-sm-4">
										<div class="be-post style-4">
											<img src="../assets/img/p8.jpg" alt="omg">
											</a>
											<a href="page1.html" class="be-post-title">Racing Queensland</a>
											<div class="author-post clearfix">
												<img src="../assets/img/a1.png" alt="" class="ava-author">
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
	                            			<img src="../assets/img/collection_1.jpg" alt="">
	                            			<img src="../assets/img/collection_2.jpg" alt="">
	                            			<img src="../assets/img/collection_3.jpg" alt="">
	                            			<img src="../assets/img/collection_4.jpg" alt="">
	                            			<img src="../assets/img/collection_5.jpg" alt="">
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
	                            			<img src="../assets/img/collection_6.jpg" alt="">
	                            			<img src="../assets/img/collection_7.jpg" alt="">
	                            			<img src="../assets/img/collection_8.jpg" alt="">
	                            			<img src="../assets/img/collection_9.jpg" alt="">
	                            			<img src="../assets/img/collection_10.jpg" alt="">
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
	                            			<img src="../assets/img/collection_11.jpg" alt="">
	                            			<img src="../assets/img/collection_12.jpg" alt="">
	                            			<img src="../assets/img/collection_13.jpg" alt="">
	                            			<img src="../assets/img/collection_14.jpg" alt="">
	                            			<img src="../assets/img/collection_15.jpg" alt="">
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
	                            			<img src="../assets/img/collection_16.jpg" alt="">
	                            			<img src="../assets/img/collection_17.jpg" alt="">
	                            			<img src="../assets/img/collection_18.jpg" alt="">
	                            			<img src="../assets/img/collection_19.jpg" alt="">
	                            			<img src="../assets/img/collection_20.jpg" alt="">
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
	                            			<img src="../assets/img/collection_16.jpg" alt="">
	                            			<img src="../assets/img/collection_17.jpg" alt="">
	                            			<img src="../assets/img/collection_18.jpg" alt="">
	                            			<img src="../assets/img/collection_19.jpg" alt="">
	                            			<img src="../assets/img/collection_20.jpg" alt="">
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


	<!-- SCRIPT	-->
	<!-- <script src="script/jquery-2.1.4.min.js"></script>
	<script src="script/bootstrap.min.js"></script>
	<script src="script/idangerous.swiper.min.js"></script>
	<script src="script/isotope.pkgd.min.js"></script>
	<script src="script/jquery.viewportchecker.min.js"></script>
	<script src="script/global.js"></script>		 -->
	</body>
</html>
@stop
