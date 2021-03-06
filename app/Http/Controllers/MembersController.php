<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Image;
use App\Category;
use Carbon\Carbon;
use App\Tag;


class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
      Carbon::setLocale('es');
    }

    public function index(){
        $articles=Article::orderBy('id','DESC')->paginate(6);
        $articles->each(function($articles){
          $articles->category;
          $articles->image;
        });
        return view('front.members.index')->with('articles',$articles);

    }

    public function searchCategory($name){
        $category= Category::searchCategory($name)->first();
        $articles=$category->articles()->paginate(6);
        $articles->each(function($articles){
          $articles->category;
          $articles->image;
        });
        return view('front.members.index')->with('articles',$articles);
    }

    public function searchTag($name){
        $tag= Tag::searchTag($name)->first();
        $articles=$tag->articles()->paginate(6);

        $articles->each(function($articles){
          $articles->category;
          $articles->image;
        });
        return view('front.members.index')->with('articles',$articles);
    }

    public function viewArticle($slug){
      $article= Article::where('slug', $slug)->firstOrFail();
      $article->category;
      $article->user;
      $article->image;

      return view('front.members.article')->with('article',$article);
    }

}
