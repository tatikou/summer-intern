<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use DB;


class EmployeeController extends Controller
{
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

    public function index()
    {
        $users = DB::table('Employees')->get();

        return view('user.index', ['users' => $users]);
    }


}
