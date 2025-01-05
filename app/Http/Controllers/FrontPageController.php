<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function welcome()
    {
        return inertia()->render('FrontPages/Welcome');
    }

    public function ourStory()
    {
        return inertia()->render('FrontPages/OurStory');
    }

    public function faqs()
    {
        return inertia()->render('FrontPages/Faqs');
    }

    public function contact()
    {
        return inertia()->render('FrontPages/Contact');
    }

    public function blogs()
    {
        return inertia()->render('FrontPages/Blogs');
    }

    public function menu()
    {
        return inertia()->render('FrontPages/Menu');
    }
}
