<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"> -->
                <!-- <div class="p-6 text-gray-900 dark:text-gray-100"> -->
                   

                    <div class="mt-4">
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                            <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-4">
                                Total Registered Clients
                            </h2>
                            <div class="text-4xl font-bold text-indigo-600 dark:text-indigo-400">
                                {{ $aantalCliënten }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
