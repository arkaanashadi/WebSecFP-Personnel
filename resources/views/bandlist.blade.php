<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Personnel • {{ $band -> bandname }}</title>
        @include('layout.partials.head')
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/profile.css') }}">
    </head>
    <body>
        <div class="container-fluid d-flex w-100 h-100 flex-column">
            @include('layout.partials.nav')
            <main role="main" class="inner cover">
                <div class="container-fluid" style="background-color: rgb(20, 20, 20);">
                    <div class="row">

                        <!-- Band Name and Photo -->
                        <div class="col-md-4" style="padding: 30px;">
                            <h3>{{ $band -> bandname }}</h3>
                            <div class="container">
                                <img class="img-fluid" src="{{ $band->img }}" style="object-fit: cover; height: 400px;">
                            </div>
                        </div>

                        <!-- Info -->
                        <div class="col-md-8 info" style="padding: 30px;">

                            <!-- Members, Genre, and Experience -->
                            <div class="row">

                                <!-- Members -->
                                <div class="col-md-6">
                                    <h2>Members</h2>

                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th scope="row">{{ $band -> role1 }}:</th>
                                                <td>{{ $band -> member1 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">{{ $band -> role2 }}:</th>
                                                <td>{{ $band -> member2 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">{{ $band -> role3 }}:</th>
                                                <td>{{ $band -> member3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">{{ $band -> role4 }}:</th>
                                                <td>{{ $band -> member4 }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Genre and Experience -->
                                <div class="col-md-6">

                                    <!-- Genre -->
                                    <div class="container" style="background-color: rgb(30, 30, 30);">
                                            <h2>Genre</h2>
                                            <p>{{ $band -> genre }}</p>
                                    </div>

                                    <!-- Experience -->
                                    <div class="container" style="background-color: rgb(30, 30, 30);">
                                        <h2>Experience</h2>
                                        <p>{{ $band -> experience }} Year(s) Experience</p>
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
                                                <td>{{ $band -> email }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Phone:</th>
                                                <td>{{ $band -> bandname }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Twitter:</th>
                                                <td>twitter.com/{{ $band -> twitter }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Facebook:</th>
                                                <td>facebook.com/pg/{{ $band -> facebook }}</td>
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
                                                <td>youtube.com/{{ $band -> youtube }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Instagram:</th>
                                                <td>instagram.com/{{ $band -> instagram }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Website:</th>
                                                <td>{{ $band -> website }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="container">
                                    <h2>Biography</h2>
                                    <p>{{ $band -> biography }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <a href="modifyband"><button>Edit Profile</button></a>
            @include('layout.partials.footer')
        </div>
    </body>
</html>