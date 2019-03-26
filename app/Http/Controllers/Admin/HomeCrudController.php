<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\HomeRequest as StoreRequest;
use App\Http\Requests\HomeRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;
use App\Models\Home;
use App\Models\Musician;
use App\Models\Band;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

use Session;

/**
 * Class HomeCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class HomeCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Home');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/home');
        $this->crud->setEntityNameStrings('home', 'homes');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->setFromDb();

        // add asterisk for fields that are required in HomeRequest
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

    
    public function publicIndex()	
    {
        $musicians = Musician::all();
        return view('welcome', ['musicians' => $musicians]);

        $bands = Band::all();
        return view('welcome', ['bands' => $bands]);	
    }

    public function signin()	
    {
        if (session()->has('id')) return Redirect::to(".");
        return view('signin');	
    }

    public function signup()	
    {
        if (session()->has('id')) return Redirect::to(".");
        return view('signup');	
    }
    
    public function signout(Request $request) 
    {
        $request->session()->forget('musicianemail');
        $request->session()->forget('username');
        $request->session()->forget('id');
        return Redirect::to(".");
    }

}
