<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */

class AdminController extends Controller
{
    public function welcome()
    {
        return view('index');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

}
