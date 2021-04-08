<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\Log;


class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Log::info('Showing all products');
        return Produto::all();
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
        Log::info('Creating a product');

        $request->validate([
            'codigo'=>'required',
            'nome'=>'required',
            'composicao'=>'required',
            'tamanho'=>'required',
            'quantidade'=>'required'
        ]);

        $produto = new Produto([
            'codigo' => $request->get('codigo'),
            'nome' => $request->get('nome'),
            'composicao' => $request->get('composicao'),
            'tamanho' => $request->get('tamanho'),
            'quantidade' => $request->get('quantidade')
        ]);

        $produto->save();

        return $produto;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Log::info('Showing the product: '.$id);
        return Produto::findOrFail($id);
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
        Log::info('Updating the product: '.$id);

        $request->validate([
            'codigo'=>'required',
            'nome'=>'required',
            'composicao'=>'required',
            'tamanho'=>'required',
            'quantidade'=>'required'
        ]);

        $produto = Produto::findOrFail($id);
        $produto->update($request->all());

        return $produto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();
    }
}
