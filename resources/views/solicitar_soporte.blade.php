@extends('layouts.app')
@vite(['resources/css/auth.css'])
@section('content')
<section>
    <article>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-8 col-lg-6">
                    <div class="card card-body shadow-lg border-0">
                        <h2 class="text-center">Solicite su soporte</h2>
                        <h5 class="text-center">Si usted es cliente de la empresa eSys soluciones tecnológicas solicite su soporte</h5>
                        <div class="conten_logo mb-5 d-flex justify-content-center">
                            <img class="" src="{{ asset('img/logo.webp') }}" alt="">
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" id="Nit" placeholder="Su nit">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="Cliente" placeholder="Su nombre">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="AnyDesk" placeholder="Su AnyDesk">
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" id="Telefono" placeholder="Su telefono">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="file" id="archivo" name="archivo">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="Descripcion" placeholder="Descripción" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>
@endsection