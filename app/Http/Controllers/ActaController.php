<?php

namespace App\Http\Controllers;

use App\Models\Acta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['actas'] = Acta::paginate(5);
        return view('acta.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('acta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosActa = $request->except('_token');

        if ($request->hasFile('Documento')) {
            $datosActa['Documento']=$request->file('Documento')->store('uploads','public');
        }

        Acta::insert($datosActa);

        return response()->json($datosActa);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acta  $acta
     * @return \Illuminate\Http\Response
     */
    public function show(Acta $acta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acta  $acta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $acta = Acta::findOrFail($id);

        return view('acta.edit', compact('acta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Acta  $acta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $datosActa = $request->except(['_token','_method']);
        Acta::where('id','=',$id)->update($datosActa);

        $acta = Acta::findOrFail($id);
        return view('acta.edit', compact('acta'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acta  $acta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    $acta = Acta::findOrFail($id);

    if(Storage::delete('public/'.$acta->Documento)){

        Acta::destroy($id);

    }     
       return redirect('acta');
    }
}
