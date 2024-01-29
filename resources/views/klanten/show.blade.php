<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Klant Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Informatie van de klant -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 text-gray-200">
                    <p><strong>Bedrijfsnaam:</strong> {{ $klant->bedrijfsnaam }}</p>
                    <p><strong>KVK Nummer:</strong> {{ $klant->kvk_nummer }}</p>
                    <!-- Voeg andere details van de klant toe indien nodig -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
