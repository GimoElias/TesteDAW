<?php

namespace Pizzaria\Http\Controllers;

use Illuminate\Http\Request;

use Pizzaria\Distrito;
use Pizzaria\Bairro;
use Session;
use Redirect;
use Pizzaria\Http\Requests;
use Pizzaria\Http\Controllers\Controller;

class BairroController extends Controller
{
   public function find(Route $route){
       
		$this->bairro = Bairro::find($route->getParameter(''));
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$bairros = Bairro::Bairros();
		return view('bairro.index',compact('bairros'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$distritos = Distrito::lists('distrito', 'id');
		return view('bairro.create',compact('distritos'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		Bairro::create($request->all());
		Session::flash('message','Bairro Adicionado');
		return Redirect::to('/bairro');
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
		$distritos = Distrito::lists('distrito', 'id');
		return view('bairro.edit',['bairro'=>$this->bairro,'distritos'=>$distritos]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$this->bairro->fill($request->all());
		$this->bairro->save();

		Session::flash('message','Bairro Editada Correctamente');
		return Redirect::to('/bairro');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		$this->bairro->delete();
		Session::flash('message','Bairro Eliminado Correctamente');
		return Redirect::to('/bairro');
	}

}
