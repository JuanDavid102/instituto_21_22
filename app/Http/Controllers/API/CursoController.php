<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CursoResource;
use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class CursoController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Curso::class, 'curso');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CursoResource::collection(Curso::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curso = json_decode($request->getContent(), true);

        $curso = Curso::create($curso);

        return new CursoResource($curso);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        return new CursoResource($curso);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $curso)
    {
        $cursoData = json_decode($request->getContent(), true);

        $curso->update($cursoData);

        return new CursoResource($curso);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();
    }

    public function aulavirtual()
    {
        $response = "Error. usuario_av no detectado";
        $usuarioActual = Auth::user();

        if ($usuarioActual->usuario_av != null) {
            $response = Http::asForm()->post('https://aulavirtual.murciaeduca.es/webservice/rest/server.php', [
                'wstoken' => env('WSTOKEN', 'Default Key not provided'),
                'wsfunction' => 'core_enrol_get_users_courses',
                'moodlewsrestformat' => 'json',
                'userid' => Auth::user()->alumno_av
            ]);
        }

        return $response;
    }
}
