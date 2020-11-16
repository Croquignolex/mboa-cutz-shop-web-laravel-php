<?php

namespace App\Http\Controllers\Shop;

use App\Models\Picture;
use App\Enums\Constants;
use Illuminate\View\View;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    public function index()
    {
        $pictures = Picture::orderBy('updated_at', 'desc')
            ->paginate(8)
            ->onEachSide(Constants::DEFAULT_PAGE_PAGINATION_EACH_SIDE);

        return view('shop.gallery', compact('pictures'));
    }
}