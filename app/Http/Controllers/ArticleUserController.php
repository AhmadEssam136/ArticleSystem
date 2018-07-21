<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;
use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;
use App\User;
use Validator;


class ArticleUserController extends AppBaseController
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

    public function view (){

        $articles = Article::get();

        $user = Auth::user();



        return view('Articles')->with('articles',$articles)->with('user',$user);
    }

    public function edit($id)
    {
        $article = $this->ArticleRepository->findWithoutFail($id);
        $user = Auth::user();


        if (empty($article)) {
            Flash::error('Article not found');

            return view('Articles');
        }

        return view('editArticle')->with('article', $article)->with('user',$user);
    }

    public function update($id, UpdateArticleRequest $request)
    {
        $article = $this->ArticleRepository->findWithoutFail($id);

        if (empty($article)) {
            Flash::error('Article not found');

            return redirect(route('articles.index'));
        }

        if($request->hasFile('image')) {

            $fileName = time().'.'.$request->file('image')->extension();

            $fileSize = $request->image->getClientSize();

            $request->image->move(public_path()."/upload",$fileName);

            $request['image'] = $fileName;

        }

        $article = $this->articleRepository->update($request->all(), $id);

        Flash::success('Article updated successfully.');

        return redirect(route('articles.index'));
    }
}
