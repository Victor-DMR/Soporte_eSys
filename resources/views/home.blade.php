@extends('layouts.app')

@section('content')
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.bootstrap5.css">
@endsection
<div class="container card card-body">
    <table id="example" class="table table-striped nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Nit</th>
                <th>Cliente</th>
                <th>Descripción</th>
                <th>AnyDesk</th>
                <th>Tecnico</th>
                <th>Observación</th>
                <th>Fecha y hora</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1192779655</td>
                <td {{-- style="width: 100px;  white-space: pre-wrap;" --}}>esys soluciones tecnologicas</td>
                <td {{-- style="width: 200px;  white-space: pre-wrap;" --}}>tienen problemas con la actualizacion tienen problemas con la actualizacion </td>
                <td>12345678</td>
                <td>Victor</td>
                <td {{-- style="width: 200px;  white-space: pre-wrap;" --}}>El soporte se realizo con eficacia no tubimos problemas al momento de realizarlo</td>
                <td><span>20-04-2024</span> <br> <span>01:08:36</span></td>
                <td>victor</td>
                <td class="{{-- d-flex gap-1 border-0 --}}">
                    <button class="btn btn-danger btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path
                                d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                        </svg>
                    </button>
                    @if (auth()->user()->email == 'solucionesesys@gmail.com')
                        <button class="btn btn-success btn-sm" type="button" data-bs-toggle="modal"
                            data-bs-target="#Editrmodal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pen-fill" viewBox="0 0 16 16">
                                <path
                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001" />
                            </svg>
                        </button>
                    @else
                        <button class="btn btn-success btn-sm" type="button" data-bs-toggle="modal"
                            data-bs-target="#Estadomodal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pen-fill" viewBox="0 0 16 16">
                                <path
                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001" />
                            </svg>
                        </button>
                    @endif
                </td>
            </tr>
            <tr>
                <td>1192779655</td>
                <td style="width: 200px;  white-space: pre-wrap;">esys soluciones tecnologicas</td>
                <td style="width: 200px;  white-space: pre-wrap;">tienen problemas con la actualizacion tienen problemas con la actualizacion </td>
                <td>12345678</td>
                <td>Victor</td>
                <td style="width: 200px;  white-space: pre-wrap;">El soporte se realizo con eficacia no tubimos problemas al momento de realizarlo</td>
                <td><span>20-04-2024</span> <br> <span>01:08:36</span></td>
                <td>victor</td>
                <td class="{{-- d-flex gap-1 border-0 --}}">
                    <button class="btn btn-danger btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path
                                d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                        </svg>
                    </button>
                    @if (auth()->user()->email == 'solucionesesys@gmail.com')
                        <button class="btn btn-success btn-sm" type="button" data-bs-toggle="modal"
                            data-bs-target="#Editrmodal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pen-fill" viewBox="0 0 16 16">
                                <path
                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001" />
                            </svg>
                        </button>
                    @else
                        <button class="btn btn-success btn-sm" type="button" data-bs-toggle="modal"
                            data-bs-target="#Estadomodal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pen-fill" viewBox="0 0 16 16">
                                <path
                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001" />
                            </svg>
                        </button>
                    @endif
                </td>
            </tr>
            <tr>
                <td>1192779655</td>
                <td style="width: 200px;  white-space: pre-wrap;">esys soluciones tecnologicas</td>
                <td style="width: 200px;  white-space: pre-wrap;">tienen problemas con la actualizacion tienen problemas con la actualizacion </td>
                <td>12345678</td>
                <td>Victor</td>
                <td style="width: 200px;  white-space: pre-wrap;">El soporte se realizo con eficacia no tubimos problemas al momento de realizarlo</td>
                <td><span>20-04-2024</span> <br> <span>01:08:36</span></td>
                <td>victor</td>
                <td class="{{-- d-flex gap-1 border-0 --}}">
                    <button class="btn btn-danger btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path
                                d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                        </svg>
                    </button>
                    @if (auth()->user()->email == 'solucionesesys@gmail.com')
                        <button class="btn btn-success btn-sm" type="button" data-bs-toggle="modal"
                            data-bs-target="#Editrmodal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pen-fill" viewBox="0 0 16 16">
                                <path
                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001" />
                            </svg>
                        </button>
                    @else
                        <button class="btn btn-success btn-sm" type="button" data-bs-toggle="modal"
                            data-bs-target="#Estadomodal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pen-fill" viewBox="0 0 16 16">
                                <path
                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001" />
                            </svg>
                        </button>
                    @endif
                </td>
            </tr>
            <tr>
                <td>1192779655</td>
                <td style="width: 200px;  white-space: pre-wrap;">esys soluciones tecnologicas</td>
                <td style="width: 200px;  white-space: pre-wrap;">tienen problemas con la actualizacion tienen problemas con la actualizacion </td>
                <td>12345678</td>
                <td>Victor</td>
                <td style="width: 200px;  white-space: pre-wrap;">El soporte se realizo con eficacia no tubimos problemas al momento de realizarlo</td>
                <td><span>20-04-2024</span> <br> <span>01:08:36</span></td>
                <td>victor</td>
                <td class="{{-- d-flex gap-1 border-0 --}}">
                    <button class="btn btn-danger btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path
                                d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                        </svg>
                    </button>
                    @if (auth()->user()->email == 'solucionesesys@gmail.com')
                        <button class="btn btn-success btn-sm" type="button" data-bs-toggle="modal"
                            data-bs-target="#Editrmodal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pen-fill" viewBox="0 0 16 16">
                                <path
                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001" />
                            </svg>
                        </button>
                    @else
                        <button class="btn btn-success btn-sm" type="button" data-bs-toggle="modal"
                            data-bs-target="#Estadomodal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pen-fill" viewBox="0 0 16 16">
                                <path
                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001" />
                            </svg>
                        </button>
                    @endif
                </td>
            </tr>
            <tr>
                <td>1192779655</td>
                <td style="width: 200px;  white-space: pre-wrap;">esys soluciones tecnologicas</td>
                <td style="width: 200px;  white-space: pre-wrap;">tienen problemas con la actualizacion tienen problemas con la actualizacion </td>
                <td>12345678</td>
                <td>Victor</td>
                <td style="width: 200px;  white-space: pre-wrap;">El soporte se realizo con eficacia no tubimos problemas al momento de realizarlo</td>
                <td><span>20-04-2024</span> <br> <span>01:08:36</span></td>
                <td>victor</td>
                <td class="{{-- d-flex gap-1 border-0 --}}">
                    <button class="btn btn-danger btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path
                                d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                        </svg>
                    </button>
                    @if (auth()->user()->email == 'solucionesesys@gmail.com')
                        <button class="btn btn-success btn-sm" type="button" data-bs-toggle="modal"
                            data-bs-target="#Editrmodal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pen-fill" viewBox="0 0 16 16">
                                <path
                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001" />
                            </svg>
                        </button>
                    @else
                        <button class="btn btn-success btn-sm" type="button" data-bs-toggle="modal"
                            data-bs-target="#Estadomodal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pen-fill" viewBox="0 0 16 16">
                                <path
                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001" />
                            </svg>
                        </button>
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
</div>
{{-- Modals --}}
@include('modal.agregar')
@include('modal.estado')
@include('modal.edit')

@vite(['resources/js/table/home_table.js']);
@section('scipt')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/responsive.dataTables.js"></script>
@endsection
@endsection
