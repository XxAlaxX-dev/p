@extends('layout')

@section('content')
    <h1>Users</h1>

    <table style="border: 1px;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Last Name</th>
                <th>Adresse</th>
                <th>Birth Date</th>
                <th>Tel</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $client->nom }}</td>
                    <td>{{ $client->prenom }}</td>
                    <td>{{ $client->adresse }}</td>
                    <td>{{ $client->datenaiss }}</td>
                    <td>{{ $client->tel }}</td>
                </tr>
        </tbody>
    </table>
    <a href="{{route('clients.edit',$client->id)}}">Editer</a>
    <a href="{{route('clients.index',$client->id)}}">Cancel</a>
@endsection
