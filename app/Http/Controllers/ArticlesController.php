<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use App\Article;
use App\Image;
use Laracasts\Flash\Flash;
use App\http\Requests\ArticleRequest;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articles = Article::SearchArticle($request->title)->orderBy('id','DESC')->paginate(4);
        $articles->each(function($articles){
          $articles->category;
          $articles->user;
        });
        return view('admin.articles.index')->with('articles',$articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //pluck lista todas las categorias y tags de manera bonita para la vista create
        $categories= Category::orderBy('name','ASC')->pluck('name','id');
        $tags= Tag::orderBy('name','ASC')->pluck('name','id');

        return view('admin.articles.create')
          ->with('categories',$categories)
          ->with('tags',$tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {

       if($request->file('image')){
        //manipulacion de imagenes (archicos)
        $file=$request->file('image');
        $name='blogAndres_'.time().'.'.$file->getClientOriginalExtension();
        $path= public_path().'\images\articles';
        //movemos el archivo al path donde almacenaremos las imagenes
        $file->move($path,$name);
        }

        $article=new Article($request->all());
        $article->user_id=\Auth::user()->id;
        $article->save();
        //sync rellena la tabla pivote article_tag
        $article->tags()->sync($request->tags);
        if($request->file('image')){
        $image= new Image();
        $image->name=$name;
        $image->article()->associate($article);
        $image->save();
        }
        Flash::success('Se ha creado el articulo '.$article->title. ' de forma satisfactoria.');
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
        $article=Article::find($id);
        //pluck lista de manera especifica los que se pide solamente
        $categories=Category::orderBy('name','ASC')->pluck('name','id');
        $tags= Tag::orderBy('name','ASC')->pluck('name','id');

        return view('admin.articles.edit')
        ->with('categories',$categories)
        ->with('article',$article)
        ->with('tags',$tags);
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
        $article=Article::find($id);
        $article->fill($request->all());
        $article->save();
        $article->tags()->sync($request->tags);
        flash("El usuario ". $article->title ." se ha editado de forma exitosa.")->success()->important();
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
        $article=Article::find($id);
        $article->delete();
        flash("El usuario ". $article->title ." se ha eliminado de forma exitosa.")->success()->important();
        return redirect()->route('articles.index');
    }
}
