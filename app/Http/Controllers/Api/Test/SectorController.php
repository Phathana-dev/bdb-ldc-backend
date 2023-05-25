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
        // return new SectorCollection( Sector::all());


        $filter = new SectorQuery();
        $queryItem = $filter -> transform($request);

        if(count($queryItem) ==0){

            return new SectorCollection( Sector::paginate());
        }
        else {
            return new SectorCollection(Sector::where($queryItem)->paginate());
        }

    }

    public function show(Sector $sector){

        return new SectorResource($sector);
        // return $sector;
    }
}
