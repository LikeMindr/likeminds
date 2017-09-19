
		<style>
         .lma-nav-color {
         background-color: #9ae4e8;

         }

				 li{
					 margin-top: 0.3cm;
				 }
      </style>
			<nav class="navbar navbar-default "><font size="4">
            <div class="container-fluid lma-nav-color">
               <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header ">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
               </div>
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="defaultNavbar1">
                  <ul class="nav navbar-nav">
                     <li class=" navbar-btn "><a href="/"><img src="/assets/img/logohd.png" class="" style="width:103px; height:30px;"></a></li>
                     <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">EVENTS<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                           <li class="btn"><a href="/events">ALL EVENTS</a></li>
                           @if(Auth::check())
                           <li class="btn"><a href="/events/create">CREATE</a></li>
                           @endif
                        </ul>
                     </li>
                     <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">PROFILE<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                           @if(Auth::check())
						<li class="btn"><a
		href="{{action('AccountsController@show', Auth::id())}}">VIEW</a></li>
													 <li class="btn"><a href="/accounts/{{Auth::id()}}/edit">EDIT</a></li>
                           @else
                           <li class="btn"><a href="/auth/login">LOGIN</a></li>
                           @endif
                        </ul>
                     </li>
                     <!-- <li><a href="masterCalendar.html">Opportunities<span class="sr-only">(current)</span></a></li> -->
                      @if(Auth::check())
                     <li class=""><a href="/auth/logout">LOG OUT</a></li>
                     <li class=""><a href="{{action('AccountsController@show', Auth::id())}}">WELCOME <?= Auth::user()->name; ?></a> </li>
                     @else
                     <li class="" ><a href="/auth/register">REGISTER</a></li>
                     <li class="" ><a href="/auth/login">LOGIN</a></li>
                     @endif
                  </ul>
               </div>

            </div>
</font>
         </nav>
   </header>
   <!--Header End-->

<!--
   <header>
   <div class="container-fluid custom-container">
      <div class="row no_row row-header">
         <div class="brand-be">
            <a href="index.html">
            <img class="logo-c active be_logo"  src="img/logo.png" alt="logo">
            <img class="logo-c be_logo" src="img/logo-green.png" alt="logo2">
            <img  class="logo-c be_logo" src="img/logo-orang.png" alt="logo3">
            <img class="logo-c be_logo" src="img/logo-red.png" alt="logo4">
            </a>
         </div>2
         <div class="header-menu-block">
            <button class="cmn-toggle-switch cmn-toggle-switch__htx"><span></span></button>
            <ul class="header-menu" id="one">
               <li>
                  <a href="">EVENTS</a>
                  <ul>
                     <li><a href="../events">VIEW ALL</a></li>
                     @if(Auth::check())
                     <li><a href="../events/create">CREATE</a></li>
                     @endif
                  </ul>
               </li>
               <li>
                  <a >PROFILE</a>
                  <ul>
                     @if(Auth::check())
                     <li><a href="/accounts/{{Auth::id()}}/">VIEW</a></li>
                     <li><a href="/accounts/{{Auth::id()}}/edit">EDIT</a></li>
                     @endif
                  </ul>
               </li>
               <li><a href="/auth/login">TEST LOGIN</a></li>
               @if(Auth::check())
               <li><a href="/auth/register">REGISTER</a></li>
               @endif
               <li><a href="/about">ABOUT</a></li>

               @if(Auth::check())
               <li id="ad-work-li"><a id="add-work-btn" class="btn color-1" href="">WELCOME < ?= Auth::user()->name; ?></a></li>
               @endif
            </ul>
         </div>
         <div class="login-header-block">
            <div class="login_block">
               @if(Auth::check())
               <a class="btn-login btn color-1 size-2 hover-2" href="/auth/logout" >
               LOG OUT</a>
               @else
               <a class="btn-login btn color-1 size-2 hover-2" href="/auth/login" >
               LOG IN</a>
               @endif
            </div>
         </div>
      </div>
   </div>
</header> -->
<!-- SCRIPTS	 -->
<!-- <script src="../assets/js/jquery-2.1.4.min.js"></script>
<script src="../assets/js/jquery-ui.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/idangerous.swiper.min.js"></script>
<script src="../assets/js/jquery.mixitup.js"></script>
<script src="../assets/js/jquery.viewportchecker.min.js"></script>
<script src="../assets/js/filters.js"></script>
<script src="../assets/js/global.js"></script> -->
