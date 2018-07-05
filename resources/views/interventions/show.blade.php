@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Intervencija <b>#{{$intervention->id}}</b></h3>
            </div>
            <div class="box-body">
                <div class="well"><b>Opis intervencije:</b> {{$intervention->description}}</div>
                <div class="well"><b>Vrsta intervencije:</b> {{$intervention->type}}</div>
                <div class="well"><b>Vrijeme intervencije:</b> {{$intervention->created_at}}</div>
                <div class="well"><b>Adresa intervencije:</b><span id="address"> {{$intervention->address}}</span></div>
                <iframe id="map" width="100%" height="450" frameborder="0"></iframe>
                <a href="/interventions" class="btn btn-default">Idi natrag</a>
            </div>
        </div>
    </section>
@endsection