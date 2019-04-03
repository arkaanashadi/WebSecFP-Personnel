<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Personnel • Search</title>
        @include('layout.partials.head')
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/search-result.css') }}">
        <style type="text/css">body {background-image: url('img/bgimg/sign.jpg');}</style>
    </head>
    <body>
        <div class="container-fluid d-flex w-100 h-100 flex-column">
            @include('layout.partials.nav')
            <main role="main">

                <!-- Search for musician-->
                <div class="container-fluid search-cards" style="padding-top: 30px;">
                    <div class="d-flex" style="margin-right: 40px;">
                        <div class="mr-auto p-2"><h1 style="color: white;">Search Result</h1></div>

                        <!-- Return to home (to show search) -->
                        <div class="p-2"><button onclick="location.href='searchmusician';" class="btn btn-lg btn-primary btn-block">New Search</button></div>
                    </div>
                    
                    <!-- found musicians/bands -->
                    <div class="row search-cards" style="margin-left: 0px; margin-right: 0px; padding: 10px;">
                    @foreach ($bands as $key => $band)
                        @if ($key == 6)
                            @break
                        @endif
                        <div class="col-lg-4 col-md-6">
                            <!-- Card containing musician info -->
                            <div class="card" style="width: 300px;">

                                <!-- Musician/band Profile pic -->
                                <img class="card-img-top" src="{{ $band->img }}">

                                <div class="card-body ">

                                        <!-- Name -->
                                        <h5 class="card-title">{{ $band->bandname }}</h5>
                                        <dl class="row">

                                            <!-- Genre -->
                                            <dt class="col-sm-7">Genre: </dt>
                                            <dd class="col-sm-5">{{ $band->genre }}</dd>

                                            <!-- Proficiency/experience -->
                                            <dt class="col-sm-7">Experience: </dt>
                                            <dd class="col-sm-5">{{ $band->experience }} Years</dd>
                                        </dl>
                                    </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </main>
            @include('layout.partials.footer')
        </div>
    </body>
</html>