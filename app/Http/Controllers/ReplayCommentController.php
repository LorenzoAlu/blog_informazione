<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReplayComment;
use Illuminate\Support\Facades\Auth;

class ReplayCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->disable == 1 || Auth::user()== null){
            return redirect()->back()->with('message',"Utente disabilitato! Non puoi creare rispondere al commento!");
        }
       $replaycomment=ReplayComment::create([
           
           'body'=>$request->input('body'),
           'comment_id'=>$request->input('comment_id'),
           'user_id'=>Auth::id(),
       ]);

       return redirect()->back()->with('message',"La risposta al commento è stata aggiunta");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReplayComment  $replayComment
     * @return \Illuminate\Http\Response
     */
    public function show(ReplayComment $replayComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReplayComment  $replayComment
     * @return \Illuminate\Http\Response
     */
    public function edit(ReplayComment $replayComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReplayComment  $replayComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReplayComment $replayComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReplayComment  $replayComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReplayComment $replayComment)
    {
        //
    }
}
