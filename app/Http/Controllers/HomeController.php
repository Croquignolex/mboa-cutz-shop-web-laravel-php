<?php

namespace App\Http\Controllers;

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

        return view('home', compact('testimonials'));
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