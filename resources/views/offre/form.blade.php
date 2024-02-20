<x-app-layout>
    {{-- Page --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form method="POST" action="{{ route('offres.store', ['type' => $type]) }}">
                    @csrf

                    <div>
                        <label for="type" class="block font-medium text-sm text-gray-700">Type d'offre</label>
                        <input id="type" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm" type="text" name="type" value={{ $type}} readonly />
                    </div>

                    <div class="mt-4">
                        <label for="dateExpiration" class="block font-medium text-sm text-gray-700">Date d'expiration</label>
                        <input id="dateExpiration" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="dateExpiration" :value="old('dateExpiration')" required />
                    </div>

                    <div class="mt-4">
                        <label for="contenu" class="block font-medium text-sm text-gray-700">Contenu</label>
                        <input id="contenu" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="contenu" :value="old('contenu')" required />
                    </div>

                    @if($type === 'stage')
                        <div class="mt-4">
                            <label for="dateDebut" class="block font-medium text-sm text-gray-700">Date de début</label>
                            <input id="dateDebut" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="dateDebut" :value="old('dateDebut')" required />
                        </div>

                        <div class="mt-4">
                            <label for="duree" class="block font-medium text-sm text-gray-700">Durée</label>
                            <input id="duree" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="duree" :value="old('duree')" required />
                        </div>
                    @endif

                    @if($type === 'emploi')
                        <div class="mt-4">
                            <label for="contrat" class="block font-medium text-sm text-gray-700">Contrat</label>
                            <input id="contrat" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="contrat" :value="old('contrat')" required />
                        </div>
                    @endif

                    <div class="flex justify-end mt-4">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition">{{ __('Enregistrer') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Page --}}
</x-app-layout>
