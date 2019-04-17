@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <h1 class="display-3">Review Reports</h1>
    <p class="lead">See all recently reported reviews here.</p>
</div>


<div class="report">
    <table class="table">
        <thead>
            <tr>
                <th>View Report</th>
                <th>Report Reason</th>
                <th>Comment</th>
                <th>Reviewed</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reports as $report)
            <tr>
                <td scope="row"><a href="/admin/report/{{$report->id}}">View Report {{$report->id}}</a></td>
                <td>{{$report->reason}}</td>
                <td>{{$report->report_comment}}</td>
                <td>{{$report->staff_reviewed == 0 ? "No" : "Yes"}}</td>                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection