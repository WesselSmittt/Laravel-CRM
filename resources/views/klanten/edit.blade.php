<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bewerk Klant') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">

                <!-- Formulier voor het bewerken van klantgegevens -->
                <form action="{{ route('klanten.update', $klant->id) }}" method="POST">
    @csrf
    @method('PUT')

    <!-- Klantgegevens velden -->
    <div class="mb-4">
        <label for="bedrijfsnaam" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Bedrijfsnaam</label>
        <input type="text" name="bedrijfsnaam" id="bedrijfsnaam" value="{{ $klant->bedrijfsnaam }}" class="mt-1 p-2 border rounded-md w-full">
    </div>

    <div class="mb-4">
        <label for="kvk_nummer" class="block text-sm font-medium text-gray-700 dark:text-gray-300">KvK-nummer</label>
        <input type="text" name="kvk_nummer" id="kvk_nummer" value="{{ $klant->kvk_nummer }}" class="mt-1 p-2 border rounded-md w-full">
    </div>

    <!-- Voeg andere velden toe zoals straat, huisnummer, enzovoort -->

    <!-- Submit knop -->
    <div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Opslaan
        </button>
    </div>
</form>

            </div>
        </div>
    </div>
</x-app-layout>
