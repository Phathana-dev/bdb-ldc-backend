<?php

namespace App\Http\Resources\Test;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmpoyeeSectorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return  [
            // 'epmId' => $this -> epy_id,
            // 'sectorId' => $this -> sector_id,
            'sectorName'=> $this -> sector_name,
        ];
    }
}
