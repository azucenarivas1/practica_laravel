<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;
use App\Models\PDF;



use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function getPDF()
    {
       $name="Gobierno de El Salvador";

       $pdf = PDF::loadView('PDF_visualiza', $name);
        return $pdf->stream('prueba.pdf');
       // return view('proyecto.PDF_visualiza');


    }
    public function index()
    {
        //
        $datos['proyectos']=Proyecto::paginate(5);
        return view('proyecto.index',$datos);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('proyecto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       // $datos_proyecto=request()->all();
        $datos_proyecto=request()->except('_token');
        Proyecto::insert($datos_proyecto);
      // return response()->json($datos_proyecto);
      return redirect('proyecto')->with('mensaje','Registro agregado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyecto $proyecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $proyecto=Proyecto::findOrFail($id);
        return view('proyecto.edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //

         $datos_proyecto=request()->except(['_token','_method']);

        Proyecto::where('id','=',$id)->update($datos_proyecto);

        $proyecto=Proyecto::findOrFail($id);
        return redirect('proyecto');
       // return view('proyecto.edit', compact('proyecto'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Proyecto::destroy($id);
        return redirect('proyecto');
    }
}
