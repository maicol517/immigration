@extends('layouts.layout')
@section('title', 'Tax')
@section('breadcrumb')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Formulario Tax 2023</h2>
                <ol>
                    <li><a href="{{ route('home') }}">Inicio</a></li>
                    <li>Formulario Tax 2023</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->
@endsection

@section('content')
    <section id="contact" class="contact">
        <div class="container">

            <div class="row justify-content-center" data-aos="fade-up">

                <div class="col-lg-10">
                    <!-- form start -->
                    <div class="info-wrap">
                        <form action="{{ route('tax.store') }}" method="POST">
                            @csrf
                            <div class="card-body  card-outline card-primary">

                                <div class="form-row">                        
                                <div class="form-group col-md-6">
                                    <label>Full Name / Nombre Completo</label>
                                    <input type="text" class="form-control" id="" name="name" required>
                                    @error('name')
                                        <span style="color: red">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Spouse's Full Name / Nombre completo del Conyugue</label>
                                    <input type="text" class="form-control" id="" name="name">
                                    @error('name')
                                        <span style="color: red">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Addres / Direccion</label>
                                    <input type="text" class="form-control" id="" name="name">
                                    @error('name')
                                        <span style="color: red">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Phone / Telefono</label>
                                    <input type="text" class="form-control" id="" name="name">
                                    @error('name')
                                        <span style="color: red">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Correo Electronico</label>
                                    <input type="text" class="form-control" id="" name="name">
                                    @error('name')
                                        <span style="color: red">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Filing Status / Estado Civil de Presentacion</label>
                                    <input type="text" class="form-control" id="" name="name">
                                    @error('name')
                                        <span style="color: red">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Date of Birth / Fecha de Nacimiento</label>
                                    <input type="text" class="form-control" id="" name="name">
                                    @error('name')
                                        <span style="color: red">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Spouse's Date of Birth / Fecha de Nacimiento del Conyugue</label>
                                    <input type="text" class="form-control" id="" name="name">
                                    @error('name')
                                        <span style="color: red">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Primera vez declarando impuestos?</label>
                                    <input type="text" class="form-control" id="" name="name">
                                    @error('name')
                                        <span style="color: red">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Seguro por Obama Care?</label>
                                    <input type="text" class="form-control" id="" name="name">
                                    @error('name')
                                        <span style="color: red">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Primera vez declarando impuestos?</label>
                                    <input type="text" class="form-control" id="" name="name">
                                    @error('name')
                                        <span style="color: red">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                
                                <br>
                                </div>  
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary ">Save</button>
                                </div>
                            </div>
                            <!-- /.card-body -->


                        </form>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row justify-content-center" data-aos="fade-up">

                <div class="col-lg-10">

                    <div class="info-wrap">
                        <div class="row">
                            <div class="col-lg-4 info">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>24215 Kuykendahl Rd<br>Tomball, TX 77375</p>
                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>lugosimmigration@gmail.com</p>
                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 (954) 708-9776</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

@endsection
