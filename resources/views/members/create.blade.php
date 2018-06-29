@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Dodaj operativnog člana</h3>
            </div>
            <div class="box-body">
                {!! Form::open(['action' => 'MembersController@store', 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('name', 'Ime')}}
                    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Ime'])}}
                </div>
                <div class="form-group">
                    {{Form::label('surname', 'Prezime')}}
                    {{Form::text('surname', '', ['class' => 'form-control', 'placeholder' => 'Prezime'])}}
                </div>
                <div class="form-group">
                    {{Form::label('tel', 'Broj mobitela')}}
                    {{Form::text('tel', '', ['class' => 'form-control', 'placeholder' => 'Broj mobitela'])}}
                </div>
                <div class="form-group">
                    {{Form::submit('Dodaj', ['class' => 'btn btn-primary'])}}
                </div>

    {!! Form::close() !!}

@endsection