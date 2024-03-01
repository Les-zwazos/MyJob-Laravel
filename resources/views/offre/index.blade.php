<x-app-layout>

    {{-- Page --}}


<br>
@if ($offres->count() > 0)
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <table class="container">
            <thead>
                <tr>
                    <th></th>
                    <th>Contenu</th>
                    <th>Date de création</th>
                    <th>Date d'expiration</th>
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($offres as $offre)
                    <tr>
                        <td></td>
                        <td>{{ $offre->contenu }}</td>
                        <td>{{ $offre->created_at->format('d/m/Y') }}</td>
                        <td>{{ $offre->dateExpiration }}</td>
                        <td>{{ $offre->type }}</td>

                        @if (Auth::user()->type == 'candidat')
                                    <td><a href="/offres/edit/{{ $offre->id }}" class="btn btn-info">Postuler</a>
                        @endif
                        @if (Auth::user()->type == 'admin')
                                    <td><a href="#{{ $offre->id }}" class="btn btn-info">Afficher</a>
                                    <td><a href="#{{ $offre->id }}" class="btn btn-info">Entreprise</a>
                                    <td><a href="#{{ $offre->id }}" class="btn btn-info">Supprimer</a>

                        @endif
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@else
    <p>Aucune offre n'est disponible.</p>
@endif

    {{-- Page --}}
</x-app-layout>
