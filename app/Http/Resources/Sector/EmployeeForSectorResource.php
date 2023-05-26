<?php

namespace App\Http\Resources\Sector;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeForSectorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return
        [
            // 'sectorId' => $this->sector_id,
            // 'id'=>$this ->id,
            'employeeId'=>$this -> epy_id,
            'employeeName'=> $this->epy_name,
        ];
    }
}
