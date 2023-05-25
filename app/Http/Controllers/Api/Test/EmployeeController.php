<?php

namespace App\Http\Controllers\Api\Test;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Test\EmployeeResource;

class EmployeeController extends Controller
{
    public function index(){
        return Employee::all();
    }

    public function show(Employee $Employee){
        return new EmployeeResource($Employee);
    }
}
