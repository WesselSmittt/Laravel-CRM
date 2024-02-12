<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Klant Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 text-gray-200">
                    <p><strong>Bedrijfsnaam:</strong> {{ $klant->bedrijfsnaam }}</p>
                    <p><strong>KVK Nummer:</strong> {{ $klant->kvk_nummer }}</p>
                    <!-- Voeg andere details van de klant toe indien nodig -->
                </div>
            </div>

            <!-- Toegewezen personen -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 text-gray-200">
                    <h2 class="font-semibold text-lg mb-4">Toegewezen Personen</h2>
                <a href="{{ route('toegewezen.toevoegen', ['klant' => $klant->id]) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Nieuw Persoon koppelen
                </a>
            </div>
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-800">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Voornaam</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Achternaam</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Acties</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach ($toegewezenPersonen as $persoon)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap dark:text-gray-300">{{ $persoon->voornaam }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap dark:text-gray-300">{{ $persoon->achternaam }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap dark:text-gray-300">
                                        <form action="{{ route('toegewezen.verwijderen', ['klant' => $klant->id, 'persoon' => $persoon->id]) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700">Verwijderen</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                    <a href="{{ route('toegewezen.toevoegen', ['klant' => $klant->id]) }}" class="text-blue-500 hover:text-blue-700">Nieuwe persoon toevoegen</a>
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
