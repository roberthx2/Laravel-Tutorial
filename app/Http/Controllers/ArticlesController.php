<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests;
use Laracasts\Flash\Flash;
//use App\Http\Controllers\Controller;
use App\Tag;
use App\Category;
use App\Article;
use App\Image;
use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articles = Article::search($request->title)->orderBy('id', 'DESC')->paginate(2);
        $articles->each(function($articles) {
            $articles->category;
            $articles->user;
        });

        return view('admin.articles.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $tags = Tag::orderBy('name', 'ASC')->get()->pluck('name', 'id');

        return view('admin.articles.create')
                ->with('categories', $categories)
                ->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        //Manipulacion de imagenes

        if ($request->file('image'))
        {
            $file = $request->file('image');
            $name = 'blogfacilito_'.time().'.'.$file->getClientOriginalExtension();
            $path = public_path()."/image/articles/";
            $file->move($path, $name);
        }

        $article = new Article($request->all());
        $article->user_id = \Auth::user()->id;
        $article->save();

        $article->tags()->sync($request->tags);

        $image = new Image();
        $image->name = $name;
        $image->article()->associate($article);
        $image->save();

        Flash::success('Se ha creado el articulo '.$article->title.' con exito');

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $article->category();
        $categories = Category::orderBy('name', 'DESC')->pluck('name', 'id');
        $tags = Tag::orderBy('name', 'DESC')->pluck('name', 'id');

        $my_tag = $article->tags()->pluck('tags.id')->ToArray();

        return view('admin.articles.edit')
                ->with('categories', $categories)
                ->with('article', $article)
                ->with('tags', $tags)
                ->with('my_tag', $my_tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->fill($request->all());
        $article->save();

        $article->tags()->sync($request->tags);

        Flash::warning("Se ha editado el articulo ".$article->title." de forma exitosa");

        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = article::find($id);
        $article->delete();

        Flash::error('Se ha borrado el articulo '.$article->title.' con exito');

        return redirect()->route('articles.index');
    }
}
