<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Profile</title>

    </head>
    <body>
        Hello {{ Session::get('username') }}
        <a href="musician"><button>Cancel</button></a>
        <a href="signout"><button>Sign Out</button></a>
        <br><br>
        {{ Form::open(array('action' => 'Admin\MusicianCrudController@musicianupdate')) }}
    
        {{ Form::email('musicianemail', "", array("placeholder" => "New email", "required" => "")) }}
        {{ Form::text('username', "", array("placeholder" => "New username", "required" => "")) }}
        <br><br>
        {{ Form::text('biography', "", array("placeholder" => "Biography", "required" => "")) }}
        <br><br>
        {{ Form::password('musicianpassword', array("placeholder" => "Enter your password", "required" => "")) }}
        <br><br>
        <input type="submit" name="submit" value="Save Changes">
        </form>
    </body>
</html>
