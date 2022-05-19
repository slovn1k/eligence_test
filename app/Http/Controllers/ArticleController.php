<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 *
 */
class ArticleController extends Controller
{
    /**
     * @return Collection
     */
    public function index(): Collection
    {
        return Article::all();
    }

    /**
     * @param Article $article
     * @return Article
     */
    public function show(Article $article): Article
    {
        return $article;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $article = Article::create($request->all());

        return response()->json($article, 201);
    }

    /**
     * @param Request $request
     * @param Article $article
     * @return JsonResponse
     */
    public function update(Request $request, Article $article): JsonResponse
    {
        $article->update($request->all());

        return response()->json($article, 200);
    }

    /**
     * @param Article $article
     * @return JsonResponse
     */
    public function delete(Article $article): JsonResponse
    {
        $article->delete();

        return response()->json(null, 204);
    }
}
