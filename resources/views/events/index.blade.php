@extends('layouts.master')
@section('title')
	<title>Like Minds | Events</title>
@stop
@section('content')
<div class="be-loader">
    	<div class="spinner">
			<img src="img/logo-loader.png"  alt="">
			<p class="circle">
			  <span class="ouro">
			    <span class="left"><span class="anim"></span></span>
			    <span class="right"><span class="anim"></span></span>
			  </span>
			</p>
		</div>
    </div>
	<!-- THE HEADER -->
	<header>
		<div class="container-fluid custom-container">
			<div class="row no_row row-header">
				<div class="brand-be">
					<a href="index.html">
						<img class="logo-c active be_logo"  src="img/logo.png" alt="logo">
						
					</a>
				</div>
				
				<div class="login-header-block">
						
				</div>
			</div>
		</div>
	</header>
		
	<!-- MAIN CONTENT -->
	<div id="content-block">
		<div class="head-bg">
			<div class="head-bg-img"></div>
				
		</div>
		<div class="container-fluid cd-main-content custom-container">
			<div class="row">
				<div class="col-md-2 left-feild">
					<form action="./" class="input-search">
						<input type="text" required="" placeholder="Enter keyword">
							<i class="fa fa-search"></i>
							<input type="submit" value="">
					</form>				
				</div>			
				<div class="col-md-10 ">
					<div class="for-be-dropdowns">
						<div class="be-drop-down">
							<i class="icon-projects"></i>
							<span class="be-dropdown-content"> Projects	</span>
							<ul class="drop-down-list">
								<li class="filter" data-filter=".category-1"><a data-type="category-1">Projects</a></li>
								<li class="filter" data-filter=".category-2"><a data-type="category-2">Work in Progress</a></li>
								<li class="filter" data-filter=".category-3"><a data-type="category-3">People</a></li>
							</ul>
						</div>
						<div class="be-drop-down">
							<i class="icon-creative"></i>
							<span class="be-dropdown-content">All Creative Filds
							</span>
							<ul class="drop-down-list">
								<li class="filter" data-filter=".category-4"><a>Item - 1</a></li>
								<li class="filter" data-filter=".category-5"><a>Item - 2</a></li>
								<li class="filter" data-filter=".category-1"><a>Item - 3</a></li>
							</ul>
						</div>
						<div class="be-drop-down">
							<i class="icon-features"></i>
							<span class="be-dropdown-content">Features
							</span>
							<ul class="drop-down-list">
								<li class="filter" data-filter=".category-2"><a>Featured</a></li>
								<li class="filter" data-filter=".category-3"><a>Most Appreciated</a></li>
								<li class="filter" data-filter=".category-4"><a>Most Viewed</a></li>
								<li class="filter" data-filter=".category-5"><a>Most Discussed</a></li>
								<li class="filter" data-filter=".category-1"><a>Most Recent</a></li>
							</ul>
						</div>
						
					</div>				
				</div>
			</div>
		</div>		
		<div class="container-fluid custom-container">
			<div class="row">
				
				<div class="col-md-2 left-feild">
					<div class="be-vidget">
						<h3 class="letf-menu-article">
							Popular Creative Filds
						</h3>
						<div class="creative_filds_block">
							<div class="ul">
								<a  data-filter=".category-1" class="filter">Graphic Design		</a>
								<a data-filter=".category-2" class="filter">Photography			</a>
								<a data-filter=".category-3" class="filter">Interaction Design	</a>
								<a data-filter=".category-4" class="filter">Art Direction		</a>
								<a data-filter=".category-5" class="filter">Illustration		</a>
							</div>
						</div>
					</div>
					<div class="be-vidget">
						<h3 class="letf-menu-article">
							Popular Tags
						</h3>
						<div class="tags_block clearfix">
							<ul>
								<li><a data-filter=".category-6" class="filter">photoshop</a></li>
								<li><a data-filter=".category-1" class="filter">graphic</a></li>
								<li><a data-filter=".category-2" class="filter">art</a></li>
								<li><a data-filter=".category-3" class="filter">website</a></li>
								<li><a data-filter=".category-4" class="filter">logo</a></li>
								<li><a data-filter=".category-5" class="filter">identity</a></li>
								<li><a data-filter=".category-6" class="filter">logo design</a></li>
								<li><a data-filter=".category-1" class="filter">interactive</a></li>
								<li><a data-filter=".category-2" class="filter">blue</a></li>
								<li><a data-filter=".category-3" class="filter">branding</a></li>
							</ul>
						</div>
					</div>
					<div class="be-vidget">
						
						<div class="filter-block">
							<ul>
								
								
								
								
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-10">
					<div id="container-mix"  class="row _post-container_">
						<div class="category-1 mix custom-column-5">
							<div class="be-post">
								<a href="page1.html" class="be-img-block">
								<img src="img/p1.jpg" alt="omg">
								</a>
								<a href="page1.html" class="be-post-title">The kitsch destruction of our world</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
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
						<div class="category-2 mix custom-column-5">
							<div class="be-post">
								<a href="page2.html" class="be-img-block">
								<img src="img/p2.jpg" alt="omg">
								</a>
								<a href="page2.html" class="be-post-title">Treebeard</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
								</span>
								<div class="author-post">
									<img src="img/a1.png" alt="" class="ava-author">
									<span>by <a href="page2.html">Hoang Nguyen</a></span>
								</div>
								<div class="info-block">
									<span><i class="fa fa-thumbs-o-up"></i> 360</span>
									<span><i class="fa fa-eye"></i> 789</span>
									<span><i class="fa fa-comment-o"></i> 20</span>
								</div>
							</div>
						</div>
						<div class="category-3 mix custom-column-5">
							<div class="be-post">
								<a href="page3.html" class="be-img-block">
								<img src="img/p3.jpg" alt="omg">
								</a>
								<a href="page3.html" class="be-post-title">Colors of Ramadan</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
								</span>
								<div class="author-post">
									<img src="img/a2.png" alt="" class="ava-author">
									<span>by <a href="page3.html">Hoang Nguyen</a></span>
								</div>
								<div class="info-block">
									<span><i class="fa fa-thumbs-o-up"></i> 360</span>
									<span><i class="fa fa-eye"></i> 789</span>
									<span><i class="fa fa-comment-o"></i> 20</span>
								</div>
							</div>
						</div>
						<div class="category-4 mix custom-column-5">
							<div class="be-post">
								<a href="page1.html" class="be-img-block">
								<img src="img/p4.jpg" alt="omg">
								</a>
								<a href="page1.html" class="be-post-title">Leaving Home - L'Officiel Ukraine</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
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
						<div class="category-5 mix custom-column-5">
							<div class="be-post">
								<a href="page2.html" class="be-img-block">
								<img src="img/p5.jpg" alt="omg">
								</a>
								<a href="page2.html" class="be-post-title">Drive Your World</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
								</span>
								<div class="author-post">
									<img src="img/a4.png" alt="" class="ava-author">
									<span>by <a href="page2.html">Hoang Nguyen</a></span>
								</div>
								<div class="info-block">
									<span><i class="fa fa-thumbs-o-up"></i> 360</span>
									<span><i class="fa fa-eye"></i> 789</span>
									<span><i class="fa fa-comment-o"></i> 20</span>
								</div>
							</div>
						</div>
						<div class="category-6 mix custom-column-5">
							<div class="be-post">
								<a href="page1.html" class="be-img-block">
								<img src="img/p13.jpg" alt="omg">
								</a>
								<a href="page1.html" class="be-post-title">Fran Ewald for The Diaries Project</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
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
						<div class="category-5 mix custom-column-5">
							<div class="be-post">
								<a href="page1.html" class="be-img-block">
								<img src="img/p7.jpg" alt="omg">
								</a>
								<a href="page1.html" class="be-post-title">raindrops monochrome</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
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
						<div class="category-3 mix custom-column-5">
							<div class="be-post">
								<a href="page3.html" class="be-img-block">
								<img src="img/p8.jpg" alt="omg">
								</a>
								<a href="page3.html" class="be-post-title">Racing Queensland</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
								</span>
								<div class="author-post">
									<img src="img/a7.png" alt="" class="ava-author">
									<span>by <a href="page3.html">Hoang Nguyen</a></span>
								</div>
								<div class="info-block">
									<span><i class="fa fa-thumbs-o-up"></i> 360</span>
									<span><i class="fa fa-eye"></i> 789</span>
									<span><i class="fa fa-comment-o"></i> 20</span>
								</div>
							</div>
						</div>
						<div class="category-2 mix custom-column-5">
							<div class="be-post">
								<a href="page1.html" class="be-img-block">
								<img src="img/p9.jpg" alt="omg">
								</a>
								<a href="page1.html" class="be-post-title">NAHA Finalist Hairstylist of the Year Allen Ruiz</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
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
						<div class="category-4 mix custom-column-5">
							<div class="be-post">
								<a href="page1.html" class="be-img-block">
								<img src="img/p10.jpg" alt="omg">
								</a>
								<a href="page1.html" class="be-post-title">tomorrow</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
								</span>
								<div class="author-post">
									<img src="img/a8.png" alt="" class="ava-author">
									<span>by <a href="page1.html">Hoang Nguyen</a></span>
								</div>
								<div class="info-block">
									<span><i class="fa fa-thumbs-o-up"></i> 360</span>
									<span><i class="fa fa-eye"></i> 789</span>
									<span><i class="fa fa-comment-o"></i> 20</span>
								</div>
							</div>
						</div>
						<div class="category-6 mix custom-column-5">
							<div class="be-post">
								<a href="page1.html" class="be-img-block">
								<img src="img/p11.jpg" alt="omg">
								</a>
								<a href="page1.html" class="be-post-title">Tropicalia</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
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
						<div class="category-2 mix custom-column-5">
							<div class="be-post">
								<a href="page1.html" class="be-img-block">
								<img src="img/p12.jpg" alt="omg">
								</a>
								<a href="page1.html" class="be-post-title">Face</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
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
						<div class="category-1 mix custom-column-5">
							<div class="be-post">
								<a href="page1.html" class="be-img-block">
								<img src="img/p13.jpg" alt="omg">
								</a>
								<a href="page1.html" class="be-post-title">Stay Ahead Series</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
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
						<div class="category-3 mix custom-column-5">
							<div class="be-post">
								<a href="page1.html" class="be-img-block">
								<img src="img/p14.jpg" alt="omg">
								</a>
								<a href="page1.html" class="be-post-title">Faber-Castell / Psychological Problems</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
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
						<div class="category-1 mix custom-column-5">
							<div class="be-post">
								<a href="page1.html" class="be-img-block">
								<img src="img/p15.jpg" alt="omg">
								</a>
								<a href="page1.html" class="be-post-title">Garry Simpson - Bridges - Intelligent Life Magazine</a>
								<span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>, 
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
								</span>
								<div class="author-post">
									<img src="img/a9.png" alt="" class="ava-author">
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

			</div>
		</div>
	</div>
	
@stop
