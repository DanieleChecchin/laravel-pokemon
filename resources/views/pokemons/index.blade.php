@extends('layouts.app')

@section('page-title', 'Pokemon Index')

@section('main-content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold text-center fst-italic my-5">
                    POKEMON INDEX
                </h1>
            </div>
            <div class="col-12">
                <table class="table-dark table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Tipo</th>
                            <th>Specie</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pokemons as $pokemon)
                            <tr>
                                <td> {{ $pokemon->id }} </td>
                                <td> {{ $pokemon->nome }} </td>
                                <td> {{ $pokemon->tipo }} </td>
                                <td> {{ $pokemon->specie }} </td>
                            </tr>
                        @empty
                            <tr>
                                <td>
                                    Nessun pokemon disponbile
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
