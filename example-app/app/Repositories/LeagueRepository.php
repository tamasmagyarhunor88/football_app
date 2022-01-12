<?php

namespace App\Repositories;

use App\Interfaces\LeagueRepositoryInterface;
use App\Models\League;
use App\Models\Team;

class LeagueRepository implements LeagueRepositoryInterface
{

    public function getAllLeagues()
    {
        return League::paginate(10);
    }

    public function getLeagueById($leagueId)
    {
        return League::find($leagueId);
    }

    public function deleteLeague($leagueId)
    {
        return League::find($leagueId)->delete();
    }

    public function createLeague(array $leagueDetails)
    {
        $league = League::create($request->all());

        return $this->home();
    }

    public function updateLeague($leagueId, array $newDetails)
    {
        return League::find($leagueId)->update($newDetails->all());

    }

   /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function home()
    {
        return view('league', ['leagues' => League::all()]);
    }
}