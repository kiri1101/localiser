<?php

namespace App\Http\Controllers\Core;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Summary of index
     *
     * Load home page
     *
     * @return \Inertia\Response
     */
    public function index(): Response
    {
        return Inertia::render('Home/Index');
    }
}