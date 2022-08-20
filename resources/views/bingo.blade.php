@extends('layouts.live')
@section('title')
    Bingo
@endsection
@section('content')
    <!-- Navbar / Header -->
    <header class="navbar navbar-expand navbar-dark bg-dark" style="padding: 10px">
        <span style="color: #fff"><i class="fas fa-users"></i> {{$Sheet}}</span>
        <div style="margin-left: auto!important;">
            <a href="{{env('API_URL')}}" class="btn btn-info" data-toggle="tooltip" title="Home"><i class="fa fa-fw fa-home"></i></a>
            <form method="post" action="{{route('teams.logout')}}" style="display: inline">@csrf
                <button class="btn btn-danger" data-toggle="tooltip" title="Sign Out"><i class="fa fa-fw fa-sign-out-alt"></i> Leave</button>
            </form>
        </div>
    </header>

    <div id="bingocard">
        <div id="bingosheet">
            <canvas id="bingo-canvas" width="500" height="1206" class="center-fit"></canvas>
        </div>
    </div>
@endsection
