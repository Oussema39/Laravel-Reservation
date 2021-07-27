@extends('layouts.dash-layout')
@section('title', 'Creation evenement')

@section('content')
<div class="container p-4">
    <form method="POST" action="/evenement" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right"></label>

            <div class="col-md-6">
                <h1>Ajout d'événement</h1>
            </div>

        </div>
        <div class="form-group row">
            <label for="nom" class="col-md-4 col-form-label text-md-right">Nom de l'événement</label>

            <div class="col-md-6">
                <input placeholder="E.G Hackathon" id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" />

                @error('nom')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="photo" class="col-md-4 col-form-label text-md-right">Photo</label>

            <div class="col-md-6">
                <input id="photo" accept="image/png, image/gif, image/jpeg" type="file" class="@error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" />

                @error('photo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="date" class="col-md-4 col-form-label text-md-right">Date événement</label>

            <div class="col-md-6">
                <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" />

                @error('date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="heure" class="col-md-4 col-form-label text-md-right">Heure de l'événement</label>

            <div class="col-md-6">
                <input id="heure" 
                    type="time" 
                    class="form-control @error('heure') is-invalid @enderror"
                    name="heure" value="{{ old('heure') }}"
                />
                @error('heure')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>
            <div class="col-md-6">
                <textarea 
                    id="description" 
                    rows="3" 
                    class="form-control @error('description') is-invalid @enderror" 
                    name="description" value="{{ old('description') }}" 
                    ></textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right"></label>

            <div class="col-md-6">
                <input id="description" type="submit" class="btn btn-primary" value="Soumettre">
            </div>
        </div>
    </form>
</div>


@endsection
