<?php

namespace App\Helpers;
/*
 Create HelperFile
    config->app.php to add in aliases

 */

class Helpers {

    public static function helperfunction1(){
        return "helper function 1 response";
    }

    public static function createDBUtilitie($tableName,$fieldArray){
        $data="SELECT * FROM ".$tableName;
        return  $data;
    }
    public static function createDBUtilitie2($tableName,$fieldArray){
        $data="SELECT * FROM ".$tableName;
        return  $data;
    }

}
