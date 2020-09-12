<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;

class ContactController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        return view('contact');
    }
}