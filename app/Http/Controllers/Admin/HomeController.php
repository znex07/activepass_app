<?php

namespace App\Http\Controllers\Admin;

use App\Models\SideEffects;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $side_effects;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $side_effects = SideEffects::all();
        return view('admin.dashboard');
    }
    public function view()
    {
        return view('search');
    }
}
