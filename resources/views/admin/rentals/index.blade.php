<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <h1 class="text-2xl font-bold mb-4 dark:text-white">Manage Rentals</h1>

            @if(session('status'))
                <div class="mb-4 text-green-500">
                    {{ session('status') }}
                </div>
            @endif

            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rental ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Car Details</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Start Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">End Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Cost</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($rentals as $rental)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $rental->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $rental->user->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $rental->car->name }} ({{ $rental->car->brand }})</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $rental->start_date->format('Y-m-d') }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $rental->end_date->format('Y-m-d') }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">${{ $rental->total_cost }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $rental->status }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('rentals.show', $rental->id) }}" class="text-blue-600 hover:text-blue-900">View</a>
                                <a href="{{ route('rentals.edit', $rental->id) }}" class="text-yellow-600 hover:text-yellow-900">Edit</a>
                                <form action="{{ route('rentals.destroy', $rental->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
