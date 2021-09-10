<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        $articles = Article::orderBy('created_at','desc')->take(4)->get();
                           //con esto devolvemos la home y compact recupera los "$articles" dinamicamente segun le mandamos en la linea 12
        return view('home',compact ('articles'));
    }

}