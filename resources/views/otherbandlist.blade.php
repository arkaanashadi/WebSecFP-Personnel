<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ Session::get('username') }}</title>

    </head>
    <body>
        <div>
            Hello {{ Session::get('username') }} 
		    <a href="signout"><button>Sign Out</button></a>
            <br>
            <img alt="" class="img-circle" src="{{ URL::asset(session('img')) }}" width="15%" height="15%"/>
            <br>
            <p>{{ Session::get('biography') }}</p>
            <br>
        </div>

        <a href="modifymusician"><button>Edit Profile</button></a>
        <a href="."><button>Home</button></a>
    </body>
</html>
