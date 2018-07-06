@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Dodaj intervenciju</h3>
            </div>
            <div class="box-body">
                {!! Form::open(['action' => 'InterventionsController@store', 'method' => 'POST']) !!}
                    <div class="form-group">
                    {{Form::label('address', 'Adresa intervencije(automatska ispuna)')}}
                    <div id="locationField">
                        {{Form::text('address', '', ['class' => 'form-control','id' => 'autocomplete','autocomplete' => 'off', 'placeholder' => 'Započnite pisanje adrese'])}}
                        {{Form::hidden('lat', '',['id' => 'lat'])}}
                        {{Form::hidden('lng', '',['id' => 'lng'])}}
                    </div>

                </div>
                    <div class="form-group">
                        {{Form::label('description', 'Opis intervencije')}}
                        {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Opis intervencije'])}}
                    </div>
                <div class="form-group">
                    {{Form::label('type', 'Vrsta intervencije')}}
                    {{Form::select('type',['Vrsta intervencije' =>
                    ['Požarna intervencija' => 'Požarna intervencija','Tehnička intervencija' => 'Tehnička intervencija','Usluga' => 'Usluga']],null,['class' => 'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::submit('Dodaj', ['class' => 'btn btn-primary'])}}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </section>

@endsection