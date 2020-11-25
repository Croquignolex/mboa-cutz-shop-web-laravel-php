<?php

namespace App\Http\Controllers\Shop;

use App\Models\Service;
use App\Enums\Constants;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;

class ServiceController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        $services = Service::orderBy('updated_at', 'desc')
            ->paginate(6)
            ->onEachSide(Constants::DEFAULT_PAGE_PAGINATION_EACH_SIDE);

        return view('shop.services.index',  compact('services'));
    }
}