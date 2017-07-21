<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use Laracasts\Flash\Flash;
//use App\http\Requests\UserRequest;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articles = Article::SearchUser($request->name)->orderBy('id','ASC')->paginate(4);
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
    public function store(UserRequest $request)
    {
        $article = new Article($request->all());
        $article->password=bcrypt($request->password);
        $article->save();

        flash("Se ha registrado a ". $article->name ." de forma exitosa.")->success()->important();
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
        return view('admin.articles.edit')->with('article',$article);
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
        flash("El usuario ". $article->name ." se ha editado de forma exitosa.")->success()->important();
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
        flash("El usuario ". $article->name ." se ha eliminado de forma exitosa.")->success()->important();
        return redirect()->route('articles.index');
    }
}
