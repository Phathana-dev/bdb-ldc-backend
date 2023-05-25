<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    # Table name:
    protected $table = 'tb_employee';

    protected $fillable =['id', 'epy_id','sector_id', 'epy_name',
    'epy_bod', 'epy_sex', 'epy_address','epy_telephone',
    'epy_emer_phone','epy_emer_contact', 'status_id','epy_position',
    'epy_nyusha_date', 'epy_taishoku_date','epy_salary', 'epy_award',
    'epy_office_award','epy_gas_award','epy_tel_award','epy_specialist_award',
    'epy_gas_award2','epy_other_award','epy_sso_id','epy_bank_accountName',
    'epy_accountNumber','epy_flextime','epy_valid','epy_shift_time_code',
    'epy_shift_time','epy_shift2_start','epy_shift2_end',
    'create_by','created_date','update_by','modified_date'

    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];


    public function sector(){
        return $this->belongsTo(Sector::class);
    }
}
