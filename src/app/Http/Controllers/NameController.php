<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameController extends Controller
{
    public function requestAsJson (Request $request) {
        return $request;
    }
}
