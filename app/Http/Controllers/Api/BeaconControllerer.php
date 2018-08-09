<?php

namespace App\Http\Controllers\Api;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Beacon;


class BeaconController extends Controller
{
    public function beacon(Request $request, $family_name, $given_name)
    {
        $major = $request->major;
        $minor = $request->minor;


        $beacon = Beacon::where('major', $major)->where('minor', $minor)->first();

        if (!isset($beacon)){
            //echo "あかんで";
            return response()->json('ビーコンテーブルから情報を取得できません',500);
        }else{
            //echo "入っとるで";
            Employee::where('family_name', $family_name)->Where('given_name', $given_name)->update(['position'=> $beacon->position]);
            return 'ok';
        }
    }


    public function test(request $major,$minor)
    {
        $beacon = Beacon::where('major', $major)->where('minor', $minor)->first();
        if (!isset($beacon)){
            echo "あかんで";
            return response()->json('ビーコンテーブルから情報を取得できません',500);
        }else{
            echo "入っとるで";
            $position = Beacon::table('position')->get();
            return response()->json($position,200);
        }
    }


}
