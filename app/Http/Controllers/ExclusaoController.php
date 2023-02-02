<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExclusaoController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function exclusao()
    {
        return view('vendor/adminlte/exclusao');
    }
}
