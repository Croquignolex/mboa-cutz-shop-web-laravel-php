<?php

namespace App\Http\Controllers;

use App\Models\Article;
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
        $latest_articles = Article::all()->take(2);

        $testimonials = Testimonial::all()->take(4);

        $featured_products = Product::where('is_featured', true)->get()->take(4);

        $featured_articles = Article::where('is_featured', true)->get()->take(3);

        return view('home', compact('testimonials', 'featured_articles', 'latest_articles', 'featured_products'));
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