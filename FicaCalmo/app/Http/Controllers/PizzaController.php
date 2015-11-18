<?php

namespace Pizzaria\Http\Controllers;

use Illuminate\Http\Request;

use Pizzaria\Http\Requests;
use Pizzaria\Http\Controllers\Controller;

class PizzaController extends Controller
{
    
    
    public function find(Route $route){
		$this->pizza = Pizza::find($route->getParameter('pizza'));
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pizzas = Pizza::Pizzas();
		return view('pizza.index',compact('pizzas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categorias = Categorias::lists('categoria', 'id');
                $ingredientes = Ingrediente::lists('ingrediente', 'id');
		return view('pizza.create',compact('categorias','ingredientes'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		Pizza::create($request->all());
		Session::flash('message','Adicionado Correctamente');
		return Redirect::to('/pizza');
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
		$categorias = Categoria::lists('categoria', 'id');
                $ingredientes = Ingrediente::lists('ingrediente', 'id');
		return view('pizza.edit',['pizza'=>$this->pizza,'categorias'=>$categorias,
                    'ingrediente'=>$ingredientes]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$this->pizza->fill($request->all());
		$this->pizza->save();

		Session::flash('message',' Editada Correctamente');
		return Redirect::to('/pizza');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		$this->pizza->delete();
		\Storage::delete($this->pizza->image);
		Session::flash('message','Pelicula Eliminada Correctamente');
		return Redirect::to('/pelicula');
	}

}
