<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Klanten Overzicht') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-8">
                <a href="{{ route('klanten.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Nieuwe Klant Toevoegen
                </a>
            </div>
            <!-- Tabel met klanten -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <table class="min-w-full bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <!-- Tabelkop -->
                    <!-- Tabelkop -->
<thead>
    <tr>
    <th class="px-6 py-3 border-b border-gray-200 dark:border-gray-700 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Bedrijf</th>
        <th class="px-6 py-3 border-b border-gray-200 dark:border-gray-700 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Bedrijfsnaam</th>
        <th class="px-6 py-3 border-b border-gray-200 dark:border-gray-700 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">KVK Nummer</th>
        <th class="px-6 py-3 border-b border-gray-200 dark:border-gray-700"></th>
    </tr>
</thead>
<!-- Tabelinhoud -->
<tbody>
    @foreach ($klanten as $klant)
        <tr>
        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 dark:border-gray-700">
                {{ $klant->is_bedrijf ? 'Ja' : 'Nee' }}
            </td>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 dark:border-gray-700">
                {{ $klant->bedrijfsnaam }}
            </td>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 dark:border-gray-700">
                {{ $klant->kvk_nummer }}
            </td>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 dark:border-gray-700">
                <a href="{{ route('klanten.edit', $klant->id) }}" class="text-blue-500 hover:text-blue-700">Wijzigen</a>
                <form action="{{ route('klanten.destroy', $klant->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-red-700">Verwijderen</button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>

                </table>
            </div>

            <!-- Knop om een nieuwe klant toe te voegen -->
           
            <div class="mt-4">
                <a href="{{ route('dashboard') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Ga Terug naar Dashboard
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
