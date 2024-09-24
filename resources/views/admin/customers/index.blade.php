<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold dark:text-white">Customers</h1>
                <!-- <a href="{{ route('customers.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                    Add New Customer
                </a> -->
            </div>

            <table class="w-full divide-y divide-gray-200 dark:divide-gray-700 dark:text-white">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                    @foreach ($customers as $customer)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $customer->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $customer->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $customer->phone }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $customer->address }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <a href="{{ route('customers.show', $customer->id) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                                <a href="{{ route('customers.edit', $customer->id) }}" class="text-green-600 hover:text-green-900 ml-4">Edit</a>
                                <a href="{{ route('admin.customers.history', $customer->id) }}" class="text-green-600 hover:text-green-900 ml-4">Rental History </a>
                                <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" class="inline ml-4">
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
