<?php

namespace App\Http\Controllers;

use App\Models\Pluss;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Plus;

class PlussController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plushes = Pluss::all();
        return response()->json($plushes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plush = New Pluss();
        $plush->fill($request->all());
        $plush->save();
        return response()->json($plush, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pluss  $pluss
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plush = Pluss::findOrFail($id);
        return response()->json($plush);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pluss  $pluss
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $plush = Pluss::findOrFail($id);
        $plush->fill($request->all());
        $plush->save();
        return response()->json($plush, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pluss  $pluss
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pluss::destroy($id);
        return response()->noContent();
    }
}
