<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Personnel • Search</title>
        @include('layout.partials.head')
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/home-search.css') }}">
    </head>
    <body>
        <div class="container-fluid d-flex w-100 h-100 flex-column">
            @include('layout.partials.nav')
            <main role="main" class="inner cover">

                <!-- Search for musician-->
                
                <div class="container-fluid search-home row" style="background-image: url('img/bgimg/home-left.jpeg');">
                    <div class="container yx-auto" style="background-color: rgba(0,0,0,0.6); padding: 30px; ">

                        <!-- Form needs to be filled out -->
                        {{ Form::open(array('action' => 'Admin\HomeCrudController@musicianindex')) }}<br>
                            <h1 style="text-align: center;">Look for Musician</h1>

                            <!-- Dropdowns -->
                            <div class="row">

                                <!-- Dropdown for Genre -->
                                <div class="col-md-4 col-12">
                                    <select class="custom-select custom-select-lg" size="4">
                                        <option selected>Genre</option>
                                        <!-- Options -->
                                        <option value="rock">Rock</option>
                                        <option value="metal">Metal</option>
                                        <option value="jazz">Jazz</option>
                                    </select>
                                </div>

                                <!-- Dropdown for Instrument-->
                                <div class="col-md-4 col-12">
                                    <select class="custom-select custom-select-lg" size="4">
                                        <option selected>Instrument/Role</option>
                                        <!-- Options -->
                                        <option value="vocalist">Vocalist</option>
                                        <option value="guitarist">Guitarist</option>
                                        <option value="drummer">Drummer</option>
                                    </select>
                                </div>

                                <!-- Dropdown for Proiciency -->
                                <div class="col-md-4 col-12">
                                    <select class="custom-select custom-select-lg" size="4">
                                        <option selected>Proficency/Skill</option>
                                        <!-- Options -->
                                        <option value="beginner">Beginner</option>
                                        <option value="intermediate">Intermediate</option>
                                        <option value="advanced">Advanced</option>
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block mx-auto" type="submit" style="margin-top: 30px; ">Search</button>
                        </form>
                    
                    </div>
                </div>
            </main>

                @include('layout.partials.featured')
            @include('layout.partials.footer')
        </div>
    </body>
</html>