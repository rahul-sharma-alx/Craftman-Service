<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display the details of a service.
     *
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function show(string $slug)
    {
        // Find the service by slug (assuming your Service model has a 'slug' column)
        $services = Service::where('slug', $slug)->firstOrFail();

        return view('service-list', compact('services'));
    }
    // Find the service by slug (assuming your Service model has a 'slug' column)
    // $service = Service::where('slug', $slug)->firstOrFail();

    // return view('service.details', compact('service'));
}
