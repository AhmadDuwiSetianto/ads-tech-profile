<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Project;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CompanyProfileController extends Controller
{
    // Halaman Utama (Home)
    public function index(): View
    {
        $services = Service::latest()->take(4)->get();
        $projects = Project::latest()->take(4)->get();
        $faqs = Faq::latest()->take(5)->get();

        // Diubah dari 'index' menjadi 'home'
        return view('home', compact('services', 'projects', 'faqs'));
    }

    // Halaman Detail Services
    public function services(): View
    {
        $services = Service::latest()->get();
        return view('Services.index', compact('services'));
    }

    // Halaman Detail Portfolio
    public function portfolio(): View
    {
        $projects = Project::latest()->get();
        return view('Portfolio.index', compact('projects'));
    }

    // Halaman Detail About
    public function about(): View
    {
        return view('About.index');
    }

    // Halaman Detail Process
    public function process(): View
    {
        return view('Process.index');
    }

    // Halaman Detail FAQ
    public function faq(): View
    {
        $faqs = Faq::latest()->get();
        return view('FAQ.index', compact('faqs'));
    }
}