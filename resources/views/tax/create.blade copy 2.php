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
                <div class="container my-5">
                    <div class="row justify-content-center">
                      <div class="col-lg-10">
                        
                        <form action="{{ route('tax.store') }}" method="POST">
                            @csrf
                          <div class="row g-3">
                            <div class="form-group col-md-6">
                              <label for="your-name" class="form-label col-form-label">Nombre completo</label>
                              <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Full Name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="your-name" class="form-label col-form-label">Fecha de Nacimiento</label>
                                <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Full Name" required>
                              </div>
                            <div class="form-group col-md-6">
                              <label for="your-surname" class="form-label col-form-label">Nombre completo del conyugue</label>
                              <input type="text" class="form-control form-control-sm" id="conyugue" name="conyugue" placeholder="Spouse's Full Name" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="your-surname" class="form-label col-form-label">Fecha de Nacimiento del conyugue</label>
                                <input type="text" class="form-control form-control-sm" id="conyugue" name="conyugue" placeholder="Spouse's Full Name" >
                              </div>
                              <fieldset class="form-group">
                                <div class="row">
                                  <legend class="col-form-label  col-sm-3 pt-0">Estado civil de presentacion</legend>
                                  <div class="col-sm-9">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                      <label class="form-check-label form-control-sm" for="gridRadios1">
                                        Soltero
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                      <label class="form-check-label form-control-sm" for="gridRadios2">
                                        Casado presentando juntos
                                      </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                        <label class="form-check-label form-control-sm" for="gridRadios2">
                                            Casado presentando separados
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                        <label class="form-check-label form-control-sm" for="gridRadios2">
                                            Cabeza de familia
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                        <label class="form-check-label form-control-sm" for="gridRadios2">
                                            Viud@ calificado
                                        </label>
                                      </div>
                                  </div>
                                </div>
                              </fieldset>
                            <div class="form-groupcol-md-12">
                              <label for="your-subject" class="form-label col-form-label">Addres</label>
                              <input type="text" class="form-control form-control-sm" id="your-subject" name="your-subject" placeholder="subject">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="your-subject" class="form-label col-form-label">City</label>
                                <input type="text" class="form-control form-control-sm" id="city" name="city" placeholder="City">
                              </div>

                              <div class="form-group col-md-6">
                                <label for="inputState" class="form-label col-form-label">State</label>
                                <select id="inputState" class="form-control form-control-sm">
                                  <option selected>State...</option>
                                  <option>TX</option>
                                  <option>FL</option>
                                </select>
                              </div>
                              <fieldset class="form-group">
                                <div class="row">
                                  <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                                  <div class="col-sm-10">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                      <label class="form-check-label" for="gridRadios1">
                                        Si
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                      <label class="form-check-label" for="gridRadios2">
                                        No
                                      </label>
                                    </div>

                                  </div>
                                </div>
                              </fieldset>
                              <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                                <label for="email">Email</label>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="your-subject" class="form-label col-form-label">Telefono</label>
                                <input type="text" class="form-control form-control-sm" id="phone" name="phone" placeholder="Phone">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="your-subject" class="form-label col-form-label">Correo Electronico</label>
                                <input type="text" class="form-control form-control-sm" id="email" name="email" placeholder="Email">
                              </div>
                              <div class="form-group col-md-12">
                                <label for="your-subject" class="form-label col-form-label">Your Subject</label>
                                <input type="text" class="form-control form-control-sm" id="your-subject" name="your-subject" placeholder="subject">
                              </div>
                            <div class="form-group col-12">
                              <label for="your-message" class="form-label col-form-label">Your Message</label>
                              <textarea class="form-control form-control-sm" id="your-message" name="your-message" rows="3" placeholder="subject" ></textarea>
                            </div>
                            <div class="col-12">
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary ">Guardar</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

            </div>
            <br><br>


        <!-- Location -->    
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
    </section><!-- End Location -->

@endsection
