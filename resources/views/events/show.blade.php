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
            <p class="events-participantes"><i class="bi bi-people-fill text-primary"></i> {{ count($event->users) }} Participantes</p>
            <p class="event-owner"><i class="bi bi-star-fill text-warning"></i>{{$eventOwner['name']}}</p>
            <form action="/events/join/{{ $event->id }}" method="POST">
                @csrf
                <a href="/events/join/{{ $event->id }}"
                  class="btn btn-primary"
                  id="event-submit"
                  onclick="event.preventDefault();
                  this.closest('form').submit();">
                  Confirmar Presença
                </a>
              </form>
            <h3>O Evento Conta com:</h3>
            <ul id="items-list">
                @foreach ($event->items as $item)
                    <li><i class="bi bi-play-fill text-success"><span>{{$item}}</span></i></li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-12" id="description-container">
            <h3>Sobre o Evento:</h3>
            <p class="event-description">{{$event->description}}</p>
        </div>
    </div>
</div>

@endsection
