@extends('layouts.app', ['activePage' => 'adviser', 'titlePage' => __('Asesores')])
@push('buttons')
    <a class="btn btn-danger mr-4"
        href="{{ route('adviser.create') }}">
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
                            <h4 class="card-title ">Lista De Asesore</h4>
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
                                            Facultad
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            Orcid
                                        </th>
                                    </thead>
                                    <tbody>
                                        @foreach ($advisers as $adviser)
                                        <tr>
                                            <td>
                                                {{ $adviser->id }}
                                            </td>
                                            <td>
                                                {{ $adviser->full_name }}
                                            </td>
                                            <td>
                                                {{ $adviser->faculty }}
                                            </td>
                                            <td>
                                                {{ $adviser->email }}
                                            </td>
                                            <td>
                                                {{ $adviser->orcid }}
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
