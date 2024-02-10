<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CutiController extends Controller
{
    public function index()
    {
        return view('cuti.cuti');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cuti.create');
    }

    public function create_massal()
    {
        return view('cuti.create_massal');
    }
}
