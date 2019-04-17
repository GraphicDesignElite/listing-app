<?php

namespace App\Http\Controllers;

use App\Report;
use App\Review;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $reports =  Report::all();
       return view('reports.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Review $review)
    {
        // Return with the associated review being reported
        return view('reports.create', compact('review'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Review $review)
    {
        $validated = request()->validate([
            'review_id' => 'required',
            'reporter_first_name' => 'required',
            'reporter_last_name' => 'required',
            'reporter_email' => ['required', 'min:5', 'max:255'],
            'report_comment' => 'max:255',
            'reason' => 'required'
        ]);
        $review->addReport($validated);
        // Mark review as flagged
        $review->flagged = $review->flagged + 1;
        $review->save();
        return redirect('/cpa-listings')->with('danger', 'Your report was submitted.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        
        return view('reports.show', compact('report'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(report $report)
    {
        //
    }
}
