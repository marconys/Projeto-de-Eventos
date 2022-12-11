@extends('layouts.main')

@section('title', 'Aluno Events')

@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>

    <main class="container">
        <div id="events-container" class="container">
            <h2>Próximos eventos</h2>
            <p class="subtitle">Veja os eventos dos próximos dias</p>
            <div id="card-container" class="row">
                @foreach ($events as $event)
                    <div class="card col-sm-3">
                        <img src="/img/events/{{$event->image}}" alt="{{$event->image}}">

                        <div class="card-body">
                            <p class="card-date">15/10/2022</p>
                            <h5 class="card-title">{{ $event->title }}</h5>
                            <p class="card-participants">x Participantes</p>
                            <a href="/events/{{$event->id}}" class="btn btn-primary">Saber mais...</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
@endsection
