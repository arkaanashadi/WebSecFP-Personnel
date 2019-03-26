<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Personnel • Musician</title>
        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
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
                                    <h2>Roles and Instruments</h2>

                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Bass:</th>
                                                <td>Advanced</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Guitar:</th>
                                                <td>Advanced</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Drum:</th>
                                                <td>Intermediate</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Vocals:</th>
                                                <td>Beginner</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Genre -->
                                <div class="col-md-6">

                                    <!-- Genre -->
                                    <h2>Genres</h2>
                                    <ul class="">
                                        <li>Rock</li>
                                        <li>Alternative Rock</li>
                                        <li>Pop Rock</li>
                                        <li>Punk Rock</li>
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
                                                <td>wilfredcpina@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Phone:</th>
                                                <td>(1)214-476-1875</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Twitter:</th>
                                                <td>twitter.com/wilcpina</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address:</th>
                                                <td>494 Poco Mas Drive, Dallas, TX 75247</td>
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
                                                <td>youtube.com/wilfredcpina</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Instagram:</th>
                                                <td>instagram.com/wilcpina</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Website:</th>
                                                <td>www.wilfredpina.com</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="container">
                                    <h2>Biography</h2>
                                    <p>Music has the power to transport us to another time and place. I love to harness that power with a broad audience of fellow music lovers and passionate musicians alike. Ever since a young age, I have found great joy and satisfaction by being involved in the creative music process. Contact me to get to know more about Wilfred C. Pina.</p>
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

<!-- =================================================================================================== -->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $profile -> username }}</title>

    </head>
    <body>
        <div>
            @if(session()->has('id'))
                Hello {{ Session::get('username') }}
                <a href="{{ url('.') }}"><button>Home</button></a>                   
                @if(session()->has('musicianemail'))
                    <a href="{{ url('musician') }}"><button>Profile</button></a>
                    @if(session()->get('musicianemail') == $profile -> email)
                        <a href="{{ url('modifymusician') }}"><button>Edit Profile</button></a>
                    @endif
                @elseif(session()->has('bandemail'))
                    <a href="{{ url('band') }}"><button>Profile</button></a>
                @endif
                <a href="{{ url('signout') }}"><button>Sign Out</button></a>
            @else 
                <a href="{{ url('.') }}"><button>Home</button></a> 
                <a href="{{ url('signup') }}"><button>Sign Up</button></a>
                <a href="{{ url('signin') }}"><button>Sign In</button></a>
            @endif
            <h1>{{ $profile -> username }}</h1>
            <img alt="" class="img-circle" src="{{ URL::asset($profile->img) }}" width="15%" height="15%"/><br>

            <p><h3>Biography</h3>{{ $profile -> biography }}<br></p>

            <table border="1">
				<tr>
					<th>Role</th>
					<th>Experience</th>
				</tr>
				<tr>
                    @if($profile->skill1 == "")
					<td>&nbsp;</td><td>&nbsp;</td>
                    @else
                    <td>{{ $profile->skill1 }}</td>
                    <td>{{ $profile->level1 }}</td>
                    @endif
				</tr>
				<tr>
                    @if($profile->skill2 == "")
					<td>&nbsp;</td><td>&nbsp;</td>
                    @else
                    <td>{{ $profile->skill2 }}</td>
                    <td>{{ $profile->level2 }}</td>
                    @endif
				</tr>
				<tr>
                    @if($profile->skill3 == "")
					<td>&nbsp;</td><td>&nbsp;</td>
                    @else
                    <td>{{ $profile->skill3 }}</td>
                    <td>{{ $profile->level3 }}</td>
                    @endif
				</tr>
				<tr>
                    @if($profile->skill4 == "")
					<td>&nbsp;</td><td>&nbsp;</td>
                    @else
                    <td>{{ $profile->skill4 }}</td>
                    <td>{{ $profile->level4 }}</td>
                    @endif
				</tr>
			</table><br>

            <table border="1">
				<tr>
					<th>Genres</th>
				</tr>
				<tr>
                    @if($profile->genre1 != "")
					<td>{{ $profile->genre1 }}</td>
                    @else
					<td>&nbsp;</td>
                    @endif
				</tr>
				<tr>
                    @if($profile->genre2 != "")
					<td>{{ $profile->genre2 }}</td>
                    @else
					<td>&nbsp;</td>
                    @endif
				</tr>
				<tr>
                    @if($profile->genre3 != "")
					<td>{{ $profile->genre3 }}</td>
                    @else
					<td>&nbsp;</td>
                    @endif
				</tr>
				<tr>
                    @if($profile->genre4 != "")
					<td>{{ $profile->genre4 }}</td>
                    @else
					<td>&nbsp;</td>
                    @endif
				</tr>
			</table><br>

           <table border="1">
				<tr>
					<th>Contact</th>
				</tr>
				<tr>
				<td>Email: {{ $profile->email }}</td>
				</tr>
				<tr>
				@if($profile->twitter == "")
				<td>Twitter:</td>
				@else
				<td>Twitter: {{ $profile->twitter }}</td>
				@endif
				</tr>
				<tr>
				@if($profile->phone == "")
				<td>Phone:</td>
				@else
				<td>Phone: {{ $profile->phone }}</td>
				@endif
				</tr>
			</table><br>

            <table border="1">
				<tr>
					<th>Links</th>
				</tr>
				<tr>
				@if($profile->youtube == "")
				<td>YouTube:</td>
				@else
				<td>YouTube: {{ $profile->youtube }}</td>
				</tr>
				@endif
				<tr>
				@if($profile->instagram == "")
				<td>Instagram:</td>
				@else
				<td>Instagram: {{ $profile->instagram }}</td>
				@endif
				</tr>
				<tr>
				@if($profile->instagram == "")
				<td>Website:</td>
				@else
				<td>Website: {{ $profile->website }}</td>
				@endif
				</tr>
			</table><br>
        </div>
    </body>
</html>
</html>