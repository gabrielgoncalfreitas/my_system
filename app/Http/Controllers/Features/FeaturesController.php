<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    public function index()
    {
        return view('features.index');
    }
}
