<?php

namespace App\Http\Controllers\Api\Test;

use App\Models\Sector;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Sector\SectorCollection;
use App\Http\Resources\Sector\SectorWithEmployeeCollection;

class SectorController extends Controller
{
    // Sector data only
    public function getSector(){
        $data = Sector::all();
        // $data= new SectorCollection($data);
        if($data->count()>0){
            $data=['status'=>200,'data'=> new SectorCollection($data)];
        }else {
            $data=['status'=>204,'data'=>'No data'];
        }
        return response()->json($data, 200);
    }

    public function getSectorById($id){
        $data = Sector::where('id','=',$id)->get();
        if($data->count()>0){
            $data=['status'=>200,'data'=> new SectorCollection($data)];
        }else {
            $data=['status'=>204,'data'=>'No data'];
        }
        return response()->json($data, 200);
    }


    // Sector data with Employee name

    public function getSectorWithEmp(){
        $data = Sector::with('employees')->get();
        // $data= new SectorCollection($data);
        if($data->count()>0){
            $data=['status'=>200,'data'=> new SectorWithEmployeeCollection($data)];
        }else {
            $data=['status'=>204,'data'=>'No data'];
        }
        return response()->json($data, 200);
    }

    public function getSectorByIdWithEmp($id){
        $data = Sector::where('id','=',$id)->get();
        if($data->count()>0){
            $data=['status'=>200,'data'=> new SectorWithEmployeeCollection($data)];
        }else {
            $data=['status'=>204,'data'=>'No data'];
        }
        return response()->json($data, 200);
    }
}
