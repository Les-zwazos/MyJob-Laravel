<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recruteur') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container">
                        <h1>Liste des offres</h1>

                        <table class="table table-bordered">
                            <thead class="bg-success text-white">
                                <tr>
                                    <th>ID</th>
                                    <th>Contenu</th>
                                    <th>Date de cration</th>
                                    <th>Date d'expiration</th>
                                    <th>Durre</th>
                                    <th colspan="3"><a href="/offres/create" class="btn btn-success">Ajouter</a></th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($offres as $offre)
                                <tr>
                                    <td>{{ $offre->stage->id }}</td>
                                    <td>{{ $offre->contenu }}</td>
                                    <td>{{ $offre->created_at->format('d/m/Y') }}
                                    <td>{{ $offre->dateExpiration }}</td>
                                    <td>{{ $offre->stage->durre }}</td>
                                    <td><a href="/offres/edit/{{ $offre->id }}" class="btn btn-success">Modifier</a></td>
                                    <td><a href="/offres/delete/{{ $offre->id }}" class="btn btn-success">Supprimer</a></td>
                                    <td><a href="/offres/show/{{ $offre->id }}" class="btn btn-success">Afficher</a></td>
                                    
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