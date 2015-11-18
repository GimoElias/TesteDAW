<?php

namespace Pizzaria\Http\Controllers;

use Illuminate\Http\Request;
use Pizzaria\Http\Requests\ClienteCreateRequest;
use Pizzaria\Http\Requests\ClienteUpdateRequest;
use Pizzaria\Distrito;
use Pizzaria\Bairro;
use Pizzaria\Cliente;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use Pizzaria\Http\Requests;
use Pizzaria\Http\Controllers\Controller;

class ClienteController extends Controller
{
   public function find(Route $route){
		$this->cliente = Cliente::find($route->getParameter('cliente'));
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$clientes = Cliente::paginate(5);
		if($request->ajax()){
			return response()->json(view('cliente.clientes',compact('clientes'))->render());
		}
		return view('cliente.index',compact('clientes'));
	}

    //    criar uma funcao para receber bairros
    
    public function getBairros (Request $request, $id){
        
        if ($request->ajax()){
            
            $bairros = Bairro::bairros($id);
            return response()->json($bairros);
        }
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        
        $distritos = Distrito::lists('distrito', 'id');
        $bairros = Bairro::lists('bairro', 'id');
        return view('cliente.create',compact('distritos','bairros'));
    }

    /**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ClienteCreateRequest $request)
	{	
		Cliente::create($request->all());

		Session::flash('message','Adicionado Correctamente');
		return Redirect::to('/cliente');
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
		return view('cliente.edit',['cliente'=>$this->cliente]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(ClienteUpdateRequest $request)
	{
		$this->cliente->fill($request->all());
		$this->cliente->save();

		Session::flash('message',' Editado Correctamente');
		return Redirect::to('/cliente');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		$this->cliente->delete();
		Session::flash('message',' Eliminado Correctamente');
		return Redirect::to('/cliente');
	}

}
