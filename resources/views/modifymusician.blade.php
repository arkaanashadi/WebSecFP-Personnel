<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Profile</title>

    </head>
    <body>
        {{ Form::open(array('action' => 'Admin\MusicianCrudController@musicianupdate')) }}
        Hello {{ $musician->username }}
        <a href="."><button>Home</button></a>
        <a href="musician"><button>Profile</button></a>
        <a href="signout"><button>Sign Out</button></a>
        <br><br>
        Email: {{ Form::email('musicianemail', "$musician->email", array("placeholder" => "Email", "required" => "")) }}
        Username: {{ Form::text('username', "$musician->username", array("placeholder" => "Username", "required" => "")) }}
        <br><br>
        Biography<br>
        {{ Form::textarea('biography', "$musician->biography", array("placeholder" => "Biography")) }}
        <br><br>
        Roles and skills<br>
        {{ Form::text('skill1', "$musician->skill1", array("placeholder" => "Role/Instrument", "required" => "")) }}
        {{ Form::text('level1', "$musician->level1", array("placeholder" => "Experience", "required" => "")) }}<br>
        {{ Form::text('skill2', "$musician->skill2", array("placeholder" => "Role/Instrument")) }}
        {{ Form::text('level2', "$musician->level2", array("placeholder" => "Experience")) }}<br>
        {{ Form::text('skill3', "$musician->skill3", array("placeholder" => "Role/Instrument")) }}
        {{ Form::text('level3', "$musician->level3", array("placeholder" => "Experience")) }}<br>
        {{ Form::text('skill4', "$musician->skill4", array("placeholder" => "Role/Instrument")) }}
        {{ Form::text('level4', "$musician->level4", array("placeholder" => "Experience")) }}
        <br><br>
        Genres<br>
        {{ Form::text('genre1', "$musician->genre1", array("placeholder" => "Genre", "required" => "")) }}<br>
        {{ Form::text('genre2', "$musician->genre2", array("placeholder" => "Genre")) }}<br>
        {{ Form::text('genre3', "$musician->genre3", array("placeholder" => "Genre")) }}<br>
        {{ Form::text('genre4', "$musician->genre4", array("placeholder" => "Genre")) }}
        <br><br>
        Contact<br>
        Twitter: {{ Form::text('twitter', "$musician->twitter", array("placeholder" => "Twitter")) }}
        Phone: {{ Form::text('phone', "$musician->phone", array("placeholder" => "Phone Number")) }}
        <br><br>
        Links<br>
        Instagram: {{ Form::text('instagram', "$musician->instagram", array("placeholder" => "Instagram")) }}<br>
        YouTube: {{ Form::text('youtube', "$musician->youtube", array("placeholder" => "YouTube")) }}<br>
        Website: {{ Form::text('website', "$musician->website", array("placeholder" => "Website")) }}
        <br><br>
        New Password: {{ Form::password('newmusicianpassword', array("placeholder" => "Password")) }}<br>
        Verify this is you: {{ Form::password('musicianpassword', array("placeholder" => "Enter your password", "required" => "")) }}
        <br><br>
        <input type="submit" name="submit" value="Save Changes">
        </form>
        @if($_SERVER['REQUEST_URI'] != '/personnel/public/profileaddsave')
        <a href="musician"><button>Cancel</button></a>
        @endif
    </body>
</html>
