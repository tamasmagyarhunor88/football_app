<?php

namespace App\Http\Controllers;

use App\Interfaces\LeagueRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LeagueController extends Controller
{
    private LeagueRepositoryInterface $leagueRepository;

    public function __construct(LeagueRepositoryInterface $leagueRepository) 
    {
        $this->leagueRepository = $leagueRepository;
    }
    
    
    public function index(): JsonResponse 
    {
        return response()->json([
            'data' => $this->leagueRepository->getAllLeagues()
        ]);
    }

    public function store(Request $request): JsonResponse 
    {
        $leagueDetails = $request->only([
            'name',
            'country'
        ]);

        return response()->json(
            [
                'data' => $this->leagueRepository->createLeague($leagueDetails)
            ],
            Response::HTTP_CREATED
        );
    }

    public function show(Request $request): JsonResponse 
    {
        $leagueId = $request->route('id');

        return response()->json([
            'data' => $this->leagueRepository->getLeagueById($leagueId)
        ]);
    }

    public function update(Request $request): JsonResponse 
    {
        $leagueId = $request->route('id');
        $leagueDetails = $request->only([
            'name',
            'country'
        ]);

        return response()->json([
            'data' => $this->leagueRepository->updateLeague($leagueId, $leagueDetails)
        ]);
    }
    
    public function destroy(Request $request): JsonResponse 
    {
        $leagueId = $request->route('id');
        $this->leagueRepository->deleteLeague($leagueId);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }

    // /**
    //  * @param int $league
    //  * @return mixed
    //  */
    // public function teams(int $league)
    // {
    //     return League::with('teams')->find($league);
    // }
}
