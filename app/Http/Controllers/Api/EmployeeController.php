<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use DB;


class EmployeeController extends Controller
{

    public function index()
    {
        //ここで入力された姓名を受け取る
        // $input_f_name = $_POST['input_f_name'];
        // $input_g_name = $_POST['input_g_name'];


        $users = Employee::all();
        foreach ($users as $user) {
        echo $user->given_name;
        }

        return $users;
    }


    public function all()
    {
        return response()->json(Employee::all()->toArray(),200);
    }

  /*  public function index(Request $request, $family, $give)
    {
        $emp = Employee::where('family_name', $family)->first();

        $user= Employee::with('family_name')->first();
        return $user->toArray();
    }*/


}
