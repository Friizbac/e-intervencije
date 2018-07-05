@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Dodaj obavijest</h3>
            </div>
            <div class="box-body">
                {!! Form::open(['action' => 'NotificationsController@store', 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Naslov')}}
                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Naslov'])}}
                </div>
                <div class="form-group">
                    {{Form::label('description', 'opis')}}
                    {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Opis'])}}
                </div>
                <div class="form-group">
                    {{Form::submit('Dodaj', ['class' => 'btn btn-primary'])}}
                </div>

    {!! Form::close() !!}
            </div>
        </div>
    </section>

@endsection