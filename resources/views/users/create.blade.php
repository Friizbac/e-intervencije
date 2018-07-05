@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Dodaj administratora</h3>
            </div>
            <div class="box-body">
                {!! Form::open(['action' => 'UsersController@store', 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('name', 'Ime')}}
                    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Ime'])}}
                </div>
                <div class="form-group">
                    {{Form::label('surname', 'Prezime')}}
                    {{Form::text('surname', '', ['class' => 'form-control', 'placeholder' => 'Prezime'])}}
                </div>
                <div class="form-group">
                    {{Form::label('email', 'E-Mail adresa')}}
                    {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'E-Mail adresa'])}}
                </div>
                <div class="form-group">
                    {{Form::label('password', 'Lozinka')}}
                    {{Form::text('password', '', ['class' => 'form-control', 'placeholder' => 'Lozinka'])}}
                </div>
                <div class="form-group">
                    {{Form::submit('Dodaj', ['class' => 'btn btn-primary'])}}
                </div>

    {!! Form::close() !!}
            </div>
        </div>
    </section>


@endsection