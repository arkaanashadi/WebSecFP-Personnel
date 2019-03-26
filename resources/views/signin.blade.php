<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Personnel • Sign In</title>
        @include('layout.partials.head')
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/forms.css') }}">
        <style>body{background-image: url(bgimg/sign.jpg);}</style>
    </head>
    <body>
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
		<a href="{{ url()->previous() }}"><button>Return</button></a>
    </body>
</html>