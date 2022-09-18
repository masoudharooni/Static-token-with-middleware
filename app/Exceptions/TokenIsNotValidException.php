<?php

namespace App\Exceptions;

use Exception;

class TokenIsNotValidException extends Exception
{
    public function render($request)
    {
        return view('tokens.not-confirmed');
    }
}
