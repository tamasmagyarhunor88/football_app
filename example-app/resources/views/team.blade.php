<div class="container mx-auto">
</div>
<div class="container mx-auto">
    <div class="mx-4 mt-12">
        <h4 class="font-medium text-gray-600 mb-2">Add a new Team</h4>
        <p class="text-sm text-gray-500 mb-4">Add your new team here</p>
    </div>
    <div>
        <form action="{{ route('teams')}}" method="post">
            @csrf
            <div class="p-4 max-w-xl space-y-4">
                <div>
                    <label for="team" class="block text-sm font-medium text-gray-700">Team name</label>
                    <div class="mt-1 flex rounded-md">
                        <input type="text" step="any" name="name" id="name" class="focus:ring-gray-500 focus:border-gray-500 flex-1 block w-full rounded text-sm border-gray-300" placeholder="Team name here">
                    </div>
                    <div class="my-4"></div>
                    <label for="name" class="block text-sm font-medium text-gray-700">City Name</label>
                    <div class="mt-1 flex rounded-md">
                        <input type="text" step="any" name="city" id="city" class="focus:ring-gray-500 focus:border-gray-500 flex-1 block w-full rounded text-sm border-gray-300" placeholder="Team city here">
                    </div>
                    <div class="my-4"></div>
                    <label for="name" class="block text-sm font-medium text-gray-700">League</label>
                    <div class="mt-1 flex rounded-md">
                        <select id="league_id" name="league_id" class="focus:ring-gray-500 focus:border-gray-500 flex-1 block w-full rounded text-sm border-gray-300">
                            @foreach($leagues as $league)
                                <option value="{{ $league['id'] }}">{{ ucwords($league['name']) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Save Team</button>
            </div>
        </form>
    </div>
    <div class="my-4 mt-12">
        <div class="mx-4 mt-12">
            <h4 class="font-medium text-gray-600 mb-2">League Teams</h4>
            <table>
                <thead>
                <tr>
                    <th>League name</th>
                    <th>Team name</th>
                    <th>Team city</th>
                </tr>
                </thead>
                <tbody>
                @foreach($leagues as $league)
                    @foreach($league['teams'] as $team)
                        <tr>
                            <td class="padded-border"> {{$league['name']}}</td>
                            <td class="padded-border"> {{$team['name']}}</td>
                            <td class="padded-border"> {{$team['city']}}</td>
                        </tr>
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
