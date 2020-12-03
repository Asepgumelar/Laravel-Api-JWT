<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $data = Article::paginate(10);

        return response()->json($data);
    }

    public function store(Request $request)
    {
        $data = new Article();
        $data->name = $request->name;
        $data->save();

        return response()->json($data);
    }

    public function show($id)
    {
        $data = Article::find($id);

        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $data = Article::find($id);
        $data->name = $request->name;
        $data->update();

        return response()->json($data);
    }

    public function delete($id)
    {
        $data = Article::find($id);
        $data->delete();
        return response()->json($data);
    }
}
