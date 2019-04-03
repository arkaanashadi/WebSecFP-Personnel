<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Personnel • {{ $profile -> username }}</title>
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
                            <h3>{{ $profile -> username }}</h3>
                            <div class="container">
                                <img class="img-fluid" src="../{{ $profile->img }}" style="object-fit: cover; height: 400px;">
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
                                                <th scope="row">{{ $profile->skill1 }}:</th>
												@if($profile->skill1 != '')<td>{{ $profile->level1 }}</td>
												@else<td></td>@endif
                                            </tr>
                                            <tr>
                                                <th scope="row">{{ $profile->skill2 }}:</th>
												@if($profile->skill2 != '')<td>{{ $profile->level2 }}</td>
												@else<td></td>@endif
                                            </tr>
                                            <tr>
                                                <th scope="row">{{ $profile->skill3 }}:</th>
												@if($profile->skill3 != '')<td>{{ $profile->level3 }}</td>
												@else<td></td>@endif
                                            </tr>
                                            <tr>
                                                <th scope="row">{{ $profile->skill4 }}</th>
												@if($profile->skill4 != '')<td>{{ $profile->level4 }}</td>
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
                                        <li>{{ $profile->genre1 }}</li>
                                        <li>{{ $profile->genre2 }}</li>
                                        <li>{{ $profile->genre3 }}</li>
                                        <li>{{ $profile->genre4 }}</li>
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
                                                <td>{{ $profile->email }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Phone:</th>
                                                <td>{{ $profile->phone }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Twitter:</th>
                                                <td>twitter.com/{{ $profile->twitter }}</td>
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
                                                <td>youtube.com/{{ $profile->youtube }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Instagram:</th>
                                                <td>instagram.com/{{ $profile->instagram }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Website:</th>
                                                <td>{{ $profile->website }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="container">
                                    <h2>Biography</h2>
                                    <p>{{ $profile->biography }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            @include('layout.partials.footer')
        </div>
    </body>
</html>