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
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" id="" name="name">
                                    @error('name')
                                        <span style="color: red">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <br>
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
