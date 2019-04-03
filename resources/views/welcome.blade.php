<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Personnel • Home</title>
        @include('layout.partials.head')
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/home-search.css') }}">
    </head>
    
    <body>
    <div class="container-fluid d-flex w-100 h-100 flex-column">
        @include('layout.partials.nav')
        <main role="main" class="inner cover">

        <!-- Search -->
        <div class="container-fluid search-home row " style="min-height: 100px;">

            <!-- Left column, search for musician -->
            <div class="col-md-6 col-12" style="padding: 0px;">
                <div class="card border-0">
                    <img src="img/bgimg/home-left.jpeg" class="card-img rounded-0">
                    <div class="card-img-overlay d-inline-flex align-items-center">
                        <button onclick="location.href='searchmusician';" type="button" class="btn btn-light mx-auto" style="font-size: 1.5rem">Look for Musicians</button>
                    </div>
                </div>
            </div>

            <!-- Right column, search for band -->
            <div class="col-md-6 col-12" style="padding: 0px;">
                <div class="card rounded-0 border-0">
                    <img src="img/bgimg/home-right.jpg" class="card-img rounded-0">
                    <div class="card-img-overlay d-inline-flex align-items-center">
                        <button onclick="location.href='searchband';" type="button" class="btn btn-light mx-auto" style="font-size: 1.5rem">Look for Bands</button>
                    </div>
                </div>
            </div>
        </div>
        @include('layout.partials.featured')
        @include('layout.partials.footer')
    </body>
</html>