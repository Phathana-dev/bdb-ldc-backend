<?php

namespace App\Http\Controllers\Api\Test;

use App\Helpers\Helpers;
use Illuminate\Http\Request;
use App\Models\ShiftTimeModel;
// use App\Http\Resources\Shifttime\ShiftTimeResource;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\Shifttime\ShiftTimeCollection;

class ShiftTimeController extends Controller
{
    public function getShiftTime(){
        $data = ShiftTimeModel::all();
        return new ShiftTimeCollection($data);
    }

    public function searchShiftTime(Request $request){

        // $data = ShiftTimeModel::query()
        // ->when(request($request->shifttimestart),function($query){
        //     $query->where('shift_start','LIKE','%6%')->get();
        // });


        // $data = ShiftTimeModel::all();
        // $data = ShiftTimeModel::where('shift_time_name','LIKE','%J%')->get();
        // $data =$data->where('shift_time_name','like','%d%');
        // ->orWhere('shift_time_name','like','%S%')
        // ->get();
        // return  $data;

        // $data= $request;

        // $data=$request->count();
        // if($request->operation){
        //     $data=$request->operation;
        // }

        // $decoded = json_decode($request->getContent(),true);


        // $data="";
        // foreach($decoded as $d ) {

        //     foreach($d as $k=>$v) {
        //         $data= $data."   "."$k - $v\n";
        //     }
        //     $data = $data."###################";
        // }
        // $data1 = ShiftTimeModel::all();
        // $data = $data1->where('shift_time_name','LIKE','%d%');

        // $data= DB::select("SELECT * FROM TB_SHIFT_TIME WHERE shift_time_name LIKE ? AND shift_start LIKE ?",['%d%','%6%']);
        // $data=$data->where('shift_time_name','LIKE','%S%')->get();
        $data = Helpers::createDBUtilitie("tb_shift_time","sendFieldArray")->createDBUtilitie2("3");
        return  $data;
    }


}
