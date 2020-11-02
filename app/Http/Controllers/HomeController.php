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
     * Fetch & send home page necessary data
     *
     * @return Factory|View
     */
    public function index()
    {
        $testimonials = Testimonial::all()->sortByDesc('updated_at')->take(4);

        $featured_products = Product::where('is_featured', true)->get()->sortByDesc('updated_at')->take(4);

        $featured_articles = Article::where('is_featured', true)->get()->sortByDesc('updated_at')->take(3);

        return view('home', compact('testimonials', 'featured_articles', 'featured_products'));
    }

    /**
     * Capture user timezone
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function timezoneAjax(Request $request)
    {
        session(['timezone' => $request->input('timezone')]);
        return response()->json();
    }
}