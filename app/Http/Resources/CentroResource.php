<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CentroResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "codigo" => $this->codigo,
            "nombre" => $this->nombre,
            "web" => $this->web,
            "coordinador" => new UserResource($this->user), // creamos un recurso nuevo pasandole el id del coordinador
            "verificado" => $this->verificado
        ];
    }
}
