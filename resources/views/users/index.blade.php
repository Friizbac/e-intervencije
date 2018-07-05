@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Administratori</h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Email</th>
                        <th>Akcije</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($users) > 0)
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->surname}}</td>
                                <td>{{$user->email}}</td>
                                <td>{!! Form::open(['action' => ['UsersController@destroy', $user->id], 'method' => 'POST']) !!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::button('<i class="fas fa-trash-alt"></i>',['type' => 'submit', 'class' => 'btn btn-sm btn-danger','title' => 'Obriši','onclick' => 'return confirm("Jeste li sigurni da želite obrisati?");'])}}
                                    {!! Form::close() !!}

                                    <a href="users/{{$user->id}}/edit" class="btn btn-sm btn-primary" title="Uredi"><i class="fas fa-pen-square"></i></a>
                                </td>
                            </tr>

                        @endforeach
                    @else
                        <p>Nema obavijesti</p>
    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection