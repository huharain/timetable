<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Subject;
use App\Http\Requests\SubjectRequest;
use Auth;
use DB;


class SubjectsController extends Controller
{
    /**
     * Display a subjecting of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $subjects = Subject::where('user_id', Auth::id()) ->get();


        return view('subjects.index')
            ->with('subjects', $subjects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $subject = new subject;

        return view('subjects.create')
            ->with('subject', $subject);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $subject = new subject;
        $subject->user_id = Auth::id();
        $subject->code = $request->get('code');
        $subject->name = $request->get('name');
        $subject->description = $request->get('description');
        $subject->save();

        return redirect(route('subjects.index'))
                ->with('flash_success', 'subject updated successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
   public function show($id) {

        $subject = Subject::findOrFail($id);

        return view('subjects.show')
            ->with('subject', $subject);

    }

    public function edit($id) {

       $subject = Subject::findOrFail($id);

        return view('subjects.create')
            ->with('subject', $subject);
    }

    public function update($id, subjectRequest $request) {

        $subject = Subject::findOrFail($id);
        $subject->code = $request->get('code');
        $subject->name = $request->get('name');
        $subject->description = $request->get('description');
        $subject->save();

        return redirect(route('subjects.edit', $id))
                ->with('flash_success', 'subject updated successfully.');


    }

    public function delete($id) {

        $subject = Subject::findOrFail($id);

        $subject->delete();

        return redirect(route('subjects.index'))
                ->with('flash_success', 'subject deleted successfully.');
    }    
}