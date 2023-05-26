<?php

namespace App\Http\Controllers\Api\Test;

use App\Models\Sector;
use Illuminate\Http\Request;
use App\Services\Test\SectorQuery;
use App\Http\Controllers\Controller;
use App\Http\Resources\Test\SectorResource;
use App\Http\Resources\Test\SectorCollection;

class SectorController extends Controller
{
    /*
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request){
        $data=Sector::all();

        if($data->count()>0){
            $data= new SectorCollection(Sector::with('employees')->get());
            $data = ['status' => 200, 'data'=> $data];
        }
        else {
            $data = ['status1' => 204, 'data'=> 'No data'];
        }
        return response()->json($data, 200);
    }

    public function findSectorByID($id){

        $data=Sector::where('id','=',$id)->get();

      if($data->count()>0)
      {
        $data= new SectorCollection($data);
        $data = ['status' => 200, 'data'=> $data];
      }
      else {
        $data = ['status1' => 204, 'data'=> 'No data'];
      }
        return response()->json($data, 200);
    }
}
