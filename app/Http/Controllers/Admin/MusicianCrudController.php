<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\MusicianRequest as StoreRequest;
use App\Http\Requests\MusicianRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;
use App\Models\Musician;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;

use Session;

/**
 * Class MusicianCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class MusicianCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Musician');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/musician');
        $this->crud->setEntityNameStrings('musician', 'musicians');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->setFromDb();

        // add asterisk for fields that are required in MusicianRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function profile()	
    {
        if (Session::get('musicianemail') == "") return Redirect::to(".");
        $musician = Musician::whereid(Session::get('id'))->first();
        return view('musicianlist', ['musician' => $musician]);	
    }

    public function login(Request $request)
    {
        $password = sha1($request->input("musicianpassword"));
        $musician = Musician::all()->where('email', $request->input("musicianemail"))->where('password', $password);
        $count = $musician->count();
        
        if ($count == 0)
        {
            return Redirect::to(URL::previous())->with('message', 'Invalid Musician Email and or Password');
        } 
        else
        {
            $request->session()->put('musicianemail', $request->input("musicianemail"));
            $request->session()->put('id', $musician->first()->id);
            $request->session()->put('username', $musician->first()->username);
            return Redirect::to(".");
        }
    }

    public function modifymusician(Request $request)
    {
        $musician = Musician::whereid(Session::get('id'))->first();
        return view('modifymusician', ['musician' => $musician]);
    }

    public function musicianupdate(Request $request)
    {
        $newpassword = sha1($request->newmusicianpassword);
        $password = sha1($request->musicianpassword);
        $theauth = Musician::where('id', (Session::get('id')));
        if (($theauth->first()->password) != $password)
        {
            echo "<script type='text/javascript'>alert('Wrong password');
            window.location='modifymusician';
            </script>";
        }
        else
        {
            $data = [
                'username' => $request->username,
                'email' => $request->musicianemail,
                'twitter' => $request->twitter,
                'phone' => $request->phone,
                'instagram' => $request->instagram,
                'youtube' => $request->youtube,
                'website' => $request->website,
                'biography' => $request->biography,
                'skill1' => $request->skill1,
                'skill2' => $request->skill2,
                'skill3' => $request->skill3,
                'skill4' => $request->skill4,
                'level1' => $request->level1,
                'level2' => $request->level2,
                'level3' => $request->level3,
                'level4' => $request->level4,
                'genre1' => $request->genre1,
                'genre2' => $request->genre2,
                'genre3' => $request->genre3,
                'genre4' => $request->genre4,
                'password' => $password,
                'img' => 'img/profile/band/blank.png',
            ];

            $update = Musician::where('id', (Session::get('id')))->update($data);
            if($request->newmusicianpassword != "")
            {
                $updatepassword = Musician::where('id',(Session::get('id')))->update(['password'=>$newpassword]);
            }
            $request->session()->put('musicianemail', $request->musicianemail);
            $request->session()->put('username', $request->username);
            return Redirect::to("musician");
        }
    }
}
