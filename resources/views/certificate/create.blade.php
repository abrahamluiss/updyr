@extends('layouts.app', ['activePage' => 'certificate', 'titlePage' => __('Crea certificado')])
@push('css')
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
@endpush
@push('buttons')
    <a class="btn btn-primary mr-4" href="{{ route('certificate.create') }}">
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
                            <form action="{{ route('certificate.store') }}" method="POST">
                                @csrf
                                @method('POST')

                                <div class="mb-3 row ">
                                    <label for="title" class="col-sm-2 col-form-label">Titulo</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" aria-describedby="title"
                                            name="title" autocomplete="off" placeholder="Titulo"
                                            class="form-control-plaintext">
                                    </div>
                                </div>
                                <div class="mb-3 row ">
                                    <label for="author" class="col-sm-2 col-form-label">Autor</label>
                                    <div class="col-sm-10">
                                        <input list="author" name="author" class="form-control selectpicker"
                                            placeholder="Dni o nombre del autor" autocomplete="off" required>
                                        <datalist id="author">
                                            @foreach ($authors as $author)
                                                <option value="{{ $author->id }}-{{ $author->full_name }}">
                                                    {{ $author->dni }}-{{ $author->full_name }}
                                                </option>
                                            @endforeach
                                        </datalist>
                                    </div>
                                </div>
                                <div class="mb-3 row ">
                                    <label for="adviser" class="col-sm-2 col-form-label">Asesor</label>
                                    <div class="col-sm-10">
                                        <input list="adviser" name="adviser" class="form-control selectpicker"
                                        placeholder="Dni o nombre del asesor" autocomplete="off" required>
                                    <datalist id="adviser">
                                        @foreach ($advisers as $adviser)
                                            <option value="{{ $adviser->id }}-{{ $adviser->full_name }}">
                                                {{ $adviser->dni }}-{{ $adviser->full_name }}
                                            </option>
                                        @endforeach
                                    </datalist>
                                    </div>
                                </div>
                                <div class="mb-3 row ">
                                    <label for="program" class="col-sm-2 col-form-label">Programa</label>
                                    <div class="col-sm-10">

                                        <select class="form-select" name="program" aria-label="Default select example">
                                            <option value="Bachiller">Bachiller</option>
                                            <option value="Titulo">Titulo</option>
                                            <option value="Segunda Especialidad">Segunda Especialidad</option>
                                            <option value="Complementación Academica">Complementación Academica</option>
                                            <option value="Maestria">Maestria</option>
                                            <option value="Doctorado">Doctorado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row ">
                                    <label for="faculty" class="col-sm-2 col-form-label">Facultad</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="faculty" aria-describedby="faculty"
                                            name="faculty" autocomplete="off" placeholder="Facultad"
                                            class="form-control-plaintext">
                                    </div>
                                </div>
                                <div class="mb-3 row ">
                                    <label for="originality" class="col-sm-2 col-form-label">Originalidad</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="originality"
                                            aria-describedby="originality" name="originality" autocomplete="off"
                                            placeholder="Originalidad" class="form-control-plaintext">
                                    </div>
                                </div>
                                <div class="mb-3 row ">
                                    <label for="similitude" class="col-sm-2 col-form-label">Similitud</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="similitude"
                                            aria-describedby="similitude" name="similitude" autocomplete="off"
                                            placeholder="Similitud" class="form-control-plaintext">
                                    </div>
                                </div>
                                <div class="mb-3 row ">
                                    <label for="date" class="col-sm-2 col-form-label">Fecha</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="date" aria-describedby="date"
                                            name="date" autocomplete="off" placeholder="Similitud"
                                            class="form-control-plaintext">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="observation">Observación</label>
                                    <textarea class="form-control" name="observation" type="text" id="observation"></textarea>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Enviar</button>

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
