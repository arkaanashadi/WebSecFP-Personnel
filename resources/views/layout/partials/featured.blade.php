<div class="container-fluid" style="padding: 70px; background-image: url(img/bgimg/home-musicians.jpg) ; padding-top: 70px; ">

    <!-- Featured Musicians -->
    <h1 style="color: white;">Featured Musicians</h1>

    <!-- Card deck containing featured musicians -->
    <div class="card-deck">

    <!-- Loop that will load 3 featured musicians -->
    @foreach ($musicians as $key => $musician)
        @if ($key == 3)
            @break
        @endif

        <!-- card displaying a featured musician -->
        <div class="card">
            <img class="card-img-top" src="{{ $musician->img }}">
            <div class="card-body ">
                @if ($musician->username == Session::get('username'))
                <h5 class="card-title"><a style="color: White;" href="musician">{{ $musician->username }}</a></h5>
                @else
                <h5 class="card-title"><a style="color: White;" href="{{ route('profile.show',$musician->username) }}">{{ $musician->username }}</a></h5>
                @endif
                <p class="card-text" style='color: rgb(200,200,200)'>{{ $musician->biography }}</p>
            </div>
        </div>
    @endforeach
    </div>
</div>

<!-- Featured Bands-->
<div class="container-fluid" style="padding: 70px; background-image: url(img/bgimg/home-bands.jpg) ; padding-top: 70px; ">
    <h1 style="color: white;">Featured Bands</h1>

    <!-- Card deck containing featured bands -->
    <div class="card-deck">

    <!-- Loop that will load 3 featured bands -->
    @foreach ($bands as $key => $band)
    @if ($key == 3)
        @break
    @endif
        <!-- card containing a featured band -->
        <div class="card">
            <img class="card-img-top" src="{{ $band->img }}">
            <div class="card-body">
                @if ($band->bandname == Session::get('bandname'))
                <h5 class="card-title"><a style="color: White;" href="band">{{ $band->bandname }}</a></h5>
                @else
                <h5 class="card-title"><a style="color: White;" href="{{ route('band.show',$band->bandname) }}">{{ $band->bandname }}</a></h5>
                @endif
                <p class="card-text" style='color: rgb(200,200,200)'>{{ $band->biography }}</p>
            </div>
        </div>
    @endforeach
    </div>
</div>

<!-- ======================================================================================================================= -->
<!-- <div class="container-fluid" style="padding: 70px; background-image: url(img/bgimg/home-bands.jpg); padding-top: 70px;">
    <h1 style="color: white;">Featured Bands</h1> -->
    <!-- Deck of featured bands -->
    <!-- <div class="card-deck">

        <div class="card">
            <img class="card-img-top" src="img/profile/band/5.jpg">
            <div class="card-body">
                <h5 class="card-title">Haddocks</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum mauris ut diam vulputate, nec scelerisque magna maximus. Suspendisse sit amet ex vestibulum, semper nunc quis, consequat arcu. Pellentesque feugiat molestie enim a aliquam.</p>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top" src="img/profile/band/6.jpg">
            <div class="card-body">
                <h5 class="card-title">Retroactive</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum mauris ut diam vulputate, nec scelerisque magna maximus. Suspendisse sit amet ex vestibulum, semper nunc quis, consequat arcu. Pellentesque feugiat molestie enim a aliquam.</p>
            </div>
        </div>
    </div>
</div> -->