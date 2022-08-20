@extends('layouts.live')
@section('title')
    Live Quiz
@endsection
@section('content')
    <!-- Navbar / Header -->
    @if($Team)
    <header class="navbar navbar-expand navbar-dark bg-dark" style="padding: 10px">
        <span style="color: #fff"><i class="fas fa-users"></i> {{$Team->name}} | ID: {{$Team->id}} | <i class="fas fa-trophy"></i> {{$Team->points}}</span>
        <div style="margin-left: auto!important;">
            <a href="{{route('quiz.live')}}" class="btn btn-success" data-toggle="tooltip" title="Return to Quiz"><i class="fas fa-fw fa-long-arrow-alt-left"></i> Return to Quiz</a>
        </div>
    </header>
    @endif

    <table id="example" class="table">
        <thead>
            <th>Team Name</th>
            <th>Points</th>
        </thead>
        <tbody>
        @foreach($Teams as $Client)
            @if($Team)
                @if($Client['id'] == $Team->id)
                <tr class="correct">
                @else
                <tr>
                @endif
            @endif
                    <td>{{$Client['name']}}</td>
                    <td>{{$Client['points']}}</td>
                </tr>
        @endforeach
        </tbody>
    </table>
@endsection
