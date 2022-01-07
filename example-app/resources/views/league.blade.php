<div class="container mx-auto">
</div>
<div class="container mx-auto">
    <div class="mx-4 mt-12">
        <h4 class="font-medium text-gray-600 mb-2">Add a new League</h4>
        <p class="text-sm text-gray-500 mb-4">Add your new league here</p>
    </div>
    <div>
        <form action="{{ route('leagues')}}" method="post">
            @csrf
            <div class="p-4 max-w-xl space-y-4">
                <div>
                    <label for="League" class="block text-sm font-medium text-gray-700">League name</label>
                    <div class="mt-1 flex rounded-md">
                        <input type="text" step="any" name="name" id="name" class="focus:ring-gray-500 focus:border-gray-500 flex-1 block w-full rounded text-sm border-gray-300" placeholder="League name here">
                    </div>
                    <div class="my-4"></div>
                    <label for="name" class="block text-sm font-medium text-gray-700">League Country name</label>
                    <div class="mt-1 flex rounded-md">
                        <input type="text" step="any" name="country" id="country" class="focus:ring-gray-500 focus:border-gray-500 flex-1 block w-full rounded text-sm border-gray-300" placeholder="League country here">
                    </div>                   
                </div>
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Save League</button>
            </div>
        </form>
    </div>
    <div class="my-4 mt-12">
        <div class="mx-4 mt-12">
            <h4 class="font-medium text-gray-600 mb-2">Leagues</h4>
            <table>
                <thead>
                <tr>
                    <th>League name</th>
                    <th>League Country</th>
                </tr>
                </thead>
                <tbody>
                @foreach($leagues as $league)
                        <tr>
                            <td class="padded-border"> {{$league['name']}}</td>
                            <td class="padded-border"> {{$league['country']}}</td>
                        </tr>
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