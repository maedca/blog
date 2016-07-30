<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str as Str; //Esta es una clase que trae Laravel, con ella podemos crear los slugs
use App\Article;
use App\Category;

class articlesController extends Controller
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
        $article = new Article();

        $category = Category::find($request->category_id);

        $article->title = $request->title;
        $article->slug = Str::slug($article->title); //justo aqui generamos el slug
        $article->content = $request->content;

        $article->category()->associate($category);

        /*
        * No le coloco los tags por que no recuerdo bien como se hace... en los videos esta el metodo.
        */

        $article->save()

        return redirect()->route('/'); //Aqui normalmente se puede devolver hacia una ruta como la del index
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //Este metodo show lo modificamos, ahora no buscaremos por id, sino por slug
    public function show($slug)
    {
        $article = Article::where('slug', '=', $slug)->firstOrFail(); //este metodo devuelve lo primero que consiga, si no consigie nada lanzara un error.

        return view('')->with('article', $article); //aqui debera retornar una vista con el articulo
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
