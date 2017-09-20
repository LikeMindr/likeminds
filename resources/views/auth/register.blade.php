@extends('layouts.master')
@section('title')
	<title>Register</title>
@stop
@section('content')
<form method="POST" action="/auth/register" class="form-horizontal">
                     <fieldset>
                        {!! csrf_field() !!}
                        <section class="form-group">
                           <div>
                              <label for="name" class="col-lg-3 control-label">Username</label>
                              <div class="col-lg-10">
                                 <input type="text" name="name" class="form-control" id="name"
                                    value="{{ old('name') }}" autofocus>
                              </div>
                           </div>
                        </section>
                        <section class="form-group">
                           <label for="email" class="col-lg-3 control-label">Email</label>
                           <div class="col-lg-10">
                              <input type="email" name="email" class="form-control" id="email"
                                 value="{{ old('email') }}">
                           </div>
                        </section>
                        <section class="form-group">
                           <label for="password" class="col-lg-3 control-label">Password</label>
                           <div class="col-lg-10">
                              <input type="password" name="password" class="form-control" id="password">
                           </div>
                        </section>
                        <section class="form-group">
                           <label for="confirm_password" class="col-lg-3 control-label">Confirm Password</label>
                           <div class="col-lg-10">
                              <input type="password" name="password_confirmation" class="form-control"
                                 id="password_confirmation">
                           </div>
                        </section>
                        <section class="form-group">
                           <div class="col-lg-10 col-lg-offset-3">
                              <button type="submit" class="btn btn-primary right">Register</button>
                           </div>
                        </section>
                     </fieldset>
                  </form>
                  <a href="/auth/login">Already registered? Login!</a>
@stop
