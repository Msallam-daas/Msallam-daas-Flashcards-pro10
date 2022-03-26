<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Categories=Category::where('user_id','=',Auth::user()->id)->get();
        return view('card.create',compact('Categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'icon'=>'required',
            'front'=>'required',
            'back'=>'required',
            'color'=>'required'
            
          

        ]);
        $card=new Card();
        // $card->icon=$request->input('icon');
        $card->front=$request->input('front');
        $card->back=$request->input('back');
        $card->color=$request->input('color');
        $card->user_id=Auth::user()->id;
        $card->category_id=$request->input('category_id');
        $card->save();
        // $card=Card::create($request->all());
        return redirect()->route('category.index')->with('success','success added card');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $cards=Card::where([['user_id','=',Auth::user()->id],['category_id','=',$id]])->get();
        return view('card.index',compact('cards'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $card)
    {

        return view('card.edit',compact('card'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card $card)
    {
        $request->validate([
            // 'icon'=>'required',
            'front'=>'required',
            'back'=>'required',
            'color'=>'required'

        ]);
        // $card=new Card();
        // $card->icon=$request->input('icon');
        $card->front=$request->input('front');
        $card->back=$request->input('back');
        $card->color=$request->input('color');
        $card->user_id=Auth::user()->id;
        $card->category_id=$request->input('category_id');
        $card->save();
        return redirect()->route('category.index')->with('success','success edited card');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        $card->delete();
        return redirect()->route('category.index')->with('success','success deleted card');

    }
}
