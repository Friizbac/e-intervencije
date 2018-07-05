@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Uredi operativnog člana</h3>
            </div>
            <div class="box-body">
                {!! Form::open(['action' => ['MembersController@update', $member->id], 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('name', 'Ime')}}
                    {{Form::text('name', $member->name, ['class' => 'form-control', 'placeholder' => 'Ime'])}}
                </div>
                <div class="form-group">
                    {{Form::label('surname', 'Prezime')}}
                    {{Form::text('surname', $member->surname, ['class' => 'form-control', 'placeholder' => 'Prezime'])}}
                </div>
                <div class="form-group">
                    {{Form::label('tel', 'Broj mobitela')}}
                    {{Form::text('tel', $member->tel, ['class' => 'form-control', 'placeholder' => 'Broj mobitela'])}}
                </div>
                <div class="form-group">
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Uredi', ['class' => 'btn btn-primary'])}}
                </div>

    {!! Form::close() !!}
            </div>
        </div>
    </section>

@endsection