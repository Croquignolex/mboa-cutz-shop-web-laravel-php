<?php

namespace App\Http\Controllers\Shop;

use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;

class ServicesController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        return view('shop.services.index');
    }
}