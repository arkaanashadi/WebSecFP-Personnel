<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Personnel • Edit</title>
        @include('layout.partials.head')
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/profile.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/button.css') }}">
    </head>
    <body>
        <div class="container-fluid d-flex w-100 h-100 flex-column">
            @include('layout.partials.nav')
            <main role="main" class="inner cover">
                <div class="container-fluid" style="background-color: rgb(20, 20, 20);">
                    <div class="row">

                        <!-- Musician Name and Photo -->
                        <div class="col-md-4" style="padding: 30px;">

                            <!-- Name -->
                            <h3>{{ $musician -> username }}</h3>
                            <div class="container">
                                <img class="img-fluid" src="{{ $musician->img }}" style="object-fit: cover; height: 400px;">
                            </div>

                            <!-- File upload for photo -->
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input disabled type="file" class="custom-file-input" id="inputGroupFile02">
                                    <label class="custom-file-label" for="inputGroupFile02">Choose file (Currently unusable)</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">Upload</span>
                                </div>
                            </div>
                        </div>

                        <!-- Info -->
                        <div class="col-md-8 info" style="padding: 30px;">

                            <!-- TO BE FILLED -->
                            {{ Form::open(array('action' => 'Admin\MusicianCrudController@musicianupdate')) }}

                                <!-- Roles/instruments and Genres -->
                                <div class="row">

                                    <!-- Roles/instruments -->
                                    <div class="col-md-6">
                                        <h2>Roles and Instruments</h2>

                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">{{ Form::text('skill1', "$musician->skill1", array("placeholder" => "Role/Instrument", "required" => "")) }}</th>
                                                    <td>
                                                    {{ Form::select('level1',['Beginner','Intermediate','Advanced','Master'],$musician->level1, array("placeholder" => "$musician->level1", "required" => "")) }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">{{ Form::text('skill2', "$musician->skill2", array("placeholder" => "Role/Instrument")) }}</th>
                                                    <td>
                                                    {{ Form::select('level2',['Beginner','Intermediate','Advanced','Master'],$musician->level2, array("placeholder" => "$musician->level2")) }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">{{ Form::text('skill3', "$musician->skill3", array("placeholder" => "Role/Instrument")) }}</th>
                                                    <td>
                                                    {{ Form::select('level3',['Beginner','Intermediate','Advanced','Master'],$musician->level3, array("placeholder" => "$musician->level3")) }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">{{ Form::text('skill4', "$musician->skill4", array("placeholder" => "Role/Instrument")) }}</th>
                                                    <td>
                                                    {{ Form::select('level4',['Beginner','Intermediate','Advanced','Master'],$musician->level4, array("placeholder" => "$musician->level4")) }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- Genre -->
                                    <div class="col-md-6">

                                        <!-- Genre -->
                                        <h2>Genres</h2>
                                        <ul class="">
                                            <li style="list-style: none; padding-bottom: 18px;">{{ Form::text('genre1', "$musician->genre1", array("placeholder" => "Genre", "required" => "")) }}</li>
                                            <li style="list-style: none; padding-bottom: 18px;">{{ Form::text('genre2', "$musician->genre2", array("placeholder" => "Genre")) }}</li>
                                            <li style="list-style: none; padding-bottom: 18px;">{{ Form::text('genre3', "$musician->genre3", array("placeholder" => "Genre")) }}</li>
                                            <li style="list-style: none; padding-bottom: 18px;">{{ Form::text('genre4', "$musician->genre4", array("placeholder" => "Genre")) }}</li>
                                        </ul>
                                        
                                    </div>
                                </div>

                                <!-- Contact and Links -->
                                <div class="row">

                                    <!-- Contact -->
                                    <div class="col-md-6">
                                        <h2>Contact</h2>

                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Email:</th>
                                                    <td>{{ Form::email('musicianemail', "$musician->email", array("placeholder" => "Email", "required" => "")) }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Phone:</th>
                                                    <td>{{ Form::text('phone', "$musician->phone", array("placeholder" => "Phone Number")) }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Twitter:</th>
                                                    <td>{{ Form::text('twitter', "$musician->twitter", array("placeholder" => "Twitter")) }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-6">
                                        <h2>Links</h2>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">YouTube:</th>
                                                    <td>{{ Form::text('youtube', "$musician->youtube", array("placeholder" => "YouTube")) }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Instagram:</th>
                                                    <td>{{ Form::text('instagram', "$musician->instagram", array("placeholder" => "Instagram")) }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Website:</th>
                                                    <td>{{ Form::text('website', "$musician->website", array("placeholder" => "Website")) }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="container">
                                    <h2>Biography</h2>
                                    {{ Form::textarea('biography', "$musician->biography", array("placeholder" => "Biography", "rows"=>7 ,'cols' => 99)) }}
                                </div>
                            </div>
                            <div class="container">
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Save changes</button>
                            </div>
                            </form>
                            @if($_SERVER['REQUEST_URI'] != '/personnel/public/musicianaddsave')
                            @endif
                        </div>
                    </div>
                </div>
            </main>
            @include('layout.partials.footer')
        </div>
    </body>
</html>


<!-- Username: {{ Form::text('username', "$musician->username", array("placeholder" => "Username", "required" => "")) }}

New Password: {{ Form::password('newmusicianpassword', array("placeholder" => "Password")) }}<br>
Verify this is you: {{ Form::password('musicianpassword', array("placeholder" => "Enter your password", "required" => "")) }} -->
