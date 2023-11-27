<?php

namespace App\Http\Controllers;

use App\Models\PackageType;
use App\Models\TestPackage;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function index(): View
    {
        return view('welcome');
    }

    public function labTests(): View
    {
        return view('lab-tests');
    }

    public function labServices(): View
    {
        return view('lab-services')->with([
            'packageTypes' => PackageType::all()
        ]);
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
