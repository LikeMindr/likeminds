@extends('layouts.master')
@section('title')
	<title>{{ $event->title }}</title>
@stop
@section('content')

	<!-- THE LOADER -->


	<!-- MAIN CONTENT -->

        <!-- THE LOADER -->         
 <body> 
        <!-- THE LOADER -->         
        <div class="be-loader"> 
            <div class="spinner"> 
                <img src="img/logo-loader.png" alt=""> 
                <p class="circle"> <span class="ouro"> <span class="left"><span class="anim"></span></span> <span class="right"><span class="anim"></span></span> </span> </p> 
            </div>             
        </div>         
        <!-- THE HEADER -->                  
        <!-- MAIN CONTENT -->         
        <div id="content-block" style="background: #2C4762;"> 
            <div class="container be-detail-container"> 
                <div class="row"> 
                    <div class="col-xs-12 col-md-4 left-feild"> 
                        <div class="be-user-block style-3" style="background: #EAEEF6;"> 
                            <div class="be-user-detail"> 
                                <a class="be-ava-user style-2" href="page1.html"> 
                                    <img src="img/ava_10.jpg" alt=""> 
                                </a>                                                                                                   
                                <p class="be-use-name" style="color: #2C4762;">Leigh Taylor</p> 
                                <div class="be-user-info" style="font-family: 'Montserrat', sans-serif;;;"> 
                                    Barnsley, United Kingdom
</div>                                                                  
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
                                <div class="stat-row clearfix" style="font-family: 'Montserrat', sans-serif;background: #89C12A;;;">
                                    <i class="stat-icon icon-views-b"></i> Projects views
                                    <span class="stat-counter">218098</span>
                                </div>                                 
                                <div class="stat-row clearfix" style="font-family: 'Montserrat', sans-serif;background: #89C12A;;;">
                                    <i class="stat-icon icon-like-b"></i>Appreciations
                                    <span class="stat-counter">14335</span>
                                </div>                                                                                                   
                            </div>                             
                        </div>                         
                        <div class="be-desc-block">
                            <div class="be-desc-author" style="background: #EAEEF6;"> 
                                <div class="be-desc-label" style="font-family: 'Grand Hotel', cursive;color: #2C4762;;;">About the Creator</div>                                 
                                <div class="clearfix"></div>                                 
                                <div class="be-desc-text" style="font-family: 'Montserrat', sans-serif;color: #2C4762;;;"> 
                                    Nam sit amet massa commodo, tristique metus at, consequat turpis. In vulputate justo at auctor mollis. Aliquam non sagittis tortor. Duis tristique suscipit risus, quis facilisis nisl congue vitae. Nunc varius pellentesque scelerisque. Etiam quis massa vitae lectus placerat ullamcorper pellentesque vel nisl.
</div>                                 
                            </div>                             
                            <div class="be-desc-author" style="background: #EAEEF6;margin-top: 50px;"> 
                                <div class="be-desc-label" style="font-family: 'Grand Hotel', cursive;color: #2C4762;;;">Like-Minds Attending</div>                                 
                                <div class="clearfix"></div>                                 
                                <div class="be-desc-text" style="color: #2C4762;"> 
                                    Sed dignissim scelerisque pretium. Vestibulum vel lacus laoreet nunc fermentum maximus. Proin id sodales sem, at consectetur urna. Proin vestibulum, erat a hendrerit sodales, nulla libero ornare dolor.
</div>                                 
                            </div>
                        </div>                         
                    </div>                     
                    <div class="col-xs-12 col-md-8"> 
                        <div class="tab-wrapper style-1"> 
                            <div class="tab-nav-wrapper"> 
                                <div class="nav-tab  clearfix"> 
                                    <div class="nav-tab-item active"> 
                                        <span style="font-family: 'Grand Hotel', cursive;font-size: 20px;color: #2C4762;;;cursive;;">The Event</span> 
                                    </div>                                     
                                </div>                                 
                            </div>                             
                            <div class="tabs-content clearfix"> 
                                <div class="tab-info active"> 
                                    <div class="row"> 
                                        <div class="col-ml-12 col-xs-6 col-sm-4" style="width: 100%;background: #EAEEF6;padding-top: 20px;margin-left: 10px;"> 
                                            <div class="be-post" style="color: #2C4762;"> 
                                                <a href="page1.html" class="be-img-block"> 
                                                    <img src="img/p1.jpg" alt="omg"> 
                                                </a>                                                 

                                                <div class="row"> 
                                                    <h1 style="margin-left: 15px;font-family: 'Montserrat', sans-serif;;;">Event Name </h1>
                                                </div>                                                 
                                                <div class="row"> 
                                                    <div class="col-md-4"> 
                                                        <h3 style="font-family: 'Montserrat', sans-serif;;;">Date &amp; Time:</h3> 
                                                    </div>                                                     

                                                    <div class="col-md-4"> 
                                                        <h3 style="font-family: 'Montserrat', sans-serif;;;">Column title</h3> 
                                                    </div>
                                                </div>                                                 

                                                <div class="row"> 
                                                    <div class="col-md-4"> 
                                                        <h3 style="font-family: 'Montserrat', sans-serif;;;">Location:</h3> 
                                                    </div>                                                     

                                                    <div class="col-md-4"> 
                                                        <h3 style="font-family: 'Montserrat', sans-serif;;;">Column title</h3> 
                                                    </div>
                                                </div>                                                 

                                                <div class="row"> 
                                                    <div class="col-md-4"> 
                                                        <h3 style="font-family: 'Montserrat', sans-serif;;;">Category:</h3> 
                                                    </div>                                                     

                                                    <div class="col-md-4"> 
                                                        <h3 style="font-family: 'Montserrat', sans-serif;;;">Column title</h3> 
                                                    </div>
                                                </div>                                                 
                                                <div class="row"> 
                                                    <div class="col-md-4">
                                                        <h3 style="font-family: 'Montserrat', sans-serif;;;">Description:</h3> 
                                                    </div>                                                     
                                                    <div class="col-md-4">
                                                        <h3 style="font-family: 'Montserrat', sans-serif;;;">Column title</h3> 
                                                        <p> <br></p> 
                                                    </div>
                                                </div>                                                 

                                                <div class="row"> 
                                                    <div class="col-md-4">
                                                        <h3 style="font-family: 'Montserrat', sans-serif;;;">Description:</h3> 
                                                    </div>                                                     
                                                    <div class="col-md-4">
                                                        <h3 style="font-family: 'Montserrat', sans-serif;;;">Column title</h3> 
                                                        <p> <br></p> 
                                                    </div>
                                                </div>                                                 

                                                <div class="row"> 
                                                    <div class="col-md-4">
                                                        <h3 style="font-family: 'Montserrat', sans-serif;;;">Description:</h3> 
                                                    </div>                                                     
                                                    <div class="col-md-4">
                                                        <h3 style="font-family: 'Montserrat', sans-serif;;;">Column title</h3> 
                                                        <p> <br></p> 
                                                    </div>
                                                </div>                                                 

                                                <div class="row"></div>                                                                                                  
                                                <div class="author-post"> 
                                                    <img src="img/a1.png" alt="" class="ava-author"> 
                                                    <span>by                         <a href="page1.html">Hoang Nguyen</a></span> 
                                                </div>                                                 
                                            </div>                                             
                                        </div>                                         
                                    </div>                                     
                                </div>                                 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>                 
</body>
<!-- AddEvent -->
<script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>

@stop
