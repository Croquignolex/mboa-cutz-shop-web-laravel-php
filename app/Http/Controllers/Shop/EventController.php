<?php

namespace App\Http\Controllers\Shop;

use App\Models\Event;
use App\Enums\Constants;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class EventController extends Controller
{
    /**
     * EventController constructor.
     */
    public function __construct()
    {
        $this->middleware('ajax')->only(['ajaxEvents']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|JsonResponse|View
     */
    public function index()
    {
        return view('shop.events');
    }

    /**
     * Get data
     *
     * @return JsonResponse
     */
    public function ajaxEvents()
    {
        $events = Event::orderBy('started_at', 'desc')->paginate(Constants::DEFAULT_PAGE_PAGINATION_ITEMS);
        $response = [];

        foreach ($events->items() as $event) {
            $response[] = [
                'id' => $event->id,
                'map' => $event->map,
                'name' => $event->name,
                'image' => $event->image_src,
                'end_date' => $event->end_date,
                'start_date' => $event->start_date,
                'description' => $event->description,
                'localisation' => $event->localisation,
            ];
        }

        return response()->json($response);
    }
}