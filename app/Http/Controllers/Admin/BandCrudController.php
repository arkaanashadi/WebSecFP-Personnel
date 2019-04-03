<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\BandRequest as StoreRequest;
use App\Http\Requests\BandRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;
use App\Models\Band;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;

use Session;

/**
 * Class BandCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class BandCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Band');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/band');
        $this->crud->setEntityNameStrings('band', 'bands');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->setFromDb();

        // add asterisk for fields that are required in BandRequest
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
        if (Session::get('bandemail') == "") return Redirect::to(".");
        $band = Band::whereid(Session::get('id'))->first();
        return view('bandlist', ['band' => $band]);	
    }

    public function login(Request $request)
    {
        $password = sha1($request->input("bandpassword"));
        $band = Band::all()->where('email', $request->input("bandemail"))->where('password', $password);
        $count = $band->count();
        
        if ($count == 0)
        {
            return Redirect::to(URL::previous())->with('message', 'Invalid Band Email and or Password');
        } 
        else
        {
            $request->session()->put('bandemail', $request->input("bandemail"));
            $request->session()->put('id', $band->first()->id);
            $request->session()->put('bandname', $band->first()->bandname);
            return Redirect::to(".");
        }
    }

    public function modifyband(Request $request)
    {
        $band = Band::whereid(Session::get('id'))->first();
        return view('modifyband', ['band' => $band]);
    }

    public function bandupdate(Request $request)
    {
        $newpassword = sha1($request->newbandpassword);
        $password = sha1($request->bandpassword);
        $theauth = Band::where('id', (Session::get('id')));
        if (($theauth->first()->password) != $password)
        {
            echo "<script type='text/javascript'>alert('Wrong password');
            window.location='modifyband';
            </script>";
        }
        else
        {
            $data = [
                'bandname' => $request->bandname,
                'email' => $request->bandemail,
                'twitter' => $request->twitter,
                'facebook' => $request->facebook,
                'phone' => $request->phone,
                'instagram' => $request->instagram,
                'youtube' => $request->youtube,
                'website' => $request->website,
                'biography' => $request->biography,
                'member1' => $request->member1,
                'member2' => $request->member2,
                'member3' => $request->member3,
                'member4' => $request->member4,
                'role1' => $request->role1,
                'role2' => $request->role2,
                'role3' => $request->role3,
                'role4' => $request->role4,
                'genre' => $request->genre,
                'experience' => $request->experience,
                'password' => $password,
                'img' => 'img/profile/band/blank.png',
            ];

            $update = Band::where('id', (Session::get('id')))->update($data);
            if($request->newbandpassword != "")
            {
                $updatepassword = Band::where('id',(Session::get('id')))->update(['password'=>$newpassword]);
            }
            $request->session()->put('bandemail', $request->bandemail);
            $request->session()->put('bandname', $request->bandname);
            return Redirect::to("band");
        }
    }
}
