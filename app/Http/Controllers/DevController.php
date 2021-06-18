<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevController extends Controller
{
    public function verifyRecaptcha(Request $request)
    {
        $this->validate($request, ['g-recaptcha-response' => 'required|recaptcha:home,0.5']);
        dd($request->all());
    }
}
