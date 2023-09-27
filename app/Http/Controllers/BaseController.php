<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DistrictMaster;
use App\Models\StateMaster;

class BaseController extends Controller
{
    public function getStates()
    {
        return StateMaster::where('status', 1)->orderBy('name','ASC')->get();
    }

    public function getCityFromState(Request $request)
    {
        if($request->ajax()){
            return DistrictMaster::where('state_id', $request->state_id)
                                ->selectRaw('concat ( upper(substring(name,1,1)), lower(right(name,length(name)-1))) as name, id')
                                ->orderBy('name', 'ASC')
                                ->get();
        }
        return [];
    }

    public function getUserIpAddr(){
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';

        if(env('APP_ENV') == 'local'){
            return '203.122.28.140';
        }else{
            return $ipaddress;
        }

    }
}
