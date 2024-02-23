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

                                    <div class="col-md-12">
                                        <label class="form-label col-form-label-sm" for="name" required>1. Nombre y
                                            Apellido del grupo familiar</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label col-form-label-sm" for="maritalStatus">2. Cua'l es su
                                            estado civil?</label>
                                        <select class="form-select">
                                            <option>Casado</option>
                                        </select>
                                    </div>


                                    <div class="col-md-12">
                                        <label class="form-label col-form-label-sm" for="children">3. Cuantos hijos
                                            tiene?</label>
                                        <select class="form-select">
                                            <option>Ninguno</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label col-form-label-sm" for="city">4. Es su primera vez
                                            declarando impuestos? si la respuesta en NO indique los 'ultimos tres
                                            a'nos.</label>
                                        <input type="text" class="form-control" id="city">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label col-form-label-sm" for="city">5. Ocupaci'on en la forma
                                            W-2.</label>
                                        <input type="text" class="form-control" id="city">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label col-form-label-sm" for="city">6. Estubo asegurado por
                                            Obamacare en el 2023.</label>
                                        <select class="form-select">
                                            <option>No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label col-form-label-sm" for="email">7. Correo
                                            Electr'o'nico</label>
                                        <input type="text" class="form-control" id="email">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label col-form-label-sm" for="phoneOperator">8. Operadora de su
                                            l'i'nea celular</label>
                                        <select class="form-select">
                                            <option>T-MOBILE</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label col-form-label-sm" for="phone">9. Nu'mero
                                            Telefoni'co</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-label col-form-label-sm" for="zip">10. Direci'on de
                                            Domicilio</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label col-form-label-sm" for="state">.</label>
                                        <select class="form-select">
                                            <option>State</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label col-form-label-sm" for="phone">11. Numero de cuenta
                                            bancaria</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label col-form-label-sm" for="phone">12. Numero de
                                            ruta</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="col-md-12">
                                        <label class="form-label col-form-label-sm" for="phone">14. Tipo de
                                            Cuenta</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label col-form-label-sm" for="phone">15. Usted aprueba recibir
                                            y firmar documentos a distancia?</label>
                                        <select class="form-select">
                                            <option>No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label col-form-label-sm" for="phone">16. Recibio o vendio e
                                            intercambio algun interes financiero en alguna moneda virtual o ventas de
                                            activos?</label>
                                        <select class="form-select">
                                            <option>No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label col-form-label-sm" for="phone">17. Quisiera que otra
                                            persona diferente a usted discutiera esta declaracion con el IRS?</label>
                                        <select class="form-select">
                                            <option>No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                      <label class="form-label col-form-label-sm" for="phone">18. Le gustaria recibir su reembolso en deposito o en cheque?</label>
                                      <select class="form-select">
                                        <option>No</option>
                                    </select>
                                    </div>
                                    <div class="col-md-12">
                                      <label class="form-label col-form-label-sm" for="phone">19. Estuvo mas de 6
                                          meses dentro de los estados unidos en el ano 2023?</label>
                                      <select class="form-select">
                                          <option>No</option>
                                      </select>
                                  </div>
                                  <div class="col-md-12">
                                    <label class="form-label col-form-label-sm" for="phone">20. Recibio alguna forma 1099 en el ano 2023? si su respuesta es SI debe enviar los soportes correspondientes a cada actividad que desempe'o</label>
                                    <select class="form-select">
                                        <option>No</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                  <label class="form-label col-form-label-sm" for="phone">21. Estudio en el ano 2023?</label>
                                  <select class="form-select">
                                      <option>No</option>
                                  </select>
                              </div>
                              <div class="col-md-12">
                                <label class="form-label col-form-label-sm" for="phone">22. Tiene la forma 1098T?</label>
                                <select class="form-select">
                                    <option>No</option>
                                </select>
                            </div>

                            <div class="col-md-12">
                              <label class="form-label col-form-label-sm" for="phone">23. Cuanto tiempo vivieron sus hijos con usted en el 2023?
                                  ruta</label>
                              <input type="text" class="form-control">
                          </div>
                          <div class="col-md-12">
                            <label class="form-label col-form-label-sm" for="phone">24. Puede alguna persona reclamarlo como depende?</label>
                            <select class="form-select">
                                <option>No</option>
                            </select>
                        </div>
                        
                        <div class="col-md-12">
                          <label class="form-label col-form-label-sm" for="vehicle">25. Cuantos Vehiculos
                              tienes?</label>
                          <select class="form-select">
                              <option>No</option>
                          </select>
                      </div>
                      <div class="col-md-12">
                        <label class="form-label col-form-label-sm" for="vehicleDescription">26. Marca,
                            Modelo, ano, Millas Inicio 2023, Millas Finalizo 2023</label>
                        <textarea class="form-control form-control-sm" id="your-message" name="your-message" rows="3"
                            placeholder="Ejemplo:
                   1) Toyota  ->  Yaris   ->  2009   ->   110124 Inicio  -> 117520 Finalizo
                   2) Toyota  ->  Corolla   ->  2020   ->   99154 Inicio  -> 107317 Finalizo"></textarea>
                    </div>

                    <div class="col-md-12">
                      <label class="form-label col-form-label-sm" for="millageControl">27. Lleva un control
                          de millas trabajadas?</label>
                      <select class="form-select">
                          <option>No</option>
                      </select>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label col-form-label-sm" for="phone">28. Cuando comenzo a
                        trabajar por cuenta propia</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="form-label col-form-label-sm" for="phone">29. hasta que usted trabajo?</label>
                  <input type="text" class="form-control">
              </div>
              <div class="col-md-12">
                <label class="form-label col-form-label-sm" for="phone">30. Cuanto gasto de
                    telefono en el 2023, este gasto aplica si trabajo por cuenta propia?</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-md-12">
              <label class="form-label col-form-label-sm" for="phone">31. Le han negado en algun
                  momento el credito por ingreso del trabajo?</label>
              <select class="form-select">
                  <option>No</option>
              </select>
          </div>
                                    <div class="col-md-12">
                                        <label class="form-label col-form-label-sm" for="phone">32. Le han negado en algun
                                            momento el credito por hijo?</label>
                                        <select class="form-select">
                                            <option>No</option>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary ">Enviar Formulario</button>
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
