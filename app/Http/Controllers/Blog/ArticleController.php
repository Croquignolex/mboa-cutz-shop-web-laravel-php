<?php

namespace App\Http\Controllers\Blog;

use App\Models\Tag;
use App\Models\Article;
use App\Enums\Constants;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class ArticleController extends Controller
{
    /**
     * ArticleController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->only('comment');
        $this->middleware('ajax')->only('ajaxArticles');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|JsonResponse|View
     */
    public function index()
    {
         return view('blog.index');
    }

    /**
     * Get data
     *
     * @return JsonResponse
     */
    public function ajaxArticles()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(6);
        $response = [];

        foreach ($articles as $article) {
            $response[] = [
                'show_url' => locale_route('articles.show', compact('article')),
            ];
        }

        return response()->json($response);
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