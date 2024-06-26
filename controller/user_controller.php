<?php
//importamos todos los modelos
require_once '../model/conexion.php';
require_once '../model/productos/mostrar/mostrar_producto_model.php';
require_once '../model/carrito/insertar_carrito.php';
require_once '../model/carrito/mostrarCarrito.php';
//usamos las clases y metodos que estan en los modelos
$mostrar_todos_los_productos = new mostrarProductos();
$carrito = new insertar_carrito;
$carritoMostrar = new mostrarCarrito;
//logica de programacion
//si se recibe la opcion 
if (isset($_GET['opc'])) {
  $opc = $_GET['opc'];
  echo 'opc: ' . $opc;
  switch ($opc) {
    case 'mostrar_todos_los_productos':
      echo '<div class="row">';
      //se declara la variable para poder recorrer lo que trae el metodo
      $mostrarTodos = $mostrar_todos_los_productos->mostrarTodosLosProductos();
      foreach ($mostrarTodos as $producto) {
        echo '
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="../assets/img/products/' . $producto['imagen'] . '" alt="' . $producto['producto'] . '" />
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a>
                                    </li>
                                    <li>
                                        <a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                    <a href="shop-single.php?id_producto=' . $producto['id_producto'] . '" class="h3 text-decoration-none">' . $producto['producto'] . '</a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li>Detalle</li>
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <p class="text-center mb-0">$' . $producto['precio'] . '</p>
                        </div>
                    </div>
                </div>';
      }
      echo '</div>';
      break;
      
    case 'barra_navegacion':
      echo '
    <nav class="navbar navbar-expand-lg navbar-light shadow">
      <div class="container d-flex justify-content-between align-items-center">
        <a
          class="navbar-brand text-success logo h1 align-self-center"
          href="index.html"
        >
          TUPPERWARE
        </a>

        <button
          class="navbar-toggler border-0"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#templatemo_main_nav"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div
          class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between"
          id="templatemo_main_nav"
        >
          <div class="flex-fill">
            <ul
              class="nav navbar-nav d-flex justify-content-between mx-lg-auto"
            >
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="subir_producto.html">Subir Producto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shop.html">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="car.html">Carrito</a>
              </li>
            </ul>
          </div>
          <div class="navbar align-self-center d-flex">
            <div
              class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3"
            >
              <div class="input-group">
                <input
                  type="text"
                  class="form-control"
                  id="inputMobileSearch"
                  placeholder="Search ..."
                />
                <div class="input-group-text">
                  <i class="fa fa-fw fa-search"></i>
                </div>
              </div>
            </div>
            <a
              class="nav-icon d-none d-lg-inline"
              href="#"
              data-bs-toggle="modal"
              data-bs-target="#templatemo_search"
            >
              <i class="fa fa-fw fa-search text-dark mr-2"></i>
            </a>
            <a class="nav-icon position-relative text-decoration-none" href="#">
              <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
              <span
                class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"
                >7</span
              >
            </a>
            <a class="nav-icon position-relative text-decoration-none" href="#">
              <i class="fa fa-fw fa-user text-dark mr-3"></i>
              <span
                class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"
                >+99</span
              >
            </a>
          </div>
        </div>
      </div>
    </nav>
            ';
      break;
    case 'masInformacion':
      $id_producto = $_GET['id_producto'];
      if (isset($id_producto)) {
        $mostrar_producto_por_id = $mostrar_todos_los_productos->mostrarProductoid($id_producto);
        echo 'id_producto: ' . $id_producto;
        echo ' 
                 <section class="bg-light">
                 ';
        foreach ($mostrar_producto_por_id as $producto) {
          echo '
    <div class="container pb-5">
      <div class="row">
        <div class="col-lg-5 mt-5">
          <div class="card mb-3">
            <img class="card-img img-fluid" src="../assets/img/products/' . $producto['imagen'] . '" alt="Card image cap" id="product-detail" />
          </div>
          <div class="row">
            <!--Start Controls-->
            <div class="col-1 align-self-center">
              <a href="#multi-item-example" role="button" data-bs-slide="prev">
                <i class="text-dark fas fa-chevron-left"></i>
                <span class="sr-only">Previous</span>
              </a>
            </div>
            <!--End Controls-->
            <!--Start Carousel Wrapper-->
            <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
              <!--Start Slides-->
              <div class="carousel-inner product-links-wap" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-4">
                      <a href="#">
                        <img class="card-img img-fluid" src="../assets/img/products/' . $producto['imagen2'] . '" alt="Product Image 1" />
                      </a>
                    </div>
                    <div class="col-4">
                      <a href="#">
                        <img class="card-img img-fluid" src="../assets/img/products/' . $producto['imagen3'] . '" alt="Product Image 2" />
                      </a>
                    </div>
                  </div>
                </div>
                <!--/.First slide-->
              </div>
              <!--End Slides-->
            </div>
            <!--End Carousel Wrapper-->


            <!--Start Controls-->
            <div class="col-1 align-self-center">
              <a href="#multi-item-example" role="button" data-bs-slide="next">
                <i class="text-dark fas fa-chevron-right"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <!--End Controls-->
          </div>
        </div>
        <!-- col end -->
        <div class="col-lg-7 mt-5">
          <div class="card">
            <div class="card-body">
              <h1 class="h2">' . $producto['producto'] . '</h1>
              <p class="h3 py-2">$' . $producto['precio'] . '</p>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <h6>Categoria:</h6>
                </li>
                <li class="list-inline-item">
                  <p class="text-muted"><strong>' . $producto['categoria'] . '</strong></p>
                </li>
              </ul>
                  <ul class="list-inline">
                <li class="list-inline-item">
                  <h6>Almacen:</h6>
                </li>
                <li class="list-inline-item">
                  <p class="text-muted"><strong>' . $producto['almacen'] . '</strong></p>
                </li>
              </ul>

              <h6>Description:</h6>
              <p>
               ' . $producto['descripcion'] . '
              </p>
            <div class="card__counter">
            <button class="card__btn" onclick="disminuirContador(' . $producto['id_producto'] . ')" >-</button>
            <div class="card__counter-score" id="contador-' . $producto['id_producto'] . '">1</div>
            <button class="card__btn card__btn-plus" onclick="aumentarContador(' . $producto['id_producto'] . ')">+</button>
            </div>
             <input type="button" class="btn btn-success btn-lg" value="AGREGAR" onclick="actualizarCarrito(' . $producto['id_producto'] . ')">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>';
        }
      } else {
        echo "al parecer no esta llegando el ID";
      }
      break;
    case "agregarACarrito":
      $id_producto = $_GET['id_producto'];
      $contador = $_GET['contador'];
      echo 'el id del porducto= ' . $id_producto, " contadro: " . $contador;
      // $id_usuario = $_SESSION['id_usuario'];
      $id_usuario = 1;
      $carrito->agregarCarrito($id_usuario, $id_producto, $contador);
      break;

    case "mostrar_carrito":
      // $id_usuario = $_SESSION['id_usuario'];
      $id_usuario = 1;
      $informacionCarrito = $carritoMostrar->obtenerCarrito($id_usuario);
      echo '
      <div class="column-labels">
        <label class="product-image">Imagen</label>
        <label class="product-details">Producto</label>
        <label class="product-price">Precio</label>
        <label class="product-quantity">Cantidad</label>
        <label class="product-removal">Acciones</label>
        <label class="product-line-price">Total</label>
      </div>
      ';
      foreach ($informacionCarrito as $producto) {
        echo '
      <div class="product">
        <div class="product-image">
          <img src="../assets/img/products/' . $producto['imagen'] . '" />
        </div>
        <div class="product-details">
          <div class="product-title">' . $producto['producto'] . '</div>
          <p class="product-description">
            ' . $producto['descripcion'] . '
          </p>
        </div>
        <div class="product-price">' . $producto['precio'] . '</div>
        <div class="product-quantity">' . $producto['cantidad'] . '
        </div>
        <div class="product-removal">
          <button class="remove-product">Remove</button>
        </div>
        <div class="product-line-price">' . $producto['subtotal'] . '</div>
      </div>
';
      }
      $id_usuario = 1;
      $total = $carritoMostrar->mostrarTotal($id_usuario);
      foreach ($total as $toTal) {
        echo '
            <div class="totals">
        <div class="totals-item totals-item-total">
          <label>Total</label>
          <div class="totals-value" id="cart-total">' . $toTal['total'] . '</div>
        </div>
      </div>
';
      }

      break;
    case "mostrar_total":
      // $id_usuario = $_SESSION['id_usuario'];
      $carritoMostrar->mostrarTotal($id_producto);
      break;
  }
} else {
  echo 'no estas enviand el opc';
}
