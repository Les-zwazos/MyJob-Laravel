<x-app-layout>
{{-- Page de Candidat et Recruteur --}}
@if (Auth()->user()->type == 'candidat' || Auth()->user()->type == 'recruteur')
{{-- Page de Candidat et Recruteur --}}
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="container">
                            <h1>Liste des offres</h1>
                            @if (Auth::user()->type == 'recruteur')
                                <div class="d-flex justify-content-between align-items-center">
                                    <h1>@yield('name')</h1>
                                    <a href="/offres/create/stage" class="btn btn-primary" role="button">Ajouter une offre de stage</a>
                                </div>
                            @endif
                            <table class="container">
                                <thead class="">
                                    <tr>
                                        <th></th>
                                        <th>Contenu</th>
                                        <th>Date de cration</th>
                                        <th>Date d'expiration</th>
                                        <th>Duree</th>
                                        @if (Auth::user()->type == 'recruteur')
                                            <th>Action</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($offres as $offre)
                                    <tr>
                                        <td></td>
                                        <td>{{ $offre->contenu }}</td>
                                        <td>{{ $offre->created_at->format('d/m/Y') }}
                                        <td>{{ $offre->dateExpiration }}</td>
                                        <td>{{ $offre->stage->durre }}</td>
                                        @if (Auth::user()->type == 'recruteur')
                                            <td><a href="/offres/edit/{{ $offre->id }}" class="btn btn-info">Modifier</a>
                                            <a href="/offres/delete/{{ $offre->id }}" class="btn btn-danger">Supprimer</a></td>

                                        @endif

                                        @if (Auth::user()->type == 'candidat')
                                        <td><a href="/offres/edit/{{ $offre->id }}" class="btn btn-info">Postuler</a>
                                        @endif


                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    




{{-- Page de Candidat et Recruteur(fin) --}}
@endif
{{-- Page de Candidat et Recruteur(fin) --}}
{{-- --------------------------------------------------------------------------------------------------------------------------------------------------------- --}}
{{-- --------------------------------------------------------------------------------------------------------------------------------------------------------- --}}
{{-- Page de Admin --}}
@if (Auth()->user()->type == 'admin' )
{{-- Page de Admin --}}


<x-slot name="header">
    
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Gerer les offres de stage') }}
    </h2>

</x-slot>





<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <div class="container">
                    <h1>Liste des offres</h1>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                        @foreach ($offres as $offre)
                            <div class="bg-gray-100 p-4 rounded-lg">
                                <p><strong>Contenu:</strong> {{ $offre->contenu }}</p>
                                <p><strong>Date de création:</strong> {{ $offre->created_at->format('d/m/Y') }}</p>
                                <p><strong>Date d'expiration:</strong> {{ $offre->dateExpiration }}</p>
                                <p><strong>Durée:</strong> {{ $offre->stage->duree }}</p>
                                
                                    <div>
                                        <a href="/offres/edit/{{ $offre->id }}" class="btn btn-info">Modifier</a>
                                        <a href="/offres/delete/{{ $offre->id }}" class="btn btn-danger">Supprimer</a>
                                    </div>
                                
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





{{-- Page de Admin (fin) --}}
@endif
{{-- Page de Admin (fin) --}}
</x-app-layout>
