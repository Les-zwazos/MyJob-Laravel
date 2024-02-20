<x-app-layout>
    {{-- page --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center">
            <div style="border: 2px solid black; background-color: black; border-radius: 10px; padding: 20px;">
                <a href="{{ route('offres.create', ['type' => 'stage']) }}" class="block bg-black hover:bg-gray-800 text-white font-bold py-2 px-4 rounded mb-2">
                    {{ __('Créer une offre de stage') }}
                </a>

                <a href="{{ route('offres.create', ['type' => 'emploi']) }}" class="block bg-black hover:bg-gray-800 text-white font-bold py-2 px-4 rounded">
                    {{ __('Créer une offre d\'emploi') }}
                </a>
            </div>
        </div>
    </div>
    {{-- page --}}
</x-app-layout>
