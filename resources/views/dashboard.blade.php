@extends('layouts.dash-layout')

@section('title', 'Dashboard')
@section('content')

<div class="container p-4">
    <h1>Liste d'événements</h1>
    <br>
    <div class="evenements-container d-flex flex-wrap" style="gap: 1.5rem">
        @foreach ($evenements as $evenement)
            <div class="card mt-2" style="width: 18rem;">
                <img class="card-img-top"
                    src={{ 'storage/imgs/'.$evenement['photo'] }} 
                    alt="evenement photo"
                    style="max-height : 12rem;object-fit:cover"
                >
                <div class="card-body">
                <h5 class="card-title mb-2 font-weight-bold">{{ $evenement['nom']}}</h5>
                <p class="card-text text-muted text-truncate">{{ $evenement['description'] }}</p>
                <a href="#" class="btn btn-primary">Explorer plus</a>
                </div>
            </div>
        @endforeach
        
        @if (count($evenements) == 0)
            <h2>Pas d'événements pour le moment</h2>
        @endif

    </div>
</div>

@endsection
