<?php

namespace App\Services;

use App\Models\Article;

class ArticleService
{
    public function latestArticles() {
        return Article::all()->sortByDesc('updated_at')->take(2);
    }
}