<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function aboutUs()
    {
        return view('pages.about-us');
    }

    public function solutions()
    {
        return view('pages.solutions');
    }

    public function ourStory()
    {
        return view('pages.our-story');
    }

    public function products()
    {
        return view('pages.products');
    }

    public function contactUs()
    {
        return view('pages.contact-us');
    }

    public function aiLibrarian()
    {
        return view('pages.librarian');
    }

    public function mentor()
    {
        return view('pages.mentor');
    }

    public function courseAdvisor()
    {
        return view('pages.course-advisor');
    }
}
