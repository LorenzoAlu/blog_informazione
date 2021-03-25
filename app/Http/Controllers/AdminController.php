<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard(){
        $users=User::orderBy('id','desc')->paginate(5);
        $articles=Article::orderBy('id','desc')->paginate(5);
        return view('admin.dashboard', compact('users', 'articles'));
    }

    public function articlesForUser(User $user){
        $articles = $user->articles->sortDesc();
        return view('admin.user-articles', compact('articles', 'user'));
    }

    public function destroyUser(User $user)
    {
        $user->delete();

        return redirect()->back()->with('message',"L'utente $user->name è stato eliminato");
    }

    public function toggleUser(User $user)
    {
        $user->disable = !$user->disable;
        $user->save();

        return redirect()->back();
    }
   
}