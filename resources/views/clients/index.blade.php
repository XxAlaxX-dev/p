@extends('layout')

@section('content')
    <h1>Users</h1>

    <table class="table">
        <thead>
            <tr class="table-active">
                <th>Name</th>
                <th>Last Name</th>
                <th>Adresse</th>
                <th>Birth Date</th>
                <th>Tel</th>
                <th>Actions</th> <!-- Nouvelle colonne pour les actions -->
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->nom }}</td>
                    <td>{{ $client->prenom }}</td>
                    <td>{{ $client->adresse }}</td>
                    <td>{{ $client->datenaiss }}</td>
                    <td>{{ $client->tel }}</td>
                    <td>
                        <a href="{{ route('clients.show', $client->id) }}">Show</a>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: none; border: none; color: red; text-decoration: underline; cursor: pointer;">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $clients->links()}}    
@endsection
