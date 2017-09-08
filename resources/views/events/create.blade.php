@extends('layouts.master')
@section('title')
<title> Like Minds At </title>
@stop
@section('content')
<header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index-register.html"><img src="images/logo.png" alt="logo" /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span><img src="images/down-arrow.png" alt="" /></span></a>
                  <ul class="dropdown-menu newsfeed-home">
                    <li><a href="index.html">Landing Page 1</a></li>
                    <li><a href="index-register.html">Landing Page 2</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Newsfeed <span><img src="images/down-arrow.png" alt="" /></span></a>
                  <ul class="dropdown-menu newsfeed-home">
                    <li><a href="newsfeed.html">Newsfeed</a></li>
                    <li><a href="newsfeed-people-nearby.html">Poeple Nearly</a></li>
                    <li><a href="newsfeed-friends.html">My friends</a></li>
                    <li><a href="newsfeed-messages.html">Chatroom</a></li>
                    <li><a href="newsfeed-images.html">Images</a></li>
                    <li><a href="newsfeed-videos.html">Videos</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Timeline <span><img src="images/down-arrow.png" alt="" /></span></a>
                <ul class="dropdown-menu login">
                  <li><a href="timeline.html">Timeline</a></li>
                  <li><a href="timeline-about.html">Timeline About</a></li>
                  <li><a href="timeline-album.html">Timeline Album</a></li>
                  <li><a href="timeline-friends.html">Timeline Friends</a></li>
                  <li><a href="edit-profile-basic.html">Edit: Basic Info</a></li>
                  <li><a href="edit-profile-work-edu.html">Edit: Work</a></li>
                  <li><a href="edit-profile-interests.html">Edit: Interests</a></li>
                  <li><a href="edit-profile-settings.html">Account Settings</a></li>
                  <li><a href="edit-profile-password.html">Change Password</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">All Pages <span><img src="images/down-arrow.png" alt="" /></span></a>
                <ul class="dropdown-menu page-list">
                  <li><a href="index.html">Landing Page 1</a></li>
                  <li><a href="index-register.html">Landing Page 2</a></li>
                  <li><a href="newsfeed.html">Newsfeed</a></li>
                  <li><a href="newsfeed-people-nearby.html">Poeple Nearly</a></li>
                  <li><a href="newsfeed-friends.html">My friends</a></li>
                  <li><a href="newsfeed-messages.html">Chatroom</a></li>
                  <li><a href="newsfeed-images.html">Images</a></li>
                  <li><a href="newsfeed-videos.html">Videos</a></li>
                  <li><a href="timeline.html">Timeline</a></li>
                  <li><a href="timeline-about.html">Timeline About</a></li>
                  <li><a href="timeline-album.html">Timeline Album</a></li>
                  <li><a href="timeline-friends.html">Timeline Friends</a></li>
                  <li><a href="edit-profile-basic.html">Edit Profile</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="contact.html">Contact</a></li>
            </ul>
            <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input type="text" class="form-control" placeholder="Search friends, photos, videos">
              </div>
            </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->

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
                  <h3>Sarah Cruiz</h3>
                  <p class="text-muted">Creative Director</p>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="timeline.html">Timeline</a></li>
                  <li><a href="timeline-about.html" class="active">About</a></li>
                  <li><a href="timeline-album.html">Album</a></li>
                  <li><a href="timeline-friends.html">Friends</a></li>
                </ul>
                <ul class="follow-me list-inline">
                  <li>1,299 people following her</li>
                  <li><button class="btn-primary">Add Friend</button></li>
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="http://placehold.it/300x300" alt="" class="img-responsive profile-photo" />
              <h4>Sarah Cruiz</h4>
              <p class="text-muted">Creative Director</p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="timline.html">Timeline</a></li>
                <li><a href="timeline-about.html" class="active">About</a></li>
                <li><a href="timeline-album.html">Album</a></li>
                <li><a href="timeline-friends.html">Friends</a></li>
              </ul>
              <button class="btn-primary">Add Friend</button>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3">

              <!--Edit Profile Menu-->
              <ul class="edit-menu">
              	<li><i class="icon ion-ios-information-outline"></i><a href="edit-profile-basic.html">Basic Information</a></li>
              	<li class="active"><i class="icon ion-ios-briefcase-outline"></i><a href="edit-profile-work-edu.html">Education and Work</a></li>
              	<li><i class="icon ion-ios-heart-outline"></i><a href="edit-profile-interests.html">My Interests</a></li>
                <li><i class="icon ion-ios-settings"></i><a href="edit-profile-settings.html">Account Settings</a></li>
              	<li><i class="icon ion-ios-locked-outline"></i><a href="edit-profile-password.html">Change Password</a></li>
              </ul>
            </div>
            <div class="col-md-7">

              <!-- Edit Work and Education
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-book-outline"></i>My education</h4>
                  <div class="line"></div>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form name="education" id="education" class="form-inline">
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="school">My university</label>
                        <input id="school" class="form-control input-group-lg" type="text" name="school" title="Enter School" placeholder="My School" value="Harvard Unversity" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="date-from">From</label>
                        <input id="date-from" class="form-control input-group-lg" type="text" name="date" title="Enter a Date" placeholder="from" value="2012" />
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="date-to" class="">To</label>
                        <input id="date-to" class="form-control input-group-lg" type="text" name="date" title="Enter a Date" placeholder="to" value="2016" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="edu-description">Description</label>
                        <textarea id="edu-description" name="description" class="form-control" placeholder="Some texts about my education" rows="4" cols="400">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="graduate">Graduated?:-</label>
                        <input id="graduate" type="checkbox" name="graduate" value="graduate" checked> Yes!!
                      </div>
                    </div>
                    <button class="btn btn-primary">Save Changes</button>
                  </form>
                </div>
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-briefcase-outline"></i>Work Experiences</h4>
                  <div class="line"></div>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form name="work" id="work" class="form-inline">
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="company">Company</label>
                        <input id="company" class="form-control input-group-lg" type="text" name="company" title="Enter Company" placeholder="Company name" value="Envato Inc" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="designation">Designation</label>
                        <input id="designation" class="form-control input-group-lg" type="text" name="designation" title="Enter designation" placeholder="designation name" value="Exclusive Author" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="from-date">From</label>
                        <input id="from-date" class="form-control input-group-lg" type="text" name="date" title="Enter a Date" placeholder="from" value="2016" />
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="to-date" class="">To</label>
                        <input id="to-date" class="form-control input-group-lg" type="text" name="date" title="Enter a Date" placeholder="to" value="Present" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="work-city">City/Town</label>
                        <input id="work-city" class="form-control input-group-lg" type="text" name="city" title="Enter city" placeholder="Your city" value="Melbourne"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="work-description">Description</label>
                        <textarea id="work-description" name="description" class="form-control" placeholder="Some texts about my work" rows="4" cols="400">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</textarea>
                      </div>
                    </div>
                    <button class="btn btn-primary">Save Changes</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-2 static">

              <!--Sticky Timeline Activity Sidebar-->
              <div id="sticky-sidebar">
                <h4 class="grey">Sarah's activity</h4>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">Sarah</a> Commended on a Photo</p>
                    <p class="text-muted">5 mins ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">Sarah</a> Has posted a photo</p>
                    <p class="text-muted">an hour ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">Sarah</a> Liked her friend's post</p>
                    <p class="text-muted">4 hours ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">Sarah</a> has shared an album</p>
                    <p class="text-muted">a day ago</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop
