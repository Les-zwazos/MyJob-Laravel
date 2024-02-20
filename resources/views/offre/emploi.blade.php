<x-app-layout>
   

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container">
                        <h1>Liste des emplois</h1>

                        <table class="table table-bordered">
                            <thead class="bg-success text-white">
                                <tr>
                                    <th>ID</th>
                                    <th>Contenu</th>
                                    <th>Date de cration</th>
                                    <th>Date d'expiration</th>
                                    <th>Contrat</th>
                                    <th colspan="3"><a href="/emplois/create" class="btn btn-success">Ajouter</a></th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($offres as $offre)
                                <tr>
                                    <td>{{ $offre->emploi->id }}</td>
                                    <td>{{ $offre->contenu }}</td>
                                    <td>{{ $offre->created_at->format('d/m/Y') }}
                                    <td>{{ $offre->dateExpiration }}</td>
                                    <td>{{ $offre->emploi->contrat }}</td>
                                    <td><a href="/emplois/edit/{{ $offre->id }}" class="btn btn-success">Modifier</a></td>
                                    <td><a href="/emplois/delete/{{ $offre->id }}" class="btn btn-success">Supprimer</a></td>
                                    <td><a href="/emplois/show/{{ $offre->id }}" class="btn btn-success">Afficher</a></td>
                                    
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