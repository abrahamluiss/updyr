@extends('layouts.app', ['activePage' => 'adviser', 'titlePage' => __('Crear Asesor')])
@push('css')
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
@endpush
@push('buttons')
    <a class="btn btn-info mr-4" href="{{ route('adviser.index') }}">
        <span>Atras</span>
        <div class="ripple-container"></div>
    </a>
@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">INGRESA LOS DATOS</h4>
                    <p class="card-category">Algunos campos seran obligatorios</p>
                </div>
                <div class="card-body">
                    <div id="typography">

                        <div class="row m-6 col-12">
                            <form action="{{ route('author.store') }}" method="POST">
                                @csrf
                                @method('POST')

                                <div class="mb-3 row ">
                                    <label for="dni" class="col-sm-2 col-form-label">DNI</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="dni" aria-describedby="dni"
                                            name="dni" autocomplete="off" placeholder="Titulo"
                                            class="form-control-plaintext" required>
                                    </div>
                                </div>
                                <div class="mb-3 row ">
                                    <label for="fullName" class="col-sm-2 col-form-label">Nombres Completos</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="fullName" aria-describedby="fullName"
                                            name="fullName" autocomplete="off" placeholder="Autor"
                                            class="form-control-plaintext" required>
                                    </div>
                                </div>
                                <div class="mb-3 row ">
                                    <label for="faculty" class="col-sm-2 col-form-label">Facultad</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="faculty" aria-describedby="faculty"
                                            name="faculty" autocomplete="off" placeholder="Facultad"
                                            class="form-control-plaintext" required>
                                    </div>
                                </div>
                                <div class="mb-3 row ">
                                    <label for="email" class="col-sm-2 col-form-label">Correo</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" aria-describedby="email"
                                            name="email" autocomplete="off" placeholder="Correo"
                                            class="form-control-plaintext">
                                    </div>
                                </div>
                                <div class="mb-3 row ">
                                    <label for="orcid" class="col-sm-2 col-form-label">orcid</label>
                                    <div class="col-sm-10">
                                        <input type="orcid" class="form-control" id="orcid" aria-describedby="orcid"
                                            name="orcid" autocomplete="off" placeholder="Correo"
                                            class="form-control-plaintext">
                                    </div>
                                </div>


                                <br>
                                <button type="submit" class="btn btn-primary">Crear Autor</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
    </script>
@endpush
