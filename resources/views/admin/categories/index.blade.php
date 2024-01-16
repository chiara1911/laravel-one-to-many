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


                            @foreach ($categories as $category)
                                                                       <a href="{{ route('admin.categories.show', $category->slug) }}"
                                            class="text-decoration-none">
                                            <p class="text-uppercase text-black ">titolo progetto :
                                                {{ $category->name }}</p>
                                        </a>

                            @endforeach

                </div>
            </div>
    </section>
    @include('admin.partials.modal_delete')
@endsection
