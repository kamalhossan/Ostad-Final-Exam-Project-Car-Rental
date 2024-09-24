<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- Total Cars Card -->
                <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg p-6">
                    <h2 class="text-xl font-semibold dark:text-white">Total Cars</h2>
                    <h4 class="text-3xl font-bold mt-4 dark:text-white">{{ $totalCars }}</h4>
                </div>

                <!-- Available Cars Card -->
                <div class="bg-green-500 rounded-lg shadow-lg p-6">
                    <h2 class="text-xl font-semibold text-white">Available Cars</h2>
                    <h4 class="text-3xl font-bold mt-4 text-white">{{ $availableCars }}</h4>
                </div>

                <!-- Total Rental Card -->
                <div class="bg-blue-500 rounded-lg shadow-lg p-6">
                    <h2 class="text-xl font-semibold text-white">Total Rentals</h2>
                    <h4 class="text-3xl font-bold mt-4 text-white">{{ $totalRental }}</h4>
                </div>

                <!-- Total Earning Card -->
                <div class="bg-yellow-500 rounded-lg shadow-lg p-6">
                    <h2 class="text-xl font-semibold text-white">Total Earnings</h2>
                    <h4 class="text-3xl font-bold mt-4 text-white">{{ $totalEarning }}</h4>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
