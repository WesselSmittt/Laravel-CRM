<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contactpersonen') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-8">
                <a href="{{ route('contacten.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Nieuwe Contactpersoon Toevoegen
                </a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <table class="min-w-full bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <!-- Tabelkop -->
                    <thead>
                        <tr>
                            <th class="px-6 py-3 border-b border-gray-200 dark:border-gray-700 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-500 uppercase tracking-wider">Voornaam</th>
                            <th class="px-6 py-3 border-b border-gray-200 dark:border-gray-700 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-500 uppercase tracking-wider">Achternaam</th>
                            <th class="px-6 py-3 border-b border-gray-200 dark:border-gray-700"></th>
                            <th class="px-6 py-3 border-b border-gray-200 dark:border-gray-700"></th>
                            <th class="px-6 py-3 border-b border-gray-200 dark:border-gray-700"></th>
                        </tr>
                    </thead>
                    <!-- Tabelinhoud -->
                    <tbody>
                        @foreach ($contacten as $contact)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 dark:border-gray-700 dark:text-gray-200">{{ $contact->voornaam }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 dark:border-gray-700 dark:text-gray-200">{{ $contact->achternaam }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 dark:border-gray-700"><a href="{{ route('contacten.show', $contact->id) }}" class="text-blue-500 hover:text-blue-700">👁️</a></td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 dark:border-gray-700"><a href="{{ route('contacten.edit', $contact->id) }}" class="text-yellow-500 hover:text-yellow-700">✏️</a></td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 dark:border-gray-700"><form action="{{ route('contacten.destroy', $contact->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700">❌</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
