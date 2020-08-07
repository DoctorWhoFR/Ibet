<?php

namespace App\Http\Controllers\API;

use App\Articles;
use App\Http\Resources\ArticlesCollection;
use App\Http\Resources\ArticlesResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticlesAPIController extends Controller
{
    public function index()
    {
        return new ArticlesCollection(Articles::paginate());
    }

    public function show(Articles $articles)
    {
        return new ArticlesResource($articles->load([]));
    }

    public function store(Request $request)
    {

        Articles::create($request->all());

        return redirect()->back()->with('status', 'ok');
    }

    public function update(Request $request, Articles $articles)
    {
        $articles->update($request->all());

        return new ArticlesResource($articles);
    }

    public function destroy(Articles $articles)
    {
        $articles->delete();

        return response()->noContent();
    }
}
