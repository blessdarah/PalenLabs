<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function index(): View
    {
        return view('welcome');
    }

    public function labServices(): View
    {
        return view('lab-services');
    }

    public function doctors(): View
    {
        return view('doctors');
    }

    public function partners(): View
    {
        return view('partners');
    }

    public function aboutUs(): View
    {
        return view('about-us');
    }
}
