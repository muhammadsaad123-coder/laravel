<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        // Perform a search query on the services table
        $services = Service::where('name', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->get();

        return view('search_results', compact('services'));
    }
}
