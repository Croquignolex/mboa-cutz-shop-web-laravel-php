<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\View\Factory;

class HomeController extends Controller
{
    /**
     * HomeController constructor
     */
    public function __construct()
    {
        $this->middleware('ajax')->only(['timezoneAjax']);
    }

    /**
     * @return Factory|View
     */
    public function index()
    {
        $testimonials = Testimonial::all();

        $products = Product::where('is_featured', true)->get()->take(4);

        $articles = Product::where('is_featured', true)->get()->take(4);

        return view('home', compact('testimonials', 'products'));
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function timezoneAjax(Request $request)
    {
        session(['timezone' => $request->input('timezone')]);
        return response()->json();
    }
}