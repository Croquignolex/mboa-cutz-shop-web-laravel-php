<?php

namespace App\Http\Controllers\Shop;

use App\Models\Product;
use App\Enums\Constants;
use Illuminate\View\View;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')
            ->paginate(Constants::DEFAULT_PAGE_PAGINATION_ITEMS)
            ->onEachSide(Constants::DEFAULT_PAGE_PAGINATION_EACH_SIDE);

        return view('shop.products.index', compact('products'));
    }

    /**
     * Display the specified resource.
     *
     * @param String $language
     * @param Product $product
     * @return Application|Factory|Response|View
     */
    public function show(String $language, Product $product)
    {
        $reviews = $product
            ->reviews()
            ->orderBy('created_at', 'desc')
            ->paginate(Constants::DEFAULT_PAGE_PAGINATION_ITEMS)
            ->onEachSide(Constants::DEFAULT_PAGE_PAGINATION_EACH_SIDE);

        return view('shop.products.show', compact('product', 'reviews'));
    }
}