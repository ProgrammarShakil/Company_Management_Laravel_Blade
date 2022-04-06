<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\Footer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PayEmployee;

class PayEmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::get();
        return view('Backend.pages.pay_employee.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()  //create route used for show employee history
    {
        $data = PayEmployee::with('users')->get();
        return view('Backend.pages.pay_employee.show',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation Data
        $request->validate([
            // 'title' => 'required',
        ]);
        
        $pay_employee = new PayEmployee();
        $pay_employee->user_id = $request->user_id;
        $pay_employee->remarks = $request->remarks;
        $pay_employee->amount = $request->amount;
        $pay_employee->month_name = $request->month_name;

        $pay_employee->save();
        return redirect()->back()->with('Status', 'Payment Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = PayEmployee::find($id);
        return view('Backend.pages.pay_employee.show', compact('data') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::find($id);
        return view('Backend.pages.pay_employee.pay', compact('data') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
  
 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
