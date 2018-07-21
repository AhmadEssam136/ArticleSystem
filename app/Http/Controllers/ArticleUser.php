<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;
use App\User;
use Validator;


class ArticleUser extends Controller
{


    public function create()
    {
        $user = Auth::user();

        return view('articles.create')->with('user',$user);
    }


    public function store(CreateArticleRequest $request)
    {


        $input = $request->all();

        if($request->hasFile('image')) {

            $fileName = time().'.'.$request->file('image')->extension();

            $fileSize = $request->image->getClientSize();

            $request->image->move(public_path()."/upload",$fileName);

            $input['image'] = $fileName;

        }

        $input['user_id'] =  \Auth::user()->id;


        Article::create($input);


        Flash::success('Article saved successfully.');

        return redirect('Articlesuser');
    }

}
