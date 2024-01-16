@extends('layouts.app')
@section('content')
    <section class="container-fluid mt-5">

        <h1 class="text-center">Lista dei Progetti</h1>
        <div class="row">
            @include('admin.partials.sidebar')
            <!-- navbar blu -->
            <div class="col-10">

                <!--section categories  -->
                <div class="card">
                    <div class="card-header ">
                        Tutti i progetti
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nome Progetto</th>
                                <th>Modifica</th>
                                <th>Cancella</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>
                                        <a href="{{ route('admin.categories.show', $category->slug) }}"
                                            class="text-decoration-none">
                                            <p class="text-uppercase text-black ">titolo progetto :
                                                {{ $category->name }}</p>
                                        </a>
                                    <td>
                                        <a href="{{ route('admin.categories.edit', $category->slug) }}"
                                            class="btn btn-success"><i class="fa-solid fa-pencil"></i></a>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.categories.destroy', $category->slug) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="cancel-button btn btn-danger"
                                                data-item-title="{{ $category->title }}"><i
                                                    class="fa-solid fa-trash-can"></i></button>
                                        </form>
                                    </td>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </section>
    @include('admin.partials.modal_delete')
@endsection
