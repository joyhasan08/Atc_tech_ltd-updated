<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContractUsController extends Controller
{
    //
    public function submitMessage(Request $request)
    {
        // Dump and die to print form data to the terminal
        toastr()->success("Form submitted successfully!");
       return redirect('/#contact');
    }
}
