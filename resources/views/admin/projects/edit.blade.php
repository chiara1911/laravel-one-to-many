@extends('layouts.app')

@section('title', $project['title'])

@section('content')
    <section class="container-fluid mt-5">
        <div class="row">
            @include('admin.partials.sidebar')
            <div class="col-10">
                <form action="{{ route('admin.projects.store', $project->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Aggiungi titolo</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror

             "
                            id="title" name="title" value="{{ old('title', $project->title) }}">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione progetto</label>
                        <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                            name="description">{{ old('description', $project->description) }}
              </textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 ">
                        <label for="link" class="form-label">Inserisci l'url del tuo progetto di GIT HUB</label>
                        <input type="text" class="form-control @error('link') is-invalid @enderror" id="link"
                            name="link" value="{{ old('link', $project->link) }}">
                        @error('link')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex">


                        <div class="me-3">
                            <img id="uploadPreview" width="100" src="https://via.placeholder.com/300x200">
                        </div>
                        <div class="mb-3 ">
                            <label for="image" class="form-label">Inserisci l'immagine del progetto</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                                name="image" value="{{ old('image', $project->image) }}">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>
    </section>
@endsection
