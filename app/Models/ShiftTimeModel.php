<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShiftTimeModel extends Model
{
    use HasFactory;

    protected $table='tb_shift_time';

    public $timestamps=false;

    protected $fillable =[
        'id',
        'shift_time_name',
        'shift_start',
        'shift_end',
        'time1in',
        'time1out',
        'time2in',
        'time2out',
        'shift_time_description',
        'modified_date'

    ];


    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function employees(){
        return $this->hasMany(Employee::class);
    }

}
