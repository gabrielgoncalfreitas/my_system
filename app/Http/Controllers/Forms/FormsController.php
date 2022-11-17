<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use App\Models\Forms;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function index()
    {
        return view('reports.index');
    }
}
