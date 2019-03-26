<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\HomeRequest as StoreRequest;
use App\Http\Requests\HomeRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;
use App\Models\Musician;
use App\Models\Band;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

use Session;

class ProfileCrudController extends CrudController
{
    public function getprofile($username)	
    {
        $profile = Musician::whereusername($username)->first();

        if($profile)
        {
            return view("othermusicianlist", ["profile"=>$profile]);
        }
        else
        {
            dd($profile);
        }
    }

    public function profileaddsave(Request $request)
    {
        $passwordreg = sha1($request->input('password'));
        $mregdata = [
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => $passwordreg,
        ];
        $bregdata = [
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => $passwordreg,
        ];
        if($request->input('username') != '')
        {
			Musician::create($mregdata);
            $newmusician = Musician::all()->where('email', $request->input('email'))->where('password', $passwordreg);
            $request->session()->put('musicianemail', $newmusician->first()->email);
            $request->session()->put('id', $newmusician->first()->id);
            $request->session()->put('username', $newmusician->first()->username);
            $musician = Musician::whereid(Session::get('id'))->first();
            return view('modifymusician', ['musician' => $musician]);
        }
        else
        {
			Band::create($bregdata);
			return Redirect::to("modifyband");
        }
    }
}