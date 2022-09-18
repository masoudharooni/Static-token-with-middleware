<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokensConfirmationController extends Controller
{
    public function confirm()
    {
        return view('tokens.confirmed');
    }
}
