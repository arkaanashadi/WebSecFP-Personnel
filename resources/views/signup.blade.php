<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Personnel • Sign Up</title>
        @include('layout.partials.head')
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/forms.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/button.css') }}">
        <style>
		body{background-image: url(img/bgimg/sign.jpg);
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;}
		</style>
    </head>
    <body>        
		<div class="container-fluid d-flex w-100 h-100 flex-column">
            @include('layout.partials.nav')
            <main role="main" class="inner cover">
			<div class="sign">
				<h2 style="text-align: center; color: #63432A">Create an account</h2>
				<p style="color:white; text-align: center;">New to Personnel?<br>Fill in your details and get started.<br>Select to sign up as a musician or a band.</p>
				<ul class="nav nav-tabs" id="myTab" role="tablist">

					<li class="nav-item">
						<a class="nav-link active" id="musician-signup" data-toggle="tab" href="#musician" role="tab" aria-controls="musician" aria-selected="true">Musician</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" id="band-signup" data-toggle="tab" href="#band" role="tab" aria-controls="band" aria-selected="false">Band</a>
					</li>
				</ul>

				<div class="tab-content" id="myTabContent">

					<div class="tab-pane fade show active" id="musician" role="tabpanel" aria-labelledby="musician-tab">

						<!-- Musician sign up form -->
						{{ Form::open(array('action' => 'Admin\ProfileCrudController@profileaddsave')) }}<br>
							<input type="text" class="form-control" placeholder="Username" name="username" required autofocus><br>
							<input type="email" class="form-control" placeholder="Email address" name="email" required><br>
							<input type="password" class="form-control" placeholder="Password" name="password" required><br>
							<button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
						</form>
					</div>

					<div class="tab-pane fade" id="band" role="tabpanel" aria-labelledby="band-tab">

						<!-- Band sign up form -->
						{{ Form::open(array('action' => 'Admin\ProfileCrudController@bandaddsave')) }}<br>
							<input type="text" class="form-control" placeholder="Band name" name="bandname" required autofocus><br>
							<input type="email" class="form-control" placeholder="Email address" name="email" required><br>
							<input type="password" class="form-control" placeholder="Password" name="password" required><br>
							<button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
						</form>
					</div>
				</div>
			</div>
            </main>
            @include('layout.partials.footer')
        </div>
    </body>
</html>