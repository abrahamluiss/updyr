@extends('layouts.app', ['activePage' => 'certificate', 'titlePage' => __('Certificados')])
@push('buttons')
    <a class="btn btn-danger mr-4" href="{{ route('certificate.create') }}">
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
                            <h4 class="card-title ">Certificados</h4>
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
                                            Title
                                        </th>
                                        <th>
                                            Autor
                                        </th>
                                        <th>
                                            Asesor
                                        </th>
                                        <th>
                                            Programa
                                        </th>
                                        <th>
                                            Facultad
                                        </th>
                                        <th>
                                            Originalidad
                                        </th>
                                        <th>
                                            Similitud
                                        </th>
                                        <th>
                                            Fecha
                                        </th>
                                        <th>
                                            Codigo
                                        </th>
                                        <th>
                                            Observación
                                        </th>
                                        <th>
                                            OPC
                                        </th>
                                    </thead>
                                    <tbody>
                                        @foreach ($certificates as $certificate)
                                            <tr>
                                                <td>
                                                    {{ $certificate->id }}
                                                </td>
                                                <td>
                                                    {{ $certificate->title }}
                                                </td>
                                                <td>
                                                    {{ $certificate->authors->full_name }}
                                                </td>
                                                <td>
                                                    {{ $certificate->advisers->full_name }}

                                                </td>
                                                <td>
                                                    {{ $certificate->title }}
                                                </td>
                                                <td>
                                                    {{ $certificate->faculty }}
                                                </td>
                                                <td>
                                                    {{ $certificate->originality }}
                                                </td>
                                                <td>
                                                    {{ $certificate->similitude }}
                                                </td>
                                                <td>
                                                    {{ $certificate->date }}
                                                </td>
                                                <td>
                                                    {{ str_pad($certificate->id,4,'0', STR_PAD_LEFT ) }}-{{ now()->year }}
                                                </td>
                                                <td>
                                                   @if ($certificate->observation == NULL)
                                                    -
                                                    @else
                                                    {{ $certificate->observation }}
                                                   @endif
                                                </td>
                                                <td>
                                                    <div class="dropdown">

                                                        <a href="#" type="button" class="btn btn-primary">Editar</a>
                                                        <a href="#" type="button" class="btn btn-danger">Eliminar</a>

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
