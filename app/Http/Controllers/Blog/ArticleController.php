<?php

namespace App\Http\Controllers\Blog;

use App\Http\Requests\CommentRequest;
use App\Models\Article;
use App\Enums\Constants;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')
            ->paginate(6)
            ->onEachSide(Constants::DEFAULT_PAGE_PAGINATION_EACH_SIDE);

        return view('blog.index', compact('articles'));
    }

    /**
     * Display the specified resource.
     *
     * @param String $language
     * @param Article $article
     * @return Application|Factory|Response|View
     */
    public function show(String $language, Article $article)
    {
        $comments = $article
            ->comments()
            ->orderBy('created_at', 'desc')
            ->paginate(Constants::DEFAULT_PAGE_PAGINATION_ITEMS)
            ->onEachSide(Constants::DEFAULT_PAGE_PAGINATION_EACH_SIDE);

        $tags = Tag::has('articles')->get();

        $categories = Category::has('articles')->get();

        return view('blog.show', compact('article', 'comments', 'categories', 'tags'));
    }

    /**
     * Comment on a article
     *
     * @param CommentRequest $request
     * @param String $language
     * @param Article $article
     * @return Application|Factory|Response|View
     */
    public function comment(CommentRequest $request, String $language, Article $article)
    {
        $comment = $article->comments()->create($request->all());
        $comment->creator()->associate(Auth::user());
        $comment->save();

        success_toast_alert(__('toast.success_comment'));

        return redirect(locale_route('articles.show', compact('article')));
    }
}