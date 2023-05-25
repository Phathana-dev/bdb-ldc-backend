<?php

namespace App\Services\Test;

use Illuminate\Http\Request;

class SectorQuery{
    protected $allowParms =[

        'sectorName' => ['eq','gt','lt','lk']

    ];

    protected $columnMap =[
        'sectorName' => 'sector_name'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'gt' => '>',
        'lt' => '<',
        'gte' => '>=',
        'lte' => '<=',
        'lk' => 'like',
    ];

    public function transform(Request $request) {
        $eloQuery =[];

        foreach ($this -> allowParms as $parm => $operators){
            $query = $request -> query($parm);

            if(!isset($query)){
                continue;
            }
            $column =$this-> columnMap[$parm] ?? $parm;

            foreach ($operators as $operator){
                if(isset($query[$operator])){
                    $eloQuery[]= [$column, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }
        return $eloQuery;
    }

}
