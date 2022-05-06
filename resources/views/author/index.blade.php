@extends('layouts.app', ['activePage' => 'author', 'titlePage' => __('Autores')])
@push('buttons')
    <a class="btn btn-danger mr-4"
        href="{{ route('author.create') }}">
        <i class="material-icons">add</i>
        <span>Crear</span>
        <div class="ripple-container"></div>
    </a>
@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Lista De Autores</h4>

                            @if (session('notification'))
                            <div class="card-body">
                                <div class="alert alert-success" role="alert">
                                    {{ session('notification') }}
                                </div>
                            </div>
                                @endif
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            Nº
                                        </th>
                                        <th>
                                            Nombres
                                        </th>
                                        <th>
                                            Dni
                                        </th>
                                        <th>
                                            Nº Boucher
                                        </th>
                                        <th>
                                            Monto Pagado
                                        </th>
                                        <th>
                                            Programa
                                        </th>
                                    </thead>
                                    <tbody>
                                        @foreach ($authors as $author)
                                        <tr>
                                            <td>
                                                {{ $author->id }}
                                            </td>
                                            <td>
                                                {{ $author->full_name }}
                                            </td>
                                            <td>
                                                {{ $author->dni }}
                                            </td>
                                            <td>
                                                {{ $author->n_boucher }}
                                            </td>
                                            <td>
                                                {{ $author->amount_paid }}
                                            </td>
                                            <td>
                                                {{ $author->program }}
                                            </td>
                                            <td>
                                                <div class="dropdown">

                                                    <a href="#" type="button"
                                                        class="btn btn-primary">Editar</a>
                                                        <a href="#" type="button"
                                                        class="btn btn-danger">Eliminar</a>

                                                </div>

                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
