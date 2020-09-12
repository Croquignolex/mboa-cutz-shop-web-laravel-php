<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
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
        return view('home');
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