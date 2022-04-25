<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PropertySearchController extends Controller
{
    public function index()
    {
        return view('user.pages.property-serach');
    }
}
