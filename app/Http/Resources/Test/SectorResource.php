<?php

namespace App\Http\Resources\Test;

use App\Models\Employee;
use Illuminate\Http\Request;
// use App\Http\Resources\Test\EmpoyeeSectorResource;
// use App\Http\Resources\Test\SectorEmployeeResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Test\SectorEmployeeCollection;

class SectorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //  return parent::toArray($request);
        return [
            'id' => $this->id,
            'sectorName' => $this-> sector_name,

            // 'emplyees'=>  SectorEmployeeResource::collection($this->employees),
            // Employee List
            $this -> mergeWhen(Employee::where('sector_id','=',$this->id)->count() >0,[

                'employeesNumber'=>  Employee::where('sector_id','=',$this->id)->count(),
                'employees'=>  SectorEmployeeResource::collection($this->employees),
                // 'employees'=> SectorEmployeeResource::collection($this->whenLoaded('employees')),
            ])
        ];
    }
}
