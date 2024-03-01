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
                        <td>{{ $offre->recruteur->user->name }}</td>
                        <td>{{ $offre->created_at->format('d/m/Y') }}</td>
                        <td>{{ $offre->dateExpiration }}</td>
                        @if (Auth::user()->type == 'admin')
                            <td>
                                <a href="#{{ $offre->id }}" class="btn btn-info">Afficher</a>
                                <a href="#{{ $offre->id }}" class="btn btn-info">Entreprise</a>
                                <form action="{{ route('offres.destroy', ['offre' => $offre->id]) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@else
    <p>Aucune offre n'est disponible.</p>
@endif











{{-- Page de Admin (fin) --}}
@endif
{{-- Page de Admin (fin) --}}
</x-app-layout>
