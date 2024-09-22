<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthController extends Controller
{
    function login() {
        return Inertia::render('Auth/Login');
    }
}
