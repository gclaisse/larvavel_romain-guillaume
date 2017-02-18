<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Com;
use App\User;

class AdminController extends Controller
{
    public function adminhome()
    {
        return view('admin.index');
    }

    public function articlesAdmin()
    {
        $articles = Article::paginate(2);
        return view('admin.articles' , [
            'articles' => $articles
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {

        $article = Article::find($id);
        return view ('admin.show', [
            'article' => $article,

        ]);


    }
    public function userAdmin()
    {
        $users = User::paginate(10);
        return view('admin.userlist' , [
            'users' => $users
        ]);
    }

    public function destroyUser($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect()->back()->with('success', 'Utilisateur supprimé');
    }


}
