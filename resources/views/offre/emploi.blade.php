<x-app-layout>
    @if (Auth()->user()->type == 'admin')
    <x-slot name="header">
    
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Gerer les offres d'emplois") }}
        </h2>
    
    </x-slot>
@endif




    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container">
                        <h1>Liste des emplois</h1>
                        @if (Auth::user()->type == 'recruteur')
                            <div class="d-flex justify-content-between align-items-center">
                                <h1>@yield('name')</h1>
                                <a href="/offres/create/emploi" class="btn btn-primary" role="button">Ajouter une offre de d'emploi</a>
                            </div><br>
                        @endif
                        <table class="container">
                            <thead >
                                <tr>
                                    <th>Contenu</th>
                                    <th>Date de cration</th>
                                    <th>Date d'expiration</th>
                                    <th>Contrat</th>
                                    @if (Auth::user()->type == 'recruteur')
                                        <th>Action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($offres as $offre)
                                <tr>
                                    <td>{{ $offre->contenu }}</td>
                                    <td>{{ $offre->created_at->format('d/m/Y') }}
                                    <td>{{ $offre->dateExpiration }}</td>
                                    <td>{{ $offre->emploi->contrat }}</td>
                                    @if (Auth::user()->type == 'recruteur')
                                        <td><a href="/emplois/edit/{{ $offre->id }}" class="btn btn-info">Modifier</a>
                                            <a href="/emplois/delete/{{ $offre->id }}" class="btn btn-danger">Supprimer</a>
                                        </td>
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
</x-app-layout>
