<?php

namespace App\Http\Controllers\Blog;

use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;

class BlogController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        return view('blog.index');
    }
}