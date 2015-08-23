<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Schedule;
use App\Http\Requests\ScheduleRequest;
use Auth;
use DB;

class SchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // DB::enableQueryLog();
        $schedules = Schedule::where('user_id', Auth::id()) ->get();


        // $queries = DB::getQueryLog();
        // $last_query = end($queries);
        // dd($last_query);

        return view('schedules.index')
            ->with('schedules', $schedules);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
         $schedule = new Schedule;

        return view('schedules.create')
            ->with('schedule', $schedule); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(ScheduleRequest $request)
    {
        $schedule = new Schedule;
        $schedule->user_id = Auth::id();
        $schedule->days = $request->get('days');
        $schedule->t1 = $request->get('t1');
        $schedule->t2 = $request->get('t2');
        $schedule->t3 = $request->get('t3');
        $schedule->t4 = $request->get('t4');
        $schedule->t5 = $request->get('t5');
        $schedule->t6 = $request->get('t6');
        $schedule->t7 = $request->get('t7');
        $schedule->save();

        return redirect(route('schedules.index'))
                ->with('flash_success', 'Timetable created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $schedule = Schedule::findOrFail($id);

        return view('schedules.show')
            ->with('schedule', $schedule);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
         $schedule = Schedule::findOrFail($id);

        return view('schedules.create')
            ->with('schedule', $schedule);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update( $id, ScheduleRequest $request)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->days = $request->get('days');
        $schedule->t1 = $request->get('t1');
        $schedule->t2 = $request->get('t2');
        $schedule->t3 = $request->get('t3');
        $schedule->t4 = $request->get('t4');
        $schedule->t5 = $request->get('t5');
        $schedule->t6 = $request->get('t6');
        $schedule->t7 = $request->get('t7');
        $schedule->save();

        return redirect(route('schedules.edit', $id))
                ->with('flash_success', 'timetable updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function delete($id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->delete();

        return redirect(route('schedules.index'))
                ->with('flash_success', 'Timetable deleted successfully.');
    }
}
