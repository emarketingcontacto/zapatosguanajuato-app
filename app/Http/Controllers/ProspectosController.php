<?php

namespace App\Http\Controllers;
use App\Models\Prospectos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProspectosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $prospects = DB::table('prospectos')
        //  ->get();
         $prospects = DB::table('prospectos')
         ->paginate(10);
        return view('Prospectos.index', ['prospects' => $prospects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Prospectos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $validData = $request->validate(
            [
                'prospectoEmail'=>'required',
                'prospectoNegocio'=>'required',
                'prospectoDireccion'=>'required',
                'prospectoColonia'=>'required',
                'prospectoCiudad'=>'required',
                'prospectoContacto'=>'required',
                'prospectoTelefono'=>'required',
                'prospectoTipoNegocio'=>'required',
                'prospectoTipoCalzado'=>'required',
                'prospectoCondiciones'=>'required',
                'prospectoImagen' => 'required'
            ]
        );

        if($request->hasFile('prospectoImagen')){
            $validData['prospectoImagen'] = $request->file('prospectoImagen')->store('prospectos', 'public');
        }
            Prospectos::create($validData);
            return redirect('gracias-prospecto')->with('Success', 'Nuevo Negocio Registrado Exitósamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prospectos $prospecto)
    {
        //dd($prospecto->prospectoId);
        $prospect = DB::table('prospectos')
        ->where('prospectoId', '=', $prospecto->prospectoId)
        ->first();
        return view('Prospectos.show', ['prospect'=>$prospect]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prospectos $prospecto)
    {
        $prospect = DB::table('prospectos')
        ->where('prospectoId', '=', $prospecto->prospectoId)
        ->first();
        return view('Prospectos.edit', ['prospect'=>$prospect]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prospectos $prospecto)
    {
        //dd($request);
        //dd($prospecto);

        $validData = $request->validate(
            [
                'prospectoEmail'=>'required',
                'prospectoNegocio'=>'required',
                'prospectoDireccion'=>'required',
                'prospectoColonia'=>'required',
                'prospectoCiudad'=>'required',
                'prospectoContacto'=>'required',
                'prospectoTelefono'=>'required',
                'prospectoTipoNegocio'=>'required',
                'prospectoTipoCalzado'=>'required',
                'prospectoCondiciones'=>'required',
            ]
        );

        if($request->hasFile('prospectosImagen')){
            Storage::disk('public')->delete('/public/storage/prospectos', $prospecto->prospectoImagen);
            $validData['prospectoImagen']= $request->file('prospectoImagen')->store('prospectos', 'public');
        }

        $prospecto->update($validData);
        return redirect('Prospectos')->with('success', 'Prospecto Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prospectos $prospecto)
    {
        $prospecto->delete();
        return redirect('Prospecto')->with('success', 'Deleted Succesfully!');
    }
}
