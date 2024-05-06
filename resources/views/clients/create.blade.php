@extends('layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nouveau Client</div>
                <div class="card-body">
                    
                    {!! Form::open(['route' => 'clients.store', 'method' => 'POST']) !!}
                    <div class="form-group">
                        {!! Form::label('nom', 'Nom') !!}
                        {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('prenom', 'Prénom') !!}
                        {!! Form::text('prenom', null, ['class' => 'form-control', 'placeholder' => 'Prénom']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('datenaiss', 'Date de Naissance') !!}
                        {!! Form::date('datenaiss', null, ['class' => 'form-control', 'placeholder' => 'Date de Naissance']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('adresse', 'Adresse') !!}
                        {!! Form::text('adresse', null, ['class' => 'form-control', 'placeholder' => 'Adresse']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('tel', 'Téléphone') !!}
                        {!! Form::text('tel', null, ['class' => 'form-control', 'placeholder' => 'Téléphone']) !!}
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
