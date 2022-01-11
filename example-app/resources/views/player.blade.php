<div class="container mx-auto">
</div>
<div class="container mx-auto">
    <div class="mx-4 mt-12">
        <h4 class="font-medium text-gray-600 mb-2">Add a new Player</h4>
        <p class="text-sm text-gray-500 mb-4">Add your new player here</p>
    </div>
    <div>
        <form action="{{ route('players')}}" method="post">
            @csrf
            <div class="p-4 max-w-xl space-y-4">
                <div>
                    <label for="player" class="block text-sm font-medium text-gray-700">Player name</label>
                    <div class="mt-1 flex rounded-md">
                        <input type="text" step="any" name="name" id="name" class="focus:ring-gray-500 focus:border-gray-500 flex-1 block w-full rounded text-sm border-gray-300" placeholder="Player name here">
                    </div>
                    <div class="my-4"></div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Date of birth</label>
                    <div class="mt-1 flex rounded-md">
                        <input type="text" step="any" name="birth_date" id="birth_date" class="focus:ring-gray-500 focus:border-gray-500 flex-1 block w-full rounded text-sm border-gray-300" placeholder="Date of birth here">
                    </div>
                    <div class="my-4"></div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Place of birth</label>
                    <div class="mt-1 flex rounded-md">
                        <input type="text" step="any" name="birth_place" id="birth_place" class="focus:ring-gray-500 focus:border-gray-500 flex-1 block w-full rounded text-sm border-gray-300" placeholder="Place of birth here">
                    </div>
                    <div class="my-4"></div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Player height</label>
                    <div class="mt-1 flex rounded-md">
                        <input type="text" step="any" name="height" id="height" class="focus:ring-gray-500 focus:border-gray-500 flex-1 block w-full rounded text-sm border-gray-300" placeholder="Height player here">
                    </div>
                    <div class="my-4"></div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Player weight</label>
                    <div class="mt-1 flex rounded-md">
                        <input type="text" step="any" name="weight" id="weight" class="focus:ring-gray-500 focus:border-gray-500 flex-1 block w-full rounded text-sm border-gray-300" placeholder="Weight player here">
                    </div>
                    <div class="my-4"></div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Player position</label>
                    <div class="mt-1 flex rounded-md">
                        <input type="text" step="any" name="postition" id="postition" class="focus:ring-gray-500 focus:border-gray-500 flex-1 block w-full rounded text-sm border-gray-300" placeholder="Position player here">
                    </div>
                    <div class="my-4"></div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Player total goals</label>
                    <div class="mt-1 flex rounded-md">
                        <input type="text" step="any" name="total_goals" id="total_goals" class="focus:ring-gray-500 focus:border-gray-500 flex-1 block w-full rounded text-sm border-gray-300" placeholder="Total goals player here">
                    </div>
                    <div class="my-4"></div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Team</label>
                    <div class="mt-1 flex rounded-md">
                        <select id="team_id" name="team_id" class="focus:ring-gray-500 focus:border-gray-500 flex-1 block w-full rounded text-sm border-gray-300">
                            @foreach($teams as $team)
                                <option value="{{ $team['id'] }}">{{ ucwords($team['name']) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Save Player</button>
            </div>
        </form>
    </div>
    <div class="my-4 mt-12">
        <div class="mx-4 mt-12">
            <h4 class="font-medium text-gray-600 mb-2"> Team Players</h4>
            <table>
                <thead>
                <tr>
                    <th>League name</th>
                    <th>Team name</th>
                    <th>Player name</th>
                    <th>Player date of birth</th>
                    <th>Player place of birth</th>
                    <th>Player heigth</th>
                    <th>Player weight</th>
                    <th>Player position</th>
                    <th>Player total goals</th>
                </tr>
                </thead>
                <tbody>
                @foreach($leagues as $league)
                    @foreach($league['teams'] as $team)
                        @foreach($team['players'] as $player)
                            <tr>
                                <td class="padded-border"> {{$league['name']}}</td>
                                <td class="padded-border"> {{$team['name']}}</td>
                                <td class="padded-border"> {{$player['name']}}</td>
                                <td class="padded-border"> {{$player['birth_date']}}</td>
                                <td class="padded-border"> {{$player['birth_place']}}</td>
                                <td class="padded-border"> {{$player['height']}}</td>
                                <td class="padded-border"> {{$player['weight']}}</td>
                                <td class="padded-border"> {{$player['postition']}}</td>
                                <td class="padded-border"> {{$player['total_goals']}}</td>
                            </tr>
                        @endforeach
                    @endforeach
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<style>
    table, th, td {
        border: 1px solid #9c27b0;
    }
    table th, table td{
        padding-right: 10px;
        padding-left: 10px;
        padding-top: 3px;
        padding-bottom: 3px;
    }
</style>