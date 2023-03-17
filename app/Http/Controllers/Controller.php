<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\Echo_;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param Request $request
     * @return View
     */
    public function live(Request $request): View
    {
        try {
            $team = Http::withOptions(['verify' => false])->get(env('API_URL') . '/api/team/' . Session::get('team')->id);
        } catch(\Exception $exception) {
            return view('chooseteam');
        }
        //Check if player has selected a team name. If not, redirect them.
        if ($team->successful()) { //Check if team exists
            if ($team->object()->status != 1) { //Check if team is approved
                return view('view', [
                    'Team' => $team->object()
                ]);
            } else { //Keep the team in the waiting room
                return view('waiting', [
                    'Team' => $team->object()
                ]);
            }
        } else {
            return view('chooseteam');
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

        $response = Http::withOptions(['verify' => false])->post(env('API_URL') . '/api/teams/create', [
            'name' => $validatedData['name']
        ]);

        //dd($response);
        if($response->successful()) {
            Session::put('team', $response->object()->team);
            return redirect(route('quiz.live'));
        } else {
            return back()->withErrors($response->object()->message ?? 'API Unreachable. Please see a member of society staff');
        }
    }

    public function scoreboard(Request $request): View {
        $Team = Http::get(env('API_URL') . '/api/team/' . Session::get('team')->id)->object();
        $Teams = Http::get(env('API_URL') . '/api/teams')->collect()->sortByDesc('points');

        return view('scoreboard', [
            'Team' => $Team,
            'Teams' => $Teams
        ]);
    }

    public function logout(): Redirector
    {
        //Delete team from Database
        if(Session::get('team')) {
            Http::delete(env('API_URL') . '/api/team/delete?session_id=' . Session::get('team')->session);
            Session::remove('team');
        }

        //For good measure, log out anyone logged in on this device
        Auth::logout();

        return redirect('/');
    }

    public function sendData(Request $request): RedirectResponse {
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

    public function bingo(Request $request): View {
        return view('bingo', [
            'Sheet' => $request->sheet
        ]);
    }
}
