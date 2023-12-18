<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Faq;
use App\Models\LabTest;
use App\Models\PackageType;
use App\Models\TestPackage;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function index(): View
    {
        return view('welcome')->with([
            'faqs' => Faq::all(),
            'testPackages' => TestPackage::where('is_public', true)
        ]);
    }

    public function labTests(): View
    {
        return view('lab-tests');
    }

    public function labServices(): View
    {
        return view('lab-services')->with([
            'packageTypes' => PackageType::all(),
            'tests' => LabTest::all()
        ]);
    }

    public function showLabService(string $locale, int $id): View
    {
        $packageType = PackageType::find($id);
        return view('lab-service-detail')
            ->with([
                'packageType' => $packageType
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

    public function careers(): View
    {
        return view('careers')->with('careers', Career::all());
    }
}
