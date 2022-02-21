<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NotaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            "usuario" => new UserResource($this->user),
            "materia" => new MateriaResource($this->materia),
            "evaluacion" => $this->evaluacion,
            "nota" => $this->nota
        ];
    }
}
