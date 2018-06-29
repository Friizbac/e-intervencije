@extends('layouts.app')
                    @section('content')
                        <section class="content">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Intervencije</h3>
                                </div>
                                <div class="box-body">
                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Opis</th>
                                            <th>Vrsta</th>
                                            <th>Datum</th>
                                            <th>Adresa</th>
                                            <th>Akcije</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($interventions) > 0)
                                            @foreach($interventions as $intervention)
                                                <tr>
                                                    <td><a href="/interventions/{{$intervention->id}}">{{$intervention->id}}</a></td>
                                                    <td>{{$intervention->description}}</td>
                                                    <td>{{$intervention->type}}</td>
                                                    <td>{{$intervention->created_at}}</td>
                                                    <td>{{$intervention->address}}</td>
                                                    <td>{!! Form::open(['action' => ['InterventionsController@destroy', $intervention->id], 'method' => 'POST']) !!}
                                                            {{Form::hidden('_method', 'DELETE')}}
                                                        {{Form::button('<i class="fas fa-trash-alt"></i>',['type' => 'submit', 'class' => 'btn btn-sm btn-danger','title' => 'Obriši','onclick' => 'return confirm("Jeste li sigurni da želite obrisati?");'])}}
                                                        {!! Form::close() !!}

                                                        <a href="interventions/{{$intervention->id}}/edit" class="btn btn-sm btn-primary" title="Uredi"><i class="fas fa-pen-square"></i></a>
                                                    </td>
                                                </tr>

                                            @endforeach
                                        @else
                                            <p>Nema intervencija</p>
    @endif
@endsection