<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EducationalResource;

class LearnerDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Download a resource
    public function download($uuid)
    {
        $resource = EducationalResource::where('uuid', $uuid)->firstOrFail();
        $pathToFile = storage_path('app/public/' . $resource->uuid.$resource->resource_file);
        return response()->download($pathToFile);
    }
}
