@extends('layouts.master')
@section('title')
	<title>Like Minds At</title>
@stop
@section('content')
<style type="text/css">.team-entry {
    margin-top: 25px;
}

.parallax {
    /* The image used */
    background-image: linear-gradient(to right, rgba(0,0,0, 0.5) , rgba(0,0,0, 0.5)), url("/assets/img/code.jpg");

    /* Set a specific height */
    min-height: 300px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

</style>
<html> 
       
    <body style="background-color: #2C4762;"> 

        <!-- THE LOADER -->         
        <div class="be-loader"> 
            <div class="spinner"> 
                <img src="img/logo-loader.png" alt=""> 
                <p class="circle"> <span class="ouro"> <span class="left"><span class="anim"></span></span> <span class="right"><span class="anim"></span></span> </span> </p> 
            </div>             
        </div>         
        <!-- THE HEADER -->         
        <!-- MAIN CONTENT --> 
<div class="counters-block number-counters" style="background-color: #2C4762;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3"> 
                        <div class="counter-entry">
                                <div class="stat-number" data-to="50000" data-speed="3000">0</div>
                                <div class="counter-label">Lines of Code</div>
                        </div>                    
                    </div>              
                    <div class="col-xs-12 col-sm-6 col-md-3"> 
                       <div class="counter-entry">
                                <div class="stat-number" data-to="154" data-speed="3000">0</div>
                                <div class="counter-label">Pull Requests</div>
                        </div>                      
                    </div>                 
                    <div class="col-xs-12 col-sm-6 col-md-3" style="margin-top: -10px;"> 
                        <div class="counter-entry">
                                <div class="stat-number" data-to="345" data-speed="3000">0</div>
                                <div class="counter-label">Commits</div>
                        </div>                    
                    </div>                 
                    <div class="col-xs-12 col-sm-6 col-md-3"> 
                        <div class="counter-entry">
                                <div class="stat-number" data-to="315" data-speed="3000">0</div>
                                <div class="counter-label">Cups of Coffee</div>
                        </div> 
                    </div>                 
            </div>             
        </div>         
    </div>     
</div> 
<div>
</div> 

<div class="parallax"></div>       
        <div id="content-block"> 
            <div class="pagination hidden"></div>             
        </div>         
    </div>     
    <div class="container text-center" style="font-family: 'Montserrat', sans-serif;font-size: 18px;background: #2C4762;width: 100%;">
        <div class="about-description"> 
            <div class="row"> 
                <div class="col-xs-12 col-md-10 col-md-offset-1"> 
</div>                 
            </div>             
        </div>         
        <div class="block"> 
            <h3 class="block-title" style="color: white;font-size: 60px;font-family: font-family: 'Grand Hotel', ;cursive;;">MEET THE TEAM</h3> 
            <div class="block-subtitle">
                <p style="font-family: 'Montserrat', sans-serif;font-size: 20px;padding-top: 20px;">We're full-stack developers passionate about functionality, mobile responsiveness, and user-experience.&nbsp;</p>
            </div>             
            <div class="row" style="font-size: 20px;font-family: 'Montserrat', sans-serif;"> 
                <div class="col-md-4"> 
                    <div class="team-entry" style="background: #EAEEF6;"> 
                        <a href="blog-detail-2.html">
                            <img class="img-responsive img-full" src="/assets/img/alex-hs.jpg" alt="">
                        </a>                         
                        <h4 class="team-name" style="font-size: 30px;font-family: 'Montserrat', sans-serif;font-weight: bold;color: #2C4762;">Alex Endacott</h4> 
                        <div class="team-position">
                            <h5 style="margin-bottom: 20px;margin-top: -20px;font-weight: bold; color: #2C4762">Team Nickname: Back-End and Boujee</h5>
                            <p style="font-size: 20px;font-weight: bold;"><b style="font-family: 'Montserrat', sans-serif;">Full-Stack Web Developer</b></p>
                            <p style="font-size: 20px;font-family: 'Montserrat', sans-serif;">Responsible for framework implementation, object-oriented programming, relational database management, CRUD operations, cloud computing, version control, trend analytics, and data visualization, front-end templating, mobile responsiveness, and integration with 3rd-party APIs.</p>
                            <p style="font-size: 16px;"></p>


                        </div> 
                                              
                        <div class="team-social"> 
                            <a href="https://github.com/Grim102"><i class="fa fa-github"></i></a> 
                            <a href="blog-detail-2.html"><i class="fa fa-desktop"></i></a> 
                            <a href=""><i class="fa fa-file"></i></a> 
                        </div>                         
                    </div>                     
                </div>                 
                <div class="col-md-4"> 
                    <div class="team-entry" style="background: #EAEEF6;"> 
                        <a href="blog-detail-2.html">
                            <img class="img-responsive img-full" src="/assets/img/chloe-hs.jpg" alt="">
                        </a>                         
                        <h4 class="team-name" style="font-size: 30px;font-family: 'Montserrat', sans-serif;font-weight: bold;color: #2C4762;">Chloe Adams</h4> 
                        <div class="team-position">
                            <h5 style="margin-bottom: 20px;margin-top: -20px;font-weight: bold;color: #2C4762">Team Nickname: Chlonce´</h5>
                            <p style="font-size: 20px;font-family: 'Montserrat', sans-serif;font-weight: bold;">Full-Stack Web Developer</p>
                            <p style="font-size: 20px;font-family: 'Montserrat', sans-serif;">Designed project concept &amp; brand strategy, implemented SEO &amp; Google Analytics, incorporated the Google places and calendar API, wrote custom javascript, primarily responsible for the look and mobile-responsiveness of the: profile/edit profile pages, events index, create/edit event pages, and the about page.&nbsp;</p>
                            <p style="font-size: 16px;"></p>
                            
                        </div>
                       
</div>                         
                        <div class="team-social"> 
                            <a href="https://github.com/chloeadams"><i class="fa fa-github"></i></a> 
                            <a href="https://thisgirlcodes.biz"><i class="fa fa-desktop"></i></a> 
                            <a href="Resume with References Chloe.pdf"><i class="fa fa-file"></i></a> 
                        </div>                         
                    </div>                     
                </div>                 
                <div class="col-md-4"> 
                    <div class="team-entry" style="background: #EAEEF6;"> 
                        <a href="blog-detail-2.html">
                            <img class="img-responsive img-full" src="/assets/img/gonzo-hs.jpg" alt="">
                        </a>                         
                        <h4 class="team-name" style="font-size: 30px;font-family: 'Montserrat', sans-serif;font-weight: bold;color: #2C4762;">Gonzalo Rodriguez
                        </h4> 
                        <div class="team-position" style="font-size: 16px;">
                            <h5 style="margin-bottom: 20px;margin-top: -20px;font-weight: bold; color: #2C4762">Team Nickname: Z-Man
                            </h5>
                            <p style="font-size: 20px;font-family: 'Montserrat', sans-serif;font-weight: bold;">Full-Stack Web Developer
                            </p>
                            <p style="font-size: 20px;font-family: 'Montserrat', sans-serif;">Designed the custom graphics for the website, consulted on brand strategy, front-end templating, overall mobile-responsivneness for the project, wrote custom javascript, primarily responsible for the look and mobile-responsiveness of the, landing-page, navigation bar, and footer.&nbsp;
                            </p>
                            <p style="font-size: 16px;"></p>
                            
    
                       
                        </div>
                       
                         <div class="team-social"> 
                            <a href="https://github.com/rodro"><i class="fa fa-github"></i></a> 
                            <a href="https://stm.pm"><i class="fa fa-desktop"></i></a> 
                            <a href="blog-detail-2.html"><i class="fa fa-file"></i></a> 
                        </div>                         
                    </div> 
                    </div>                    
                </div>                 
                
</div>                 
            </div>             
        </div>
    </div>     

   


@stop



