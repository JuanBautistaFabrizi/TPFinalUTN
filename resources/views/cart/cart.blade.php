<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="assets/FAVICON-02.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <link  rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>Carrito</title>
</head>

<body>
    <!-- BARRA DE NAVEGACION-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <img src="https://cherny.com.ar/web/image/res.company/1/logo?unique=8b1eb8b" alt="logo de la empresa" class="navbar-brand" width="60px" height="60px">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="https://localhost/TP-UTN/tiendaDeRopaUTN/public/tienda">Inicio</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="https://localhost/TP-UTN/tiendaDeRopaUTN/public/contact">Contacto</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Comprar</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="https://localhost/TP-UTN/tiendaDeRopaUTN/public/sale"><i class="bi bi-cash-coin"></i>
                                    Ofertas</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="https://localhost/TP-UTN/tiendaDeRopaUTN/public/catalogo"><i class="bi bi-bag"></i>
                                    Catalogo</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Cuenta</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="https://localhost/TP-UTN/tiendaDeRopaUTN/public/login"><i class="bi bi-person-circle"></i> Iniciar
                                    Sesion</a></li>
                            <li><a class="dropdown-item" href="https://localhost/TP-UTN/tiendaDeRopaUTN/public/register"><i class="bi bi-person-plus-fill"></i>
                                    Registrarse</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                        </ul>
                    </li>

                </ul>
                <button class="btn btn-outline-dark" id="goCart">
                    <i class="bi-cart-fill me-1"></i>
                    Cart
                    <span class="badge bg-dark text-white ms-1 rounded-pill" id="numberCart">0</span>
                </button>
            </div>
        </div>
    </nav>
    <!-- HEADER-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder"><i class="bi bi-credit-card"></i> Formulario Pago</h1>
                <p class="lead fw-normal text-white-50 mb-0">Completa el siguiente form para terminar tu compra</p>
            </div>
        </div>
    </header>
    <!-- SECTION-->
    <section class="py-5">
        <div class="row gx-5 justify-content-center mt-0">
            <div class="col-lg-8 col-xl-4">
                <form class="credit-card-div" id="formPay">
                    <h4 id="successfull"></h4>
              <div class="form-group mt-5">
                  <input type="text" class="form-control mt-3" id="fullName" placeholder="Nombre Completo">
              </div>

              <div class="form-group">
                  <input type="text" class="form-control mt-3" id="street" placeholder="Direccion">
              </div>

              <div class="form-group">
                  <input type="text" class="form-control mt-3" id="city" placeholder="Ciudad">
              </div>

              <!-- <div class="form-group">
                  <select class="form-control mt-3" id="state_id">
                      <option value="AK">Buenos Aires</option>
                      <option value="AK">La Plata</option>
                      <option value="AZ">Caballito</option>
                      <option value="AR">Merlo</option>
                      <option value="CA">Palermo</option>
                      <option value="CO">Avellaneda</option>
                      <option value="CT">Recoleta</option>
                  </select>
              </div> -->

              <div class="form-group">
                  <input type="text" class="form-control mt-3" id="zip" name="zip" placeholder="Codigo Postal">
              </div>

              <div class="row mt-2">
                  <div class="col-md-12">
                      <input type="text" class="form-control mt-3" placeholder="Numero Tarjeta" id="numberCard">
                  </div>
              </div>
              <div class="row ">
                  <div class="col-md-3 col-sm-3 col-xs-3 mt-2">
                      <span class="help-block text-muted small-font"> Exp Mes</span>
                      <input type="text" class="form-control" placeholder="MM" id="month">
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3 mt-2">
                      <span class="help-block text-muted small-font"> Exp Año</span>
                      <input type="text" class="form-control" placeholder="YY" id="year">
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3 mt-2">
                      <span class="help-block text-muted small-font"> CCV</span>
                      <input type="text" class="form-control" placeholder="CCV" id="cvv">
                  </div>
              </div>
              <div class="row ">
                  <div class="col-md-12 pad-adjust">

                      <input type="text" class="form-control mt-2" placeholder="Titular de la tarjeta" id="nameCard">
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12 pad-adjust">
                      <div class="checkbox">
                          <label>
                              <input type="checkbox"> Acepta terminos y condiciones
                          </label>
                      </div>
                  </div>
              </div>
              <div class="row ">
                  <p class="mt-3" id="err"></p>
                  <p id="cancel"></p>
                  <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                    <button type="button" class="btn btn-danger" onclick="cancel();">Cancelar</button>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust mb-5">
                      <button type="button" class="btn btn-success btn-block" id="pay" onclick="validateFormPay();">Pagar</button>
                  </div>
              </div>
          </div>
      </div>
    </form>
    </div>

    </section>
    <!-- FOOTER-->
    <footer class="text-center text-white bg-dark mt-5">
        <div class="text-center p-3 bg-dark">
            <div class="text-center p-3 bg-dark">
            </div>

            <section class="text-center mb-5">
                <a href="" class="btn btn-outline-dark text-white me-4"><i class="bi bi-instagram"></i>
                    Instagram</a>

                <a href="" class="btn btn-outline-dark text-white me-4"><i class="bi bi-facebook"></i> Facebook</a>

                <a href="" class="btn btn-outline-dark text-white me-4"><i class="bi bi-envelope-fill"></i>
                    Email</a>

                <a href="" class="btn btn-outline-dark text-white me-4"><i class="bi bi-whatsapp"></i> Whatsapp</a>
            </section>
        </div>
    </footer>

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/tienda.js"></script>
    <script src="js/app.js"></script>

</body>

</html>
