<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Profile</title>

    </head>
    <body>
        <div>
            Hello {{ $musician->username }} 
            
            <a href="."><button>Home</button></a>
            <a href="musician"><button>Profile</button></a>
		    <a href="signout"><button>Sign Out</button></a>
            <br>
            <h1>{{ $musician->username }}</h1>
            <img alt="" class="img-circle" src="{{ $musician->img }}" width="15%" height="15%"/>
            <br><br>
            <p><h3>Biography</h3>{{ $musician->biography }}<br></p>

            <table border="1">
				<tr>
					<th>Role</th>
					<th>Experience</th>
				</tr>
				<tr>
                    @if($musician->skill1 == "")
					<td>&nbsp;</td><td>&nbsp;</td>
                    @else
                    <td>{{ $musician->skill1 }}</td>
                    <td>{{ $musician->level1 }}</td>
                    @endif
				</tr>
				<tr>
                    @if($musician->skill2 == "")
					<td>&nbsp;</td><td>&nbsp;</td>
                    @else
                    <td>{{ $musician->skill2 }}</td>
                    <td>{{ $musician->level2 }}</td>
                    @endif
				</tr>
				<tr>
                    @if($musician->skill3 == "")
					<td>&nbsp;</td><td>&nbsp;</td>
                    @else
                    <td>{{ $musician->skill3 }}</td>
                    <td>{{ $musician->level3 }}</td>
                    @endif
				</tr>
				<tr>
                    @if($musician->skill4 == "")
					<td>&nbsp;</td><td>&nbsp;</td>
                    @else
                    <td>{{ $musician->skill4 }}</td>
                    <td>{{ $musician->level4 }}</td>
                    @endif
				</tr>
			</table><br>

            <table border="1">
				<tr>
					<th>Genres</th>
				</tr>
				<tr>
                    @if($musician->genre1 != "")
					<td>{{ $musician->genre1 }}</td>
                    @else
					<td>&nbsp;</td>
                    @endif
				</tr>
				<tr>
                    @if($musician->genre2 != "")
					<td>{{ $musician->genre2 }}</td>
                    @else
					<td>&nbsp;</td>
                    @endif
				</tr>
				<tr>
                    @if($musician->genre3 != "")
					<td>{{ $musician->genre3 }}</td>
                    @else
					<td>&nbsp;</td>
                    @endif
				</tr>
				<tr>
                    @if($musician->genre4 != "")
					<td>{{ $musician->genre4 }}</td>
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
				<td>Email: {{ $musician->email }}</td>
				</tr>
				<tr>
				@if($musician->twitter == "")
				<td>Twitter:</td>
				@else
				<td>Twitter: {{ $musician->twitter }}</td>
				@endif
				</tr>
				<tr>
				@if($musician->phone == "")
				<td>Phone:</td>
				@else
				<td>Phone: {{ $musician->phone }}</td>
				@endif
				</tr>
			</table><br>

            <table border="1">
				<tr>
					<th>Links</th>
				</tr>
				<tr>
				@if($musician->youtube == "")
				<td>YouTube:</td>
				@else
				<td>YouTube: {{ $musician->youtube }}</td>
				</tr>
				@endif
				<tr>
				@if($musician->instagram == "")
				<td>Instagram:</td>
				@else
				<td>Instagram: {{ $musician->instagram }}</td>
				@endif
				</tr>
				<tr>
				@if($musician->instagram == "")
				<td>Website:</td>
				@else
				<td>Website: {{ $musician->website }}</td>
				@endif
				</tr>
			</table><br>
            <a href="modifymusician"><button>Edit Profile</button></a>
        </div>
    </body>
</html>