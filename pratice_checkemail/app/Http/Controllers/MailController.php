<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Compound;

class MailController extends Controller
{

    public function showform()
    {
        return view("email");
     }

    function displayEmail(Request $request) {
        $oke = "email hợp lệ";
        return view("email",compact("oke"));
    }
}
