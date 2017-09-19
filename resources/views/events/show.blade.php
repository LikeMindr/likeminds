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
						<a class="be-img-block" href="/accounts/{{$event['user']['id']}}">
							<img id="host-img" src=
								<?php clearstatcache();
									if($event['user']['image'] != NULL): ?>
										"/assets{{$event['user']['image']}}"
								<?php else: ?>
										"/assets/img/usericon.png"
								<?php endif; ?>
								alt="{{ $event['user']['name'] }}" class="img-responsive">
						</a>
                                <p class="be-use-name" style="color: #2C4762;">Leigh Taylor</p> 
                                <div class="be-user-info" style="font-family: 'Montserrat', sans-serif;;;"> 
								{{ $event['user']['location'] }}
</div>                                                                  
                                <div class="be-user-social"> 
								<?php if(strlen($event['user']['facebook']) > 21): ?>					
								<a class="social-btn color-1" 
									href="{{$event['user']['facebook']}}" target="blank">
									<i class="fa fa-facebook"></i></a>
								<?php endif; ?>
								<?php if(strlen($event['user']['twitter']) > 20): ?>
								<a class="social-btn color-2" 
									href="{{$event['user']['twitter']}}" target="blank">
									<i class="fa fa-twitter"></i></a>
								<?php endif;  ?>
								<?php if(strlen($event['user']['pinterest']) > 22): ?>
								<a class="social-btn color-4" 
									href="{{$event['user']['pinterest']}}" target="blank">
									<i class="fa fa-pinterest-p"></i></a>
								<?php endif;  ?>
								<?php if(strlen($event['user']['instagram']) > 22): ?>
								<a class="social-btn color-5" 
									href="{{$event['user']['instagram']}}" target="blank">
									<i class="fa fa-instagram"></i></a>
								<?php endif;  ?>
                                </div>                                                                  
                            </div>                             
                            <div class="be-user-statistic"> 
                                <div class="stat-row clearfix" style="font-family: 'Montserrat', sans-serif;background: #89C12A;;;">
                                     Events Created
                                    <span class="stat-counter">{{count($event['user']->events)}}</span>
                                </div>                                 
                                <div class="stat-row clearfix" style="font-family: 'Montserrat', sans-serif;background: #89C12A;;;">
                                    Events Attended
                                    <span class="stat-counter">{{count($event['user']->attends)}}</span>
                                </div>                                                                                                   
                            </div>                             
                        </div>
                        <div class="be-desc-block">
                            <div class="be-desc-author" style="background: #EAEEF6;"> 
                                <div class="be-desc-label" style="font-family: 'Grand Hotel', cursive;color: #2C4762;;;">About the Creator</div>                                 
                                <div class="clearfix"></div>                                 
								<div class="be-desc-text" style="font-family:
								'Montserrat', sans-serif;color: #2C4762;;;">
								@if($event['user']['bio'] != NULL)	
								{{$event['user']['bio']}}
								@else
								This likemindr has not yet added a bio.
								@endif
								</div>                                 
                            </div>
                            <div class="be-desc-author" style="background: #EAEEF6;margin-top: 50px;"> 
                                <div class="be-desc-label" style="font-family: 'Grand Hotel', cursive;color: #2C4762;;;">Like-Minds Attending</div>                                 
                                <div class="clearfix"></div>                                 
		<div class="row">
			<div class="col-md-12">
                                <div class="be-desc-text" style="color: #2C4762;"> 
							@foreach($event->attends as $user)	
								<div class="category-1 mix custom-column-5">
										<a href="/accounts/{{$user['user_id']}}" class="be-img-block">
											<img src=
											<?php clearstatcache();
												if(App\User::find($user['user_id'])->image != NULL): ?>
												"../assets{{App\User::find($user['user_id'])->image}}"
											<?php else: ?>
												"/assets/img/usericon.png"
											<?php endif; ?>
							class="img-responsive" alt="{{App\User::find($user['$user_id'])['name']}}">
										</a>
										<a href="/accounts/{{$user['user_id']}}">
										{{App\User::find($user['user_id'])['name']}}
										</a>
								</div>
							@endforeach
					</div>
				</div>
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
											<img src=
											<?php clearstatcache();
												if($event->image != NULL): ?>
													"/assets{{$event->image}}"
												<?php else: ?>
												"{{App\Event::defaultImage($event->category)}}"
											<?php endif; ?>
											/>
                                                <div class="row"> 
													<h1 style="margin-left:
													15px;font-family: 'Montserrat', sans-serif;;;">
													{{$event->title}} </h1>
                                                </div>                                                 
                                                <div class="row"> 
                                                    <div class="col-md-4"> 
                                                        <h3 style="font-family: 'Montserrat', sans-serif;;;">Date &amp; Time:</h3> 
                                                    </div>                                                     

                                                    <div class="col-md-4"> 
                                                        <h3 style="font-family: 'Montserrat', sans-serif;;;">On {{$event->date}} at {{$event->time}}</h3> 
                                                    </div>
                                                </div>                                                 


                                                <div class="row"> 
                                                    <div class="col-md-4"> 
                                                        <h3 style="font-family: 'Montserrat', sans-serif;;;">Location:</h3> 
                                                    </div>                                                     

		
                                                    <div class="col-md-4"> 
                                                        <h3 style="font-family: 'Montserrat', sans-serif;;;">{{$event->location}}</h3> 
                                                    </div>
                                                </div>                                                 

                                                <div class="row"> 
                                                    <div class="col-md-4"> 
                                                        <h3 style="font-family: 'Montserrat', sans-serif;;;">Category:</h3> 
                                                    </div>                                                     

                                                    <div class="col-md-4"> 
                                                        <h3 style="font-family: 'Montserrat', sans-serif;;;">{{$event->category}}</h3> 
                                                    </div>
                                                </div>                                                 
                                                <div class="row"> 
                                                    <div class="col-md-4">
                                                        <h3 style="font-family: 'Montserrat', sans-serif;;;">Description:</h3> 
                                                    </div>                                                     
                                                    <div class="col-md-4">
                                                        <h3 style="font-family: 'Montserrat', sans-serif;;;">{{$event->description}}</h3> 
                                                        <p> <br></p> 
                                                    </div>
                                                </div>                                                 
                                                <div class="row"> 
                                                    <div class="col-md-4">
                                                        <h3 style="font-family: 'Montserrat', sans-serif;;;">Spots left:</h3> 
                                                    </div>                                                     
                                                    <div class="col-md-4">
                                                        <h3 style="font-family: 'Montserrat', sans-serif;;;">{{ $event->num_people - count($event->attends)}}</h3> 
                                                        <p> <br></p> 
                                                    </div>
                                                </div>                                                 
                                                <div class="row"> 
                                                    <div class="col-md-4">
                                                        <h3 style="font-family: 'Montserrat', sans-serif;;;">Currently signed up:</h3> 
                                                    </div>                                                     
                                                    <div class="col-md-4">
                                                        <h3 style="font-family: 'Montserrat', sans-serif;;;">{{ count($event->attends) }}</h3> 
                                                        <p> <br></p> 
                                                    </div>
                                                </div>                                                 
												
						<?php if (Auth::check()) {
							$user = App\User::find(Auth::id());
							$attending = false;
							foreach($user->attends as $element) {
								if($element['event_id'] == $event->id) {
									$attending = true;
								}
							}
							}
							if(Auth::check() && $attending && Auth::id() != $event['user']['id']): ?>
							<a href="/attends/cancel/{{$event->id}}/{{Auth::id()}}">
								
								<button >CANCEL</button>
								
							</a>
					
								<div title="Add to Calendar" class="addeventatc">
								    ADD TO CALENDAR
								    <span class="start">
								<?php 
								echo date('m/d/Y', strtotime($event->date))
									. ' ' .
									date('g:i A', strtotime($event->time));
										?>
									</span>
								    <span class="end">
								<?php 
								echo date('m/d/Y', strtotime($event->date))
									. ' ' .
									date('g:i A', strtotime($event->time)+3600);
										?>
									</span>
								    <span class="timezone">America/Chicago</span>
								    <span class="title">{{$event->title}}</span>
								    <span class="description">{{$event->description}}</span>
								    <span class="location">{{ $event->location }}</span>
								    <span class="organizer">
									{{App\User::find($event->created_by)->name}}
									</span>
								    <span class="organizer_email">
									{{App\User::find($event->created_by)->email}}
									</span>
								    <span class="facebook_event">https://www.facebook.com/events/703782616363133</span>
								    <span class="all_day_event">false</span>
								    <span class="date_format">MM/DD/YYY</span>
								    <span class="client">arhvfcwBtzTYjbzlSmIF31075</span>
								</div>
							<?php elseif(Auth::check() && Auth::id() != $event['user']['id']
										&& $event->num_people - count($event->attends) > 0): ?>
						<form class="sign-up-event-cal" method="POST" action="{{ action('AttendsController@store') }}">
							{!! csrf_field() !!}
							<input type="hidden" value="{{Auth::id()}}" name="user_id">
							<input type="hidden" value="{{$event->id}}" name="event_id">
							
								<button class="form-button" id="submit">REGISTER</button> 
							
						</form>
						<?php endif;  ?>

						<?php if(Auth::check() && Auth::id() == $event['user']['id']): ?>
						<form method="GET"
							action="{{ action('EventsController@edit', array($event->id)) }}">
							{!! csrf_field() !!}
							<button class="form-button" id="submit">EDIT</button>
						</form>
						<?php endif; ?>
											
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
