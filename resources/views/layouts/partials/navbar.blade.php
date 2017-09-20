<style>
   .lma-nav-color {
   background-color: #9ae4e8;
   }
   li{
   margin-top: 0.3cm;
   }
</style>
<header>
<nav class="navbar navbar-default ">
   <font size="4">
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
               @if(Auth::check())
               <li class=""><a href="/auth/logout">LOG OUT</a></li>
               <li class=""><a href="{{action('AccountsController@show', Auth::id())}}">WELCOME <?= Auth::user()->name; ?></a> </li>
               @else
               <li class="" ><a href="/auth/register">REGISTER</a></li>
               <li class="" ><a href="/auth/login">LOGIN</a></li>
               @endif
							 <li><a href="/about">ABOUT</a></li>
            </ul>
         </div>
      </div>
   </font>
</nav>


</header>
