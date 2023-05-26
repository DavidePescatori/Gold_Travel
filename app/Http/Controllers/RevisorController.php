<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index()
    {
        $article_to_check = Article::where('is_accepted', null)->first();
        return view('revisor.index', compact('article_to_check'));
    }

    public function acceptArticle(Article $article)
    {
        $article->setAccepted(true);
        return redirect()->back()->with('message', 'Complimenti, hai accettato l\'annuncio');
    }


    public function rejectArticle(Article $article)
    {
        $article->setAccepted(false);
        return redirect()->back()->with('message', 'Annuncio rifiutato correttamente');
    }

    public function becomeRevisor()
    {
        // Mail::to('admin@presto.it')->send(new ContactMail(Auth::user()));

        // return redirect()->back()->with('message', 'Complimenti! hai richiesto di diventare revisore correttamente');

        return view('mail.become_revisor');

    }

    public function makeRevisor(User $user)
    {
        Artisan::call('presto:makeUserRevisor', ["email"=>$user->email]);

        return redirect('/')->with('message','Complimenti L\'utente è diventato revisore');
    }


   public function rollbackArticle()
   {
       $article = Article::where('is_accepted', '!=', null)->get()->reverse()->first();
       $article->setAccepted(null);
       return redirect()->back()->with('message', 'Ripristino avvenuto correttamente');
   }
}
