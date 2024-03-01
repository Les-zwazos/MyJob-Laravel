<x-app-layout>
{{-- Page de Candidat et Recruteur --}}
@if (Auth()->user()->type == 'candidat' || Auth()->user()->type == 'recruteur')
{{-- Page de Candidat et Recruteur --}}

   

<br>
@if ($offres->count() > 0)
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <table class="container">
            <thead>
                <tr>
                    <th></th>
                    <th>Contenu</th>
                    <th>Type</th>
                    <th>Recruteur</th>
                    <th>Date de création</th>
                    <th>Date d'expiration</th>
                    @if (Auth()->user()->type == 'admin')
        
                    <th>Action</th>
       
                    @endif
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($offres as $offre)
                    <tr>
                        <td></td>
                        <td>{{ $offre->contenu }}</td>
                        <td>{{ $offre->type }}</td>
                        <td>{{ $offre->recruteur->user->name}}</td>
                        <td>{{ $offre->created_at->format('d/m/Y') }}</td>
                        <td>{{ $offre->dateExpiration }}</td>
                        

                        @if (Auth::user()->type == 'candidat')
                                    <td><a href="/offres/edit/{{ $offre->id }}" class="btn btn-info">Postuler</a>
                        @endif
                        @if (Auth::user()->type == 'admin')
                                    <td><a href="#{{ $offre->id }}" class="btn btn-info">Afficher</a>
                                    <td><a href="#{{ $offre->id }}" class="btn btn-info">Entreprise</a>
                                    <td><a href="{{ route('offres.destroy', ['id' => $offre->id]) }}" class="btn btn-info">Supprimer</a>

                        @endif
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@else
    <p>Aucune offre n'est disponible.</p>
@endif

{{-- (fin)Page de Candidat et Recruteur --}}
@endif
{{-- Page de Candidat et Recruteur(fin) --}}
{{-- --------------------------------------------------------------------------------------------------------------------------------------------------------- --}}
{{-- --------------------------------------------------------------------------------------------------------------------------------------------------------- --}}
{{-- Page de Admin --}}
@if (Auth()->user()->type == 'admin' )
{{-- Page de Admin --}}
<x-slot name="header">
        
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Gerer toutes les offres') }}
    </h2>

</x-slot>




<br>
<div class="container">
    @if ($offres->count() > 0)
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contenu</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Recruteur</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date de création</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date d'expiration</th>
                        @if (Auth()->user()->type == 'admin')
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                        @endif
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($offres as $offre)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap"></td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="container mx-auto">{{ $offre->contenu }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="container mx-auto">{{ $offre->type }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="container mx-auto">{{ $offre->recruteur->user->name }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="container mx-auto">{{ $offre->created_at->format('d/m/Y') }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="container mx-auto">{{ $offre->dateExpiration }}</div>
                            </td>
                            @if (Auth::user()->type == 'admin')
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="container mx-auto">
                                        <a href="#{{ $offre->id }}" class="text-indigo-600 hover:text-indigo-900 mr-4">Afficher</a>
                                        <a href="#{{ $offre->id }}" class="text-indigo-600 hover:text-indigo-900 mr-4">Entreprise</a>
                                        <form action="{{ route('offres.destroy', ['id' => $offre->id]) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900">Supprimer</button>
                                        </form>
                                    </div>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@else
    <p class="mt-3">Aucune offre n'est disponible.</p>
@endif
</div>













{{-- Page de Admin (fin) --}}
@endif
{{-- Page de Admin (fin) --}}
</x-app-layout>
