<?php

namespace App\Http\Controllers;

use App\Functions;
use App\Schedule;
use App\User;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url                =   getURL();
        $currentFunction    =   Functions::where('route',$url)->where('state',1)->orderBy('id','desc')->first();
        $users              =   User::all();
        return view('backend.facebook.schedule.main',compact('currentFunction', 'users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        if ($request->ajax()) {
            if ($id === 'getDatatable'){
                $user = $request->user;
                $date = $request->date;
                $schedules = Schedule::with('User');
                if ($user != 0){
                    $schedules = $schedules->where('user_id', $user);
                }
                if (!empty($date)){
                    $schedules = $schedules->whereDate('date', $date);
                }
                return datatables($schedules)->make(true);
            }
        } else {
            return response()->json([
                'type'      => 'error',
                'title'     => 'Lỗi!',
                'content'   => 'Không phải ajax request']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
