@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Uredi obavijest</h3>
            </div>
            <div class="box-body">
                {!! Form::open(['action' => ['NotificationsController@update', $notification->id], 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Naslov')}}
                    {{Form::text('title', $notification->title, ['class' => 'form-control', 'placeholder' => 'Naslov'])}}
                </div>
                <div class="form-group">
                    {{Form::label('description', 'opis')}}
                    {{Form::textarea('description', $notification->description, ['class' => 'form-control', 'placeholder' => 'Opis'])}}
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