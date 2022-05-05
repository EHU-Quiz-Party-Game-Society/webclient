@extends('layouts.live')
@section('title')
    Live Quiz
@endsection
@section('content')
    <!-- Navbar / Header -->
    <header class="navbar navbar-expand navbar-dark bg-dark" style="padding: 10px">
        <span style="color: #fff"><i class="fas fa-users"></i> {{$Sheet}}</span>
        <div style="margin-left: auto!important;">
            <a href="https://ehuquizsociety.com" class="btn btn-info" data-toggle="tooltip" title="Home"><i class="fa fa-fw fa-home"></i></a>
            <form method="post" action="{{route('teams.logout')}}" style="display: inline">@csrf
                <button class="btn btn-danger" data-toggle="tooltip" title="Sign Out"><i class="fa fa-fw fa-sign-out-alt"></i> Leave</button>
            </form>
        </div>
    </header>

    <div id="bingocard">
        <div id="cardimg">
            <img src="{{env('API_URL')}}/bingo/sheet/{{$Sheet}}" width="100%">
        </div>
    </div>
@endsection
@section('footer')
    <script>
        @if (Session::has('success'))
        setTimeout(function() {
            $('#alert').fadeOut('fast');
        }, 3000);
        @endif
    </script>
@endsection
