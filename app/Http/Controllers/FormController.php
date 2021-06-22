<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormExampleRequest;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function checkValidation(FormExampleRequest $request)
    {
        $success = "Verify Data Successfully";
        return view('welcome', compact('success'));
    }
}
