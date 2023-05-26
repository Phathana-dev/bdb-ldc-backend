<?php

namespace App\Http\Controllers\Api\Test;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Sector\EmployeeForSectorResource;
use App\Http\Resources\Sector\EmployeeForSectorCollection;


class EmployeeController extends Controller
{
    public function getEmployee(){
        $data = Employee::all();
        $data = new EmployeeForSectorCollection($data);
        return $data;
    }
}
