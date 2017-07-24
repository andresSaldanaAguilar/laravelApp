<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Image;



class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=Article::orderBy('id','DESC')->paginate(6);
        $articles->each(function($articles){
          $articles->category;
          $articles->image;
        });
        return view('front.members.index')->with('articles',$articles);

    }

}
