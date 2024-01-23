<!-- resources/views/klanten/create.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nieuwe Klant Toevoegen') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">

                <!-- Formulier voor het toevoegen van een nieuwe klant -->
                <form action="{{ route('klanten.store') }}" method="POST">
                    @csrf

                    <!-- Klantgegevens velden -->
                    <div class="mb-4">
                        <label for="is_bedrijf" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Is Bedrijf?</label>
                        <select name="is_bedrijf" id="is_bedrijf" class="mt-1 p-2 border rounded-md w-full">
                            <option value="1">Ja</option>
                            <option value="0">Nee</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="bedrijfsnaam" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Bedrijfsnaam</label>
                        <input type="text" name="bedrijfsnaam" id="bedrijfsnaam" class="mt-1 p-2 border rounded-md w-full">
                    </div>

                    <div class="mb-4">
                        <label for="kvk_nummer" class="block text-sm font-medium text-gray-700 dark:text-gray-300">KVK Nummer</label>
                        <input type="text" name="kvk_nummer" id="kvk_nummer" class="mt-1 p-2 border rounded-md w-full">
                    </div>

                    <!-- Voeg andere velden toe zoals straat, huisnummer, etc. -->

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
