<?php

namespace App\Http\Resources\Sector;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Sector\EmployeeForSectorResource;

class SectorWithEmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $countNumber = Employee::where('sector_id','=',$this->id)->count();
        return [
            'id'=> $this->id,
            'sectorName'=> $this->sector_name,
            'employeeNum'=>$countNumber,
            $this->mergeWhen($countNumber >0,[
                'employee'=>EmployeeForSectorResource::collection($this->employees)
            ])

            ];
    }
}
