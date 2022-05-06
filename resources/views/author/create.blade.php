@extends('layouts.app', ['activePage' => 'author', 'titlePage' => __('Crear autor')])
@push('css')
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
@endpush
@push('buttons')
    <a class="btn btn-info mr-4" href="{{ route('author.index') }}">
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
                                            class="form-control-plaintext">
                                    </div>
                                </div>
                                <div class="mb-3 row ">
                                    <label for="fullName" class="col-sm-2 col-form-label">Nombres Completos</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="fullName" aria-describedby="fullName"
                                            name="fullName" autocomplete="off" placeholder="Autor"
                                            class="form-control-plaintext">
                                    </div>
                                </div>
                                <div class="mb-3 row ">
                                    <label for="n_boucher" class="col-sm-2 col-form-label">Nª Boucher</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="n_boucher" aria-describedby="n_boucher"
                                            name="n_boucher" autocomplete="off" placeholder="Nª Boucher"
                                            class="form-control-plaintext">
                                    </div>
                                </div>
                                <div class="mb-3 row ">
                                    <label for="amount_paid" class="col-sm-2 col-form-label">Monto Pagado</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="amount_paid" aria-describedby="amount_paid"
                                            name="amount_paid" autocomplete="off" placeholder="Monto Pagado"
                                            class="form-control-plaintext">
                                    </div>
                                </div>
                                <div class="mb-3 row ">
                                    <label for="program" class="col-sm-2 col-form-label">Programa</label>
                                    <div class="col-sm-10">

                                        <select class="form-select" aria-label="Default select example">
                                            <option value="Bachiller">Bachiller</option>
                                            <option value="Titulo">Titulo</option>
                                            <option value="Segunda Especialidad">Segunda Especialidad</option>
                                            <option value="Complementación Academica">Complementación Academica</option>
                                            <option value="Maestria">Maestria</option>
                                            <option value="Doctorado">Doctorado</option>
                                        </select>
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
