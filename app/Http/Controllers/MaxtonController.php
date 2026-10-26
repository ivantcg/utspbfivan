<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaxtonController extends Controller
{
    public function index()
    {
        return view('maxton.index');
    }

    public function calendar()
    {
        return view('maxton.app-fullcalender');
    }

    public function login()
    {
        return view('maxton.auth-basic-login');
    }

    public function modals()
    {
        return view('maxton.component-modals');
    }

    public function formElements()
    {
        return view('maxton.form-elements');
    }

    public function datatable()
    {
        return view('maxton.table-datatable');
    }
}
