<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\NotaResource;
use App\Models\Nota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NotaController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Nota::class, 'nota');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = Nota::paginate(20);
        return NotaResource::collection($notas);
    }

    public function media($materia_id)
    {
        $totalNotas = 0;
        $contadorNotas = 0;
        $usuarioAutenticado = Auth::user();
        $notas = $usuarioAutenticado->notas;
        foreach ($notas as $nota) {
            $materia = $nota->materia;
            if ($materia->id == $materia_id) {
                $totalNotas = $totalNotas + $nota->nota;
                $contadorNotas++;
            }
        }
        if ($contadorNotas != 0) {
            $resultado = "La nota media es: " . $totalNotas/$contadorNotas;
        }else{
            $resultado = "Nota media de usuario no encontrada";
        }

        return ($resultado);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nota = json_decode($request->getContent(), true);

        $nota = Nota::create($nota);

        return new NotaResource($nota);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function show(Nota $nota)
    {
        return new NotaResource($nota);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nota $nota)
    {
        $notaData = json_decode($request->getContent(), true);
        $nota->update($notaData);

        return new NotaResource($nota);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nota $nota)
    {
        $nota->delete();
    }
}
