<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Personnel • {{ $musician -> username }}</title>
        @include('layout.partials.head')
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/profile.css') }}">
    </head>
    <body>
        <div class="container-fluid d-flex w-100 h-100 flex-column">
            @include('layout.partials.nav')
            <main role="main" class="inner cover">
                <div class="container-fluid" style="background-color: rgb(20, 20, 20);">
                    <div class="row">

                        <!-- Band Name and Photo -->
                        <div class="col-md-4" style="padding: 30px;">
                            <h3>{{ $musician -> username }}</h3>
                            <div class="container">
                                <img class="img-fluid" src="{{ $musician->img }}" style="object-fit: cover; height: 400px;">
                            </div>
                        </div>

                        <!-- Info -->
                        <div class="col-md-8 info" style="padding: 30px;">

                            <!-- Roles/instruments and Genres -->
                            <div class="row">

                                <!-- Roles/instruments -->
                                <div class="col-md-6">
                                    <h2>Skills and Proficiency</h2>

                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th scope="row">{{ $musician->skill1 }}:</th>
												@if($musician->skill1 != '')<td>{{ $musician->level1 }}</td>
												@else<td></td>@endif
                                            </tr>
                                            <tr>
                                                <th scope="row">{{ $musician->skill2 }}:</th>
												@if($musician->skill2 != '')<td>{{ $musician->level2 }}</td>
												@else<td></td>@endif
                                            </tr>
                                            <tr>
                                                <th scope="row">{{ $musician->skill3 }}:</th>
												@if($musician->skill3 != '')<td>{{ $musician->level3 }}</td>
												@else<td></td>@endif
                                            </tr>
                                            <tr>
                                                <th scope="row">{{ $musician->skill4 }}</th>
												@if($musician->skill4 != '')<td>{{ $musician->level4 }}</td>
												@else<td></td>@endif
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Genre -->
                                <div class="col-md-6">

                                    <!-- Genre -->
                                    <h2>Genres</h2>
                                    <ul class="">
                                        <li>{{ $musician->genre1 }}</li>
                                        <li>{{ $musician->genre2 }}</li>
                                        <li>{{ $musician->genre3 }}</li>
                                        <li>{{ $musician->genre4 }}</li>
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
                                                <td>{{ $musician->email }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Phone:</th>
                                                <td>{{ $musician->phone }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Twitter:</th>
                                                <td>twitter.com/{{ $musician->twitter }}</td>
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
                                                <td>youtube.com/{{ $musician->youtube }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Instagram:</th>
                                                <td>instagram.com/{{ $musician->instagram }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Website:</th>
                                                <td>{{ $musician->website }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="container">
                                    <h2>Biography</h2>
                                    <p>{{ $musician->biography }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <a href="modifymusician"><button class="btn btn-lg btn-primary btn-block">Edit Profile</button></a>
            @include('layout.partials.footer')
        </div>
    </body>
</html>