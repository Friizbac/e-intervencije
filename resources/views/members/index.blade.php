@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Operativni članovi</h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Broj mobitela</th>
                        <th>Akcije</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($members) > 0)
                        @foreach($members as $member)
                            <tr>
                                <td>{{$member->id}}</td>
                                <td>{{$member->name}}</td>
                                <td>{{$member->surname}}</td>
                                <td>{{$member->tel}}</td>
                                <td>{!! Form::open(['action' => ['MembersController@destroy', $member->id], 'method' => 'POST']) !!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::button('<i class="fas fa-trash-alt"></i>',['type' => 'submit', 'class' => 'btn btn-sm btn-danger','title' => 'Obriši','onclick' => 'return confirm("Jeste li sigurni da želite obrisati?");'])}}
                                    {!! Form::close() !!}

                                    <a href="members/{{$member->id}}/edit" class="btn btn-sm btn-primary" title="Uredi"><i class="fas fa-pen-square"></i></a>
                                </td>
                            </tr>

                        @endforeach
                    @else
                        <p>Nema operativnih članova</p>
    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection