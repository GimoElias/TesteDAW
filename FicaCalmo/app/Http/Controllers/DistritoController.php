<?php

namespace Pizzaria\Http\Controllers;

use Illuminate\Http\Request;

use Pizzaria\Distrito;
use Pizzaria\Bairro;

use Pizzaria\Http\Requests;
use Pizzaria\Http\Controllers\Controller;

class DistritoController extends Controller
{
    
     public function find(Route $route){
        $this->distrito = Distrito::find($route->getParameter('distrito'));
    }
    
//    criar uma funcao para receber bairros
    
    public function getBairros (Request $request, $id){
        
        if ($request->ajax()){
            
            $bairros = Bairro::bairros($id);
            return response()->json($bairros);
        }
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $distritos = Distrito::all();
            return response()->json($distritos);       
        }

        return view('distrito.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('distrito.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(GenreRequest $request)
    {
        if($request->ajax()){
           Distrito::create($request->all());
            return response()->json(["mensaje" => "criado"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit()
    {
        return response()->json($this->distrito);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
        $this->distrito->fill($request->all());
        $this->distrito->save();
        return response()->json(["mensaje" => "Actualizado"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy()
    {
        $this->distrito->delete();
        return response()->json(["mensaje"=>"Removido"]);
    }
}
