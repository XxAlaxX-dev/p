@extends('layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update clients
                </div>
                <div class="card-body">
                    
                    {!! Form::model($client,['route' =>['clients.update', $client -> id],'method'=>'PUT']) !!}
                    <div class="form-group">
                        {!! Form::label('nom', 'Nom') !!}
                        {!! Form::text('nom', $client->nom, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('prenom', 'Prénom') !!}
                        {!! Form::text('prenom', $client->prenom, ['class' => 'form-control', 'placeholder' => 'Prénom']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('datenaiss', 'Date de Naissance') !!}
                        {!! Form::date('datenaiss', $client->datenaiss, ['class' => 'form-control', 'placeholder' => 'Date de Naissance']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('adresse', 'Adresse') !!}
                        {!! Form::text('adresse', $client->adresse, ['class' => 'form-control', 'placeholder' => 'Adresse']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('tel', 'Téléphone') !!}
                        {!! Form::text('tel', $client->tel, ['class' => 'form-control', 'placeholder' => 'Téléphone']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('clients.index') }}" class="btn btn-secondary">Retour</a>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div-->
@endsection
