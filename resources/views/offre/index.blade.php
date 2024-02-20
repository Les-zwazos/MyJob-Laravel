<x-app-layout>
    
    {{-- Page --}}
      
    
        <h1>{{ Auth()->user()->type }}</h1>

@if ($offres->count() > 0)
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Contenu</th>
                <th>Date de création</th>
                <th>Date d'expiration</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($offres as $offre)
                <tr>
                    <td>{{ $offre->id }}</td>
                    <td>{{ $offre->contenu }}</td>
                    <td>{{ $offre->created_at->format('d/m/Y') }}</td>
                    <td>{{ $offre->dateExpiration }}</td>
                    <td>{{ $offre->type }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>Aucune offre n'est disponible.</p>
@endif

    {{-- Page --}}
</x-app-layout>