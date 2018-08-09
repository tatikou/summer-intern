<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Employee;


class EmployeeController extends Controller
{

    public function match($family_name,$given_name)
    {
        $user = Employee::where('family_name', $family_name)->where('given_name', $given_name)->first();
        if (!isset($user)){
            //echo "あかんで";
            return response()->json('従業員情報を取得できません',500);
        }else{
            //echo "入っとるで";
            return response()->json($user,200);
        }
    }


    public function test($given_name)
    {
        Employee::where('given_name', $given_name)->update(['given_name'=>'ゴンザエモン']);
        return 'ok';
    }

        //return response()->json(Employee::all()->toArray(),200);


    public function error()
    {
        return response()->json('従業員情報を取得できません',500);
    }

}
