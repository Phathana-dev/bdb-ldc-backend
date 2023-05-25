<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    protected $table = "tb_sector";

    # Disable CreateAt and UpdateAt
    public $timestamps = false;

    # Primary Key
    // protected $primaryKey = "id";

    # Allow Insert Update
    protected $fillable= [
        'id','sector_name','modified_date'
    ];

    # Not show while query
    protected $hidden = [
        'created_at',
        'updated_at',
    ];


    public function employees(){
        return $this->hasMany(Employee::class);
    }
}
