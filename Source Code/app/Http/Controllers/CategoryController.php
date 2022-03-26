<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Categories=Category::where('user_id','=',Auth::user()->id)->get();
      
        return view('category.index',compact('Categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');

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
            'name'=>'required',
            'color'=>'required'
        ]);
        $category=new Category();
        // $category->icon=$request->input('icon');
        $category->name=$request->input('name');
        $category->color=$request->input('color');
        $category->user_id=Auth::user()->id;
        $category->save();
        // $card=Card::create($request->all());
        return redirect()->route('category.index')->with('success','success added category');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
          
        $request->validate([
            // 'icon'=>'required',
            'name'=>'required',
            'color'=>'required'
        ]);
        // $category=new Category();
        // $category->icon=$request->input('icon');
        $category->name=$request->input('name');
        $category->color=$request->input('color');
        $category->user_id=Auth::user()->id;
        $category->save();
        // $category=Category::create($request->all());
        return redirect()->route('category.index')->with('success','success edited category');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with('success','success deleted category');

    }
}
