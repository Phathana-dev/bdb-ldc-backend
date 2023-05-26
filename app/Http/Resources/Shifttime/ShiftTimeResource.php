<?php

namespace App\Http\Resources\Shifttime;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShiftTimeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
       return [
        'id'=> $this->id,
        'shifttimeName'=>$this->shift_time_name,
        'startTime'=>$this->shift_start,
        'endTime'=>$this->shift_end,
        'shift1In'=>$this->time1in,
        'shift1Out'=>$this->time1out,
        'shift2In'=>$this->time2in,
        'shift2Out'=>$this->time2out,
        'description'=>$this->shift_time_description
       ];
    }
}
