<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    /**
     * Displays the index page.
     */
    public function index() {
        return view('index');
    }

    /**
     * Shows the about page.
     */
    public function about() {
        return view('about');
    }

    /**
     * Shows the "Our team" page.
     */
    public function team() {
        return view('team');
    }
    
    /**
     * Shows the mission page.
     */
    public function mission() {
        return view('mission');
    }
}
