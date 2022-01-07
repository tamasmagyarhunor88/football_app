<?php

namespace App\Http\Controllers;

use App\Models\League;
use App\Models\Team;
use Illuminate\Http\Request;

class LeagueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return League[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        return League::paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function store(Request $request)
    {
        $league = League::create($request->all());

        return $this->home();
    }

    /**
     * Display the specified resource.
     *
     * @param  League  $league
     * @return League
     */
    public function show(League $league)
    {
        return $league;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  League $league
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, League $league)
    {
        $league->update($request->all());

        return response()->json($league, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  League $league
     * @return \Illuminate\Http\Response
     */
    public function destroy(League $league)
    {
        $league->delete();

        return response()->json(null, 204);
    }

    /**
     * @param int $league
     * @return mixed
     */
    public function teams(int $league)
    {
        return League::with('teams')->find($league);
    }
    
   /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function home()
    {
        return view('league', ['leagues' => League::all()]);
    }
}
