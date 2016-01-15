<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class LoginController extends Controller{

    public function anyIndex()
    {
        return View::make('auth.login');
    }

}
