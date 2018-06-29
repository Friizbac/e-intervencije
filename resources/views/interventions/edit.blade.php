@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Edit intervenciju</h3>
            </div>
            <div class="box-body">
                {!! Form::open(['action' => ['InterventionsController@update', $intervention->id], 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('address', 'Adresa intervencije(automatska ispuna)')}}
                    <div id="locationField">
                        {{Form::text('address', $intervention->address, ['class' => 'form-control','id' => 'autocomplete','onfocus' =>'geolocate()','autocomplete' => 'off', 'placeholder' => 'Započnite pisanje adrese'])}}

                    </div>

                </div>
                <div class="form-group">
                    {{Form::label('description', 'Opis intervencije')}}
                    {{Form::textarea('description', $intervention->description, ['class' => 'form-control', 'placeholder' => 'Opis intervencije'])}}
                </div>
                <div class="form-group">
                    {{Form::label('type', 'Vrsta intervencije')}}
                    {{Form::select('type',[$intervention->type => $intervention->type, 'Vrsta intervencije' =>
                    ['Požarna intervencija' => 'Požarna intervencija','Tehnička intervencija' => 'Tehnička intervencija','Usluga' => 'Usluga']],null,['class' => 'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Uredi', ['class' => 'btn btn-primary'])}}
                </div>

    {!! Form::close() !!}

@endsection