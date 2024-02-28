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
                        <td>
                            <a href="" class="btn btn-primary">Postuer</a>
                        </td>
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
