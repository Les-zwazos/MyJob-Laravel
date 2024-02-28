<x-app-layout>


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
</x-app-layout>
