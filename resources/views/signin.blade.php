<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Personnel • Sign In</title>
        @include('layout.partials.head')
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/forms.css') }}">
        <style>body{background-image: url(bgimg/sign.jpg);}</style>
    </head>
    <body>
		<div class="container-fluid d-flex w-100 h-100 flex-column">
            @include('layout.partials.nav')
            <main role="main" class="inner cover">
                <div class="position-ref">
                    <div class="sign">
                        <h2 style="text-align: center; color: #63432A">Sign In</h2>
                        <p style="color:white; text-align: center;">Already have an account?<br>Sign in here.<br>Select to sign in as a musician or band.</p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link active" id="musician-signin" data-toggle="tab" href="#musician" role="tab" aria-controls="musician" aria-selected="true">Musician</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="band-signin" data-toggle="tab" href="#band" role="tab" aria-controls="band" aria-selected="false">Band</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade show active" id="musician" role="tabpanel" aria-labelledby="musician-tab">

                                <!-- Musician login form -->
                                <!-- ACTION NEEDS TO BE FILLED IN -->
								{{ Form::open(array('action' => 'Admin\MusicianCrudController@login')) }}
                                    <input type="email" class="form-control" placeholder="Email" name="musicianemail" required autofocus>
                                    <input type="password" class="form-control" placeholder="Password" name="musicianpassword" required>
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="band" role="tabpanel" aria-labelledby="band-tab">

                                <!-- Band login form -->
                                <!-- ACTION NEEDS TO BE FILLED IN -->
								{{ Form::open(array('action' => 'Admin\BandCrudController@login')) }}
                                    <input type="email" class="form-control" placeholder="Email" name="bandemail" required autofocus>
                                    <input type="password" class="form-control" placeholder="Password" name="bandpassword" required>
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
            </main>
            @include('layout.partials.footer')
        </div>
    </body>
</html>

<!-- 
<h1>Sign In</h1>
		@if(session()->has('message'))
			{{ session()->get('message') }}
		@endif
    	{{ Form::open(array('action' => 'Admin\MusicianCrudController@login')) }}
			<input type="email" name="musicianemail" placeholder="Email">
			<input type="password" name="musicianpassword" placeholder="Password">
			<button type="submit">Sign In</button>
		</form>
		<a href="signup"><button>Sign Up</button></a>
		<a href="{{ url()->previous() }}"><button>Return</button></a> -->