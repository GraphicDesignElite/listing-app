@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <h1 class="display-3">Review Report</h1>
    <p class="lead">This report has been issued by {{$report->reporter_first_name}} {{$report->reporter_last_name[0]}}.</p>
</div>

<div class="report">
    <table class="table">
        <thead>
            <tr>
                <th>Report Reason</th>
                <th>Comment</th>
                <th>Reviewed</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">{{$report->reason}}</td>
                <td>{{$report->report_comment}}</td>
                <td>{{$report->staff_reviewed == 0 ? "No" : "Yes"}}</td>                
            </tr>
        </tbody>
    </table>
</div>


@endsection