@extends('layouts.master')
@section('title')
<title> Like Minds At </title>
@stop
@section('content')

    <div class="container">

      <!-- Timeline
      ================================================= -->
      <div class="timeline">
        <div class="timeline-cover">

          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3">
                <div class="profile-info">
                  <img src="http://placehold.it/300x300" alt="" class="img-responsive profile-photo" />
                  <h3>Chloe Adams</h3>
                  <p class="text-muted">San Antonio, TX</p>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  @if(Auth::check())
                    <li><a href="timeline.html" class="active">Edit Profile</a></li>
                    <li><a href="timeline-about.html">My Events</a></li>
                    <li><a href="timeline-album.html">Create Event</a></li>
                    <li><a href="timeline-album.html">Logout</a></li>
                  @else
                    <li><a href="timeline.html" class="active"><?= Auth::user()->name; ?>Events</a></li>
                    <li><a href="timeline-about.html">Contact</a></li>
                  @endif
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="http://placehold.it/300x300" alt="" class="img-responsive profile-photo" />
              <h4>Chloe Adams</h4>
              <p class="text-muted">San Antonio, TX</p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                    <li><h4>Sarah Cruiz</h4></li>
                @if(Auth::check())
                    <li><a href="timeline.html" class="active">Edit Profile</a></li>
                    <li><a href="timeline-about.html">My Events</a></li>
                    <li><a href="timeline-album.html">Create Event</a></li>
                    <li><a href="timeline-album.html">Logout</a></li>
                  @else
                    <li><a href="timeline.html" class="active"><?= Auth::user()->name; ?>Events</a></li>
                    <li><a href="timeline-about.html">Contact</a></li>
                  @endif
                </ul>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">

              <!-- Post Create Box
              ================================================= -->
              <div class="create-post">
                <div class="row">
                  <div class="col-md-7 col-sm-7">
                    <div class="form-group">
                      <textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
                    </div>
                  </div>
                </div>
              </div><!-- Post Create Box End-->


    <!-- Scripts
    ================================================= -->
    <!-- <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script> -->

  </body>
</html>
@stop
