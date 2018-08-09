<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use DB;

class EmployeeController extends Controller
{
    public function index(Request $request, $family_name, $give_name)
    {
        //ここで入力された姓名を受け取りたい
        // $input_f_name = $_POST['input_f_name'];
        // $input_g_name = $_POST['input_g_name'];


        $users = Employee::all();
        foreach ($users as $user) {
            echo $user->given_name;
            $family_name = $user->family_name;
            $given_name = $user->given_name;
        }

        return $request;
    }


    public function all()
    {
        return response()->json(Employee::all()->toArray(), 200);
    }




    public function yes(Request $request)
    {
        $input = $request->all();
        foreach ($input as $user) {
            echo $user;
        }
    }

    public function return_place($family_name_kana,$given_name_kana)
    {
        $employee = DB::table('employees')
            ->where('family_name_kana', $family_name_kana)
            ->where('given_name_kana', $given_name_kana)
            ->first();

        if ($employee == NULL) {
            return abort(500,"従業員情報を取得できません。");
        }

        return response()->json($employee, 200);
    }

    public function check_beacon($family_name_kana,$given_name_kana,$major,$minor){

        $beacon = DB::table('beacons')
            ->where('major', $major)
            ->where('minor', $minor)
            ->first();

        if ($beacon == NULL) {
            return abort(500,"ビーコンテーブルから情報を取得できません。");
        }

        $employee = DB::table('employees')
            ->where('family_name_kana', $family_name_kana)
            ->where('given_name_kana', $given_name_kana)
            ->first();


        if ($employee == NULL) {
            return abort(500,"従業員テーブルから情報を取得できません。");
        }else{
            DB::table('employees')->update(['beacon_id' => $beacon->id]);
        }
        return "success";
    }
}