<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

// After successful login
return redirect()->route('login')->with('login_success', 'Logged into your account successfully!');

// After successful registration
return redirect()->route('register.form')->with('register_success', 'Registered your data successfully!');
