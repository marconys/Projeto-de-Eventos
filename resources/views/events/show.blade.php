@extends('layouts.main')

@section('title', $event->title)

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/events/{{$event->image}}" class="img-fluid" alt="{{$event->title}}">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{$event->title}}</h1>
            <p class="event-city"><i class="bi bi-geo-alt-fill text-danger"></i>{{$event->city}}</p>
            <p class="events-participantes"><i class="bi bi-people-fill text-primary"></i> X Participantes</p>
            <p class="event-owner"><i class="bi bi-star-fill text-warning"></i> Dono do Evento</p>
            <a href="#" class="btn btn-primary" id="event-submit">Confirmar Presença</a>
        </div>
        <div class="col-md-12" id="description-container">
            <h3>Sobre o Evento:</h3>
            <p class="event-description">{{$event->description}}</p>
        </div>
    </div>
</div>

@endsection
