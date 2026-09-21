<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Project;
use App\Models\Faq;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $serviceCount = Service::count();
        $projectCount = Project::count();
        $faqCount = Faq::count();

        return view('admin.dashboard', compact('serviceCount', 'projectCount', 'faqCount'));
    }
}