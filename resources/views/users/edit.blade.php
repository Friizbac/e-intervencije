@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Uredi administratora</h3>
            </div>
            <div class="box-body">
                {!! Form::open(['action' => ['UsersController@update', $user->id], 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('name', 'Ime')}}
                    {{Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Ime'])}}
                </div>
                <div class="form-group">
                    {{Form::label('surname', 'Prezime')}}
                    {{Form::text('surname', $user->surname, ['class' => 'form-control', 'placeholder' => 'Prezime'])}}
                </div>
                <div class="form-group">
                    {{Form::label('email', 'E-Mail adresa')}}
                    {{Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' => 'E-Mail adresa'])}}
                </div>
                <div class="form-group">
                    {{Form::label('password', 'Lozinka (Ako je prazno neće se promjeniti)')}}
                    {{Form::text('password', '', ['class' => 'form-control', 'placeholder' => 'Lozinka'])}}
                </div>
                <div class="form-group">
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Dodaj', ['class' => 'btn btn-primary'])}}
                </div>

    {!! Form::close() !!}
            </div>
        </div>
    </section>

@endsection