<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function live(Request $request)
    {
        if(Session::get('team') === null) {
            return view('chooseteam');
        }

        $team = Session::get('team');
        //Check if player has selected a team name. If not, redirect them.
        if ($team->status !== 2) { //Check if team exists
            $team = Http::get(env('API_URL') . '/api/team/' . Session::get('team')->id);
            if ($team->object()->status !== 1) { //Check if team is approved
                Session::put('team', $team->object());
                return view('view', [
                    'Team' => $team->object()

                ]);
            } else { //Keep the team in the waiting room
                return view('waiting', [
                    'Team' => $team->object()
                ]);
            }
        } else {
            return view('view', [
                'Team' => $team
            ]);
        }
    }

    public function createTeam(Request $request)
    {
        $team = Session::get('team');
        if ($team) {
            //User's team already exists, log them back in
            return redirect(route('quiz.live'));
        } else {
            return view('chooseteam');
        }
    }

    public function storeTeam(Request $request) {
            $validatedData = $request->validate([
                'name' => ['required', 'max:50']
            ]);

            $response = Http::post(env('API_URL') . '/api/teams/create', [
                'name' => $validatedData['name']
            ]);

            if($response->status() === 200 || $response->status() === 201) {

                Session::put('team', $response->object()->team);
                return redirect(route('quiz.live'));
            } else {
                return back()->withErrors($response->object()->message ?? 'API Unreachable. Please see a member of society staff');
            }
    }

    public function scoreboard(Request $request) {
        $Team = Http::get(env('API_URL') . '/api/team/' . Session::get('team')->id)->object();
        $Teams = Http::get(env('API_URL') . '/api/teams')->collect()->sortByDesc('points');

        return view('scoreboard', [
            'Team' => $Team,
            'Teams' => $Teams
        ]);
    }

    public function logout() {
        //Delete team from Database
        if(Session::get('team')) {
            //Http::delete(env('API_URL') . '/api/team/delete?session_id=' . Session::get('team')->session);
            //Session::remove('team');
        }

        //For good measure, log out anyone logged in on this device
        //Auth::logout();

        return redirect('/');
    }

    public function sendData(Request $request) {
        $response = Http::post(env('API_URL') . '/api/quiz/send', [
            'question' => $request->question,
            'answer' => $request->answer,
            'session_id' => Session::get('team')->session
        ]);

        try{
            if($response->status() === 201) {
                return back()->with('success', $response->object()->message);
            } else {
                return back()->with('danger', $response->object()->message);
            }
        } catch(\Exception $exception) {
            return back()->with('warning', "Error. Please see society staff: " . $exception->getMessage());
        }

    }

    public function bingo(Request $request) {
        return view('bingo', [
            'Sheet' => $request->sheet
        ]);
    }
}
