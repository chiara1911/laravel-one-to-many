@extends('layouts.app')

@section('title', 'Create')

@section('content')
    <section class="container-fluid mt-5">
        <div class="row">
            @include('admin.partials.sidebar')
            <div class="col-10">
        <form action="{{ route('admin.categories.store') }}" enctype="multipart/form-data" method="GET">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Aggiungi titolo</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror

             " id="name"
                    name="name">
                    @error('name')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
            </div>

            <div class="mb-3 ">
                <label for="link" class="form-label">Inserisci l'url del tuo progetto di GIT HUB</label>
                <input type="text" class="form-control @error('link') is-invalid @enderror" id="link"
                    name="link">
                    @error('link')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
            </div>
            <div class="d-flex">





        </div>
            <button type="submit" class="btn btn-primary">Invia</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>
    </div>
    </section>
@endsection
