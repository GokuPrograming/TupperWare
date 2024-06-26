<?php
// guardarlo en la variable para usarlo en ajax
$idProducto = isset($_GET['id_producto']) ? $_GET['id_producto'] : null;
echo 'el id del producto:' . $idProducto;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Zay Shop - Product Detail Page</title>
  <meta charset="utf-8" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="apple-touch-icon" href="../assets/img/apple-icon.png" />
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../assets/css/templatemo.css" />
  <link rel="stylesheet" href="../assets/css/custom.css" />
  <link rel="stylesheet" href="../assets/css/contador.css" />
  <!-- Toastr CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <!-- Load fonts style after rendering the layout styles -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap" />
  <link rel="stylesheet" href="../assets/css/fontawesome.min.css" />
  <!-- jQuery (Toastr requires jQuery) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Toastr JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <!-- Slick -->
  <link rel="stylesheet" type="text/css" href="../assets/css/slick.min.css" />
  <link rel="stylesheet" type="text/css" href="../assets/css/slick-theme.css" />
  <!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
  <div id="nav_bar"></div>
  <!-- Modal -->
  
  <div id="mostrar"></div>
  <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="w-100 pt-1 mb-5 text-right">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="get" class="modal-content modal-body border-0 p-0">
        <div class="input-group mb-2">
          <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ..." />
          <button type="submit" class="input-group-text bg-success text-light">
            <i class="fa fa-fw fa-search text-white"></i>
          </button>
        </div>
      </form>
    </div>
  </div>

  <!-- Open Content -->
  <div id="informacion_producto"></div>
  <!-- Close Content -->

  <!-- Start Article -->
  <section class="py-5">
    <div class="container">
      <div class="row text-left p-2 pb-3">
        <h4>Related Products</h4>
      </div>

      <!--Start Carousel Wrapper-->
      <div id="carousel-related-product">
        <div class="p-2 pb-3">
          <div class="product-wap card rounded-0">
            <div class="card rounded-0">
              <img class="card-img rounded-0 img-fluid" src="assets/img/shop_08.jpg" />
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
              <a href="shop-single.html" class="h3 text-decoration-none">Red Clothing</a>
              <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                <li>M/L/X/XL</li>
                <li class="pt-2">
                  <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                </li>
              </ul>
              <ul class="list-unstyled d-flex justify-content-center mb-1">
                <li>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                </li>
              </ul>
              <p class="text-center mb-0">$20.00</p>
            </div>
          </div>
        </div>

        <div class="p-2 pb-3">
          <div class="product-wap card rounded-0">
            <div class="card rounded-0">
              <img class="card-img rounded-0 img-fluid" src="assets/img/shop_09.jpg" />
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
              <a href="shop-single.html" class="h3 text-decoration-none">White Shirt</a>
              <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                <li>M/L/X/XL</li>
                <li class="pt-2">
                  <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                </li>
              </ul>
              <ul class="list-unstyled d-flex justify-content-center mb-1">
                <li>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                </li>
              </ul>
              <p class="text-center mb-0">$25.00</p>
            </div>
          </div>
        </div>

        <div class="p-2 pb-3">
          <div class="product-wap card rounded-0">
            <div class="card rounded-0">
              <img class="card-img rounded-0 img-fluid" src="assets/img/shop_10.jpg" />
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
              <a href="shop-single.html" class="h3 text-decoration-none">Oupidatat non</a>
              <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                <li>M/L/X/XL</li>
                <li class="pt-2">
                  <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                </li>
              </ul>
              <ul class="list-unstyled d-flex justify-content-center mb-1">
                <li>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                </li>
              </ul>
              <p class="text-center mb-0">$45.00</p>
            </div>
          </div>
        </div>

        <div class="p-2 pb-3">
          <div class="product-wap card rounded-0">
            <div class="card rounded-0">
              <img class="card-img rounded-0 img-fluid" src="assets/img/shop_11.jpg" />
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
              <a href="shop-single.html" class="h3 text-decoration-none">Black Fashion</a>
              <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                <li>M/L/X/XL</li>
                <li class="pt-2">
                  <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                </li>
              </ul>
              <ul class="list-unstyled d-flex justify-content-center mb-1">
                <li>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                </li>
              </ul>
              <p class="text-center mb-0">$60.00</p>
            </div>
          </div>
        </div>

        <div class="p-2 pb-3">
          <div class="product-wap card rounded-0">
            <div class="card rounded-0">
              <img class="card-img rounded-0 img-fluid" src="assets/img/shop_08.jpg" />
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
              <a href="shop-single.html" class="h3 text-decoration-none">Oupidatat non</a>
              <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                <li class="">M/L/X/XL</li>
                <li class="pt-2">
                  <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                </li>
              </ul>
              <ul class="list-unstyled d-flex justify-content-center mb-1">
                <li>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                </li>
              </ul>
              <p class="text-center mb-0">$80.00</p>
            </div>
          </div>
        </div>

        <div class="p-2 pb-3">
          <div class="product-wap card rounded-0">
            <div class="card rounded-0">
              <img class="card-img rounded-0 img-fluid" src="assets/img/shop_09.jpg" />
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
              <a href="shop-single.html" class="h3 text-decoration-none">Oupidatat non</a>
              <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                <li>M/L/X/XL</li>
                <li class="pt-2">
                  <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                </li>
              </ul>
              <ul class="list-unstyled d-flex justify-content-center mb-1">
                <li>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                </li>
              </ul>
              <p class="text-center mb-0">$110.00</p>
            </div>
          </div>
        </div>

        <div class="p-2 pb-3">
          <div class="product-wap card rounded-0">
            <div class="card rounded-0">
              <img class="card-img rounded-0 img-fluid" src="assets/img/shop_10.jpg" />
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
              <a href="shop-single.html" class="h3 text-decoration-none">Oupidatat non</a>
              <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                <li>M/L/X/XL</li>
                <li class="pt-2">
                  <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                </li>
              </ul>
              <ul class="list-unstyled d-flex justify-content-center mb-1">
                <li>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                </li>
              </ul>
              <p class="text-center mb-0">$125.00</p>
            </div>
          </div>
        </div>

        <div class="p-2 pb-3">
          <div class="product-wap card rounded-0">
            <div class="card rounded-0">
              <img class="card-img rounded-0 img-fluid" src="assets/img/shop_11.jpg" />
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
              <a href="shop-single.html" class="h3 text-decoration-none">Oupidatat non</a>
              <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                <li>M/L/X/XL</li>
                <li class="pt-2">
                  <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                </li>
              </ul>
              <ul class="list-unstyled d-flex justify-content-center mb-1">
                <li>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                </li>
              </ul>
              <p class="text-center mb-0">$160.00</p>
            </div>
          </div>
        </div>

        <div class="p-2 pb-3">
          <div class="product-wap card rounded-0">
            <div class="card rounded-0">
              <img class="card-img rounded-0 img-fluid" src="assets/img/shop_08.jpg" />
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
              <a href="shop-single.html" class="h3 text-decoration-none">Oupidatat non</a>
              <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                <li>M/L/X/XL</li>
                <li class="pt-2">
                  <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                </li>
              </ul>
              <ul class="list-unstyled d-flex justify-content-center mb-1">
                <li>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                </li>
              </ul>
              <p class="text-center mb-0">$180.00</p>
            </div>
          </div>
        </div>

        <div class="p-2 pb-3">
          <div class="product-wap card rounded-0">
            <div class="card rounded-0">
              <img class="card-img rounded-0 img-fluid" src="assets/img/shop_09.jpg" />
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
              <a href="shop-single.html" class="h3 text-decoration-none">Oupidatat non</a>
              <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                <li>M/L/X/XL</li>
                <li class="pt-2">
                  <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                </li>
              </ul>
              <ul class="list-unstyled d-flex justify-content-center mb-1">
                <li>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                </li>
              </ul>
              <p class="text-center mb-0">$220.00</p>
            </div>
          </div>
        </div>

        <div class="p-2 pb-3">
          <div class="product-wap card rounded-0">
            <div class="card rounded-0">
              <img class="card-img rounded-0 img-fluid" src="assets/img/shop_10.jpg" />
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
              <a href="shop-single.html" class="h3 text-decoration-none">Oupidatat non</a>
              <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                <li>M/L/X/XL</li>
                <li class="pt-2">
                  <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                </li>
              </ul>
              <ul class="list-unstyled d-flex justify-content-center mb-1">
                <li>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                </li>
              </ul>
              <p class="text-center mb-0">$250.00</p>
            </div>
          </div>
        </div>

        <div class="p-2 pb-3">
          <div class="product-wap card rounded-0">
            <div class="card rounded-0">
              <img class="card-img rounded-0 img-fluid" src="assets/img/shop_11.jpg" />
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
              <a href="shop-single.html" class="h3 text-decoration-none">Oupidatat non</a>
              <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                <li>M/L/X/XL</li>
                <li class="pt-2">
                  <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                  <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                </li>
              </ul>
              <ul class="list-unstyled d-flex justify-content-center mb-1">
                <li>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                </li>
              </ul>
              <p class="text-center mb-0">$300.00</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Article -->

  <!-- Start Script -->
  <script src="../assets/js/jquery-1.11.0.min.js"></script>
  <script src="../assets/js/jquery-migrate-1.2.1.min.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/templatemo.js"></script>
  <script src="../assets/js/custom.js"></script>
  <!-- End Script -->

  <!-- Start Slider Script -->
  <script src="../assets/js/slick.min.js"></script>
  <script>
    $("#carousel-related-product").slick({
      infinite: true,
      arrows: false,
      slidesToShow: 4,
      slidesToScroll: 3,
      dots: true,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 3,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 3,
          },
        },
      ],
    });
  </script>
  <!-- End Slider Script -->
</body>

<script>
  function mostrarInformacion() {
    var idProducto = '<?php echo $idProducto; ?>';
    console.log("el valor del id es: ", idProducto)
    if (idProducto) {
      $.ajax({
        url: '../controller/user_controller.php?opc=masInformacion&id_producto=' + idProducto,
        method: 'GET',
        success: function(response) {
          //  console.log("Respuesta de la API:", response); //
          // Renderizar la información del producto en el div #product-details
          $('#informacion_producto').html(response);
          // Agrega más detalles del producto según sea necesario
        },
        error: function(xhr, status, error) {
          // Manejo de errores
          console.error(error);
          $('#informacion_producto').html(response);
        }
      });
    } else {
      $('#informacion_producto').html(response);
    }
  }

  $(document).ready(function() {
    mostrarInformacion();
  });
</script>
<script src="../js/mostrar_todos_los_productos.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    // mostrarProductos();
    mostrar_Nav_bar();
  });
</script>
<script>
  // Variable para almacenar el contador
  let contador = 1;

  function aumentarContador(idProducto) {
    var contador = document.getElementById('contador-' + idProducto);
    var valorActual = parseInt(contador.textContent);
    contador.textContent = valorActual + 1;
    actualizarURLCarrito(idProducto, valorActual + 1);
  }

  function actualizarURLCarrito(idProducto, cantidad) {
    var link = document.getElementById('add-to-cart-link-' + idProducto);
    //  link.href = `../controller/user/ctrlUser.php?opc=2&id=${idProducto}&cantidad=${cantidad}`;
    contador = cantidad;
    console.log("contador= " + contador);

  }

  function disminuirContador(idProducto) {
    var contador = document.getElementById('contador-' + idProducto);
    var valorActual = parseInt(contador.textContent);
    if (valorActual > 0) {
      contador.textContent = valorActual - 1;
      actualizarURLCarrito(idProducto, valorActual - 1);
    }
  }

  function actualizarCarrito(id_producto, cantidad) {

    cantidad = contador;
    console.log("cantidad".cantidad);
    $.ajax({
      url: `../controller/user_controller.php?opc=agregarACarrito&id_producto=${id_producto}&contador=${contador}`,
      type: 'GET',
      success: function(response) {
        $('#mostrar').html(response);
        contador = 0;
        mostrarNotificacion('¡se agrego a carrito con éxito!', 'success');
      },
      error: function() {
        // Maneja errores si la solicitud AJAX falla
        $('#mostrar').html('Error al cargar la barra de navegación');
      }
    });
    mostrarInformacion();
    //carritoContador();
  }

  function carritoContador() {
    $.ajax({
      url: '../controller/user/ctrlUser.php?opc=8',
      type: 'GET',
      success: function(response) {
        $('#contador-value').html(response);
      },
      error: function() {
        // Maneja errores si la solicitud AJAX falla
        $('#contador').html('Error al cargar la barra de navegación');
      }
    });
  }

  function mostrarNotificacion(mensaje, tipo) {
    toastr.options = {
      closeButton: true,
      progressBar: true,
      positionClass: 'toast-top-right',
      timeOut: 3000, // Duración de la notificación en milisegundos
    };

    if (tipo === 'success') {
      toastr.success(mensaje);
    } else if (tipo === 'error') {
      toastr.error(mensaje);
    } else if (tipo === 'warning') {
      toastr.warning(mensaje);
    } else if (tipo === 'info') {
      toastr.info(mensaje);
    }
  }
</script>

</html>