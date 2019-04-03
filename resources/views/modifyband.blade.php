<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Personnel • Edit</title>
        @include('layout.partials.head')
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/profile.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/button.css') }}">
    </head>
    <body>
        <div class="container-fluid d-flex w-100 h-100 flex-column">
            @include('layout.partials.nav')
            <main role="main" class="inner cover">
                <div class="container-fluid" style="background-color: rgb(20, 20, 20);">
                    <div class="row">

                        <!-- Band Name and Photo -->
                        <div class="col-md-4" style="padding: 30px;">

                            <!-- Name -->
                            <h3>{{ $band -> bandname }}</h3>
                            <div class="container">
                                <img class="img-fluid" src="{{ $band -> img }}" style="object-fit: cover; height: 400px;">
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

                            {{ Form::open(array('action' => 'Admin\BandCrudController@bandupdate')) }}
                            <!-- Members, Genre, and Experience -->
                                <div class="row">

                                    <!-- Members -->
                                    <div class="col-md-6">
                                        <h2>Members</h2>

                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">{{ Form::text('role1', "$band->role1", array("placeholder" => "Role", "required" => "")) }}</th>
                                                    <td>{{ Form::text('member1', "$band->member1", array("placeholder" => "Member", "required" => "")) }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">{{ Form::text('role2', "$band->role2", array("placeholder" => "Role", "required" => "")) }}</th>
                                                    <td>{{ Form::text('member2', "$band->member2", array("placeholder" => "Member", "required" => "")) }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">{{ Form::text('role3', "$band->role3", array("placeholder" => "Role", "required" => "")) }}</th>
                                                    <td>{{ Form::text('member3', "$band->member3", array("placeholder" => "Member", "required" => "")) }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">{{ Form::text('role4', "$band->role4", array("placeholder" => "Role", "required" => "")) }}</th>
                                                    <td>{{ Form::text('member4', "$band->member4", array("placeholder" => "Member", "required" => "")) }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- Genre and Experience -->
                                    <div class="col-md-6">

                                        <!-- Genre -->
                                        <div class="container" style="background-color: rgb(30, 30, 30);">
                                                <h2>Genre</h2>
                                                <p>{{ Form::text('genre', "$band->genre", array("placeholder" => "Genre", "required" => "")) }}</p>
                                        </div>

                                        <!-- Experience -->
                                        <div class="container" style="background-color: rgb(30, 30, 30);">
                                            <h2>Experience</h2>
                                            <p>{{ Form::text('genre', "$band->experience", array("placeholder" => "Year", "required" => "")) }}Year(s) of experience</p>
                                        </div>
                                        
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
                                                    <td>{{ Form::email('bandemail', "$band->email", array("placeholder" => "Email", "required" => "")) }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Phone:</th>
                                                    <td>{{ Form::text('phone', "$band->phone", array("placeholder" => "Phone Number")) }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Twitter:</th>
                                                    <td>{{ Form::text('twitter', "$band->twitter", array("placeholder" => "Twitter")) }}</td>
                                                </tr>
                                                <tr>
                                                    
                                                <tr>
                                                    <th scope="row">Facebook:</th>
                                                    <td>{{ Form::text('facebook', "$band->facebook", array("placeholder" => "Facebook")) }}</td>
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
                                                    <td>{{ Form::text('youtube', "$band->youtube", array("placeholder" => "YouTube")) }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Instagram:</th>
                                                    <td>{{ Form::text('instagram', "$band->instagram", array("placeholder" => "Instagram")) }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Website:</th>
                                                    <td>{{ Form::text('website', "$band->website", array("placeholder" => "Website")) }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="container">
                                    <h2>Biography</h2>
                                    {{ Form::textarea('biography', "$band->biography", array("placeholder" => "Biography", "rows"=>7 ,'cols' => 99)) }}
                                </div>
                            </div>
                            <div class="container">
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Save changes</button>
                            </div>
                            </form>
                            @if($_SERVER['REQUEST_URI'] != '/personnel/public/bandaddsave')
                            @endif
                        </div>
                    </div>
                </div>
                
            </main>
            @include('layout.partials.footer')
        </div>
    </body>
</html>