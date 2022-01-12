<?php

namespace App\Interfaces;

interface LeagueRepositoryInterface 
{
    public function getAllLeagues();
    public function getLeagueById($leagueId);
    public function deleteLeague($leagueId);
    public function createLeague(array $leagueDetails);
    public function updateLeague($leagueId, array $newDetails);
}
