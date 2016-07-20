<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SearchController extends Controller
{
    /**
     * Shows the map
     */
    public function search(Request $request) {
        return view('search');
    }
}
