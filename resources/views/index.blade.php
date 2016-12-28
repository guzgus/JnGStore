<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
@include('includes.styles')
</head>
  
<body>
<!-- header -->
@include('includes.header')
<!-- //header -->
<!-- banner -->
<!-- //banner -->

<!-- banner-bottom -->
  <div class="banner-bottom special-deals" >
    <div class="container">
      <div class="col-md-12 wthree_banner_bottom_right">
        <h2>Recientes</h2><br>

        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
          <ul id="myTab" class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#mujer" id="mujer-tab" role="tab" data-toggle="tab" aria-controls="mujer">Mujer</a></li>
            <li role="presentation"><a href="#hombre" role="tab" id="hombre-tab" data-toggle="tab" aria-controls="hombre">Hombre</a></li>
            <li role="presentation"><a href="#kids" role="tab" id="kids-tab" data-toggle="tab" aria-controls="kids">Niñ@s</a></li>
            <li role="presentation"><a href="#hogar" role="tab" id="hogar-tab" data-toggle="tab" aria-controls="hogar">Hogar</a></li>
          </ul>
          <div id="myTabContent" class="tab-content">
            <div role="tabpanel" class="tab-pane fade active in" id="mujer" aria-labelledby="mujer-tab">

                    <ul id="flexisel-mu"> 
                  <?php for ($mu = 1; $mu <= 5; $mu++) { ?>
    
                    <li>
                      <div class="w3l_related_products_grid">
                        <div class="agile_ecommerce_tab_left dresses_grid">
                          <div class="hs-wrapper hs-wrapper3">
                            <img src="images/demos/mu_demo1.jpg" alt=" " class="img-responsive" />
                            <img src="images/demos/mu_demo2.jpg" alt=" " class="img-responsive" />
                            <img src="images/demos/mu_demo3.jpg" alt=" " class="img-responsive" />
                            <img src="images/demos/mu_demo4.jpg" alt=" " class="img-responsive" />
                            <img src="images/demos/mu_demo5.jpg" alt=" " class="img-responsive" />
                            <img src="images/demos/mu_demo6.jpg" alt=" " class="img-responsive" />
                            <div class="w3_hs_bottom">
                              <div class="flex_ecommerce">
                                <a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                              </div>
                            </div>
                          </div>
                          <h5><a href="single.html">Long Purple Skirts / {{$mu}}</a></h5>
                          <div class="simpleCart_shelfItem">
                            <p class="flexisel_ecommerce_cart"><span>$312</span> <i class="item_price">$212</i></p>
                            <p><a class="item_add" href="#">Add to cart</a></p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <?php } ?>
                  </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="hombre" aria-labelledby="hombre-tab">
                    <ul id="flexisel-h"> 
                  <?php for ($h = 1; $h <= 5; $h++) { ?>
    
                    <li>
                      <div class="w3l_related_products_grid">
                        <div class="agile_ecommerce_tab_left dresses_grid">
                          <div class="hs-wrapper hs-wrapper3">
                            <img src="images/demos/h_demo1.jpg" alt=" " class="img-responsive" />
                            <img src="images/demos/h_demo2.jpg" alt=" " class="img-responsive" />
                            <div class="w3_hs_bottom">
                              <div class="flex_ecommerce">
                                <a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                              </div>
                            </div>
                          </div>
                          <h5><a href="single.html">Long Purple Skirts / {{$h}}</a></h5>
                          <div class="simpleCart_shelfItem">
                            <p class="flexisel_ecommerce_cart"><span>$312</span> <i class="item_price">$212</i></p>
                            <p><a class="item_add" href="#">Add to cart</a></p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <?php } ?>
                  </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="kids" aria-labelledby="kids-tab">
                    <ul id="flexisel-k"> 
                  <?php for ($k = 1; $k <= 5; $k++) { ?>
    
                    <li>
                      <div class="w3l_related_products_grid">
                        <div class="agile_ecommerce_tab_left dresses_grid">
                          <div class="hs-wrapper hs-wrapper3">
                            <img src="images/demos/k_demo1.jpg" alt=" " class="img-responsive" />
                            <img src="images/demos/k_demo2.jpg" alt=" " class="img-responsive" />
                            <img src="images/demos/k_demo3.jpg" alt=" " class="img-responsive" />
                            <img src="images/demos/k_demo2.jpg" alt=" " class="img-responsive" />
                            <img src="images/demos/k_demo3.jpg" alt=" " class="img-responsive" />
                            <img src="images/demos/k_demo1.jpg" alt=" " class="img-responsive" />
                            <div class="w3_hs_bottom">
                              <div class="flex_ecommerce">
                                <a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                              </div>
                            </div>
                          </div>
                          <h5><a href="single.html">Long Purple Skirts / {{$k}}</a></h5>
                          <div class="simpleCart_shelfItem">
                            <p class="flexisel_ecommerce_cart"><span>$312</span> <i class="item_price">$212</i></p>
                            <p><a class="item_add" href="#">Add to cart</a></p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <?php } ?>
                  </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="hogar" aria-labelledby="hogar-tab">
                    <ul id="flexisel-ho"> 
                  <?php for ($ho = 1; $ho <= 5; $ho++) { ?>
    
                    <li>
                      <div class="w3l_related_products_grid">
                        <div class="agile_ecommerce_tab_left dresses_grid">
                          <div class="hs-wrapper hs-wrapper3">
                            <img src="images/51.jpg" alt=" " class="img-responsive" />
                            <img src="images/41.jpg" alt=" " class="img-responsive" />
                            <img src="images/27.jpg" alt=" " class="img-responsive" />
                            <img src="images/28.jpg" alt=" " class="img-responsive" />
                            <img src="images/37.jpg" alt=" " class="img-responsive" />
                            <img src="images/30.jpg" alt=" " class="img-responsive" />
                            <img src="images/36.jpg" alt=" " class="img-responsive" />
                            <img src="images/38.jpg" alt=" " class="img-responsive" />
                            <div class="w3_hs_bottom">
                              <div class="flex_ecommerce">
                                <a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                              </div>
                            </div>
                          </div>
                          <h5><a href="single.html">Long Purple Skirts / {{$ho}}</a></h5>
                          <div class="simpleCart_shelfItem">
                            <p class="flexisel_ecommerce_cart"><span>$312</span> <i class="item_price">$212</i></p>
                            <p><a class="item_add" href="#">Add to cart</a></p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <?php } ?>
                  </ul>
            </div>
          </div>
        </div>
@include('includes.modals')
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
<!-- //banner-bottom -->

<!-- banner-bottom1 -->
  <div  class="banner-bottom1">
    <div id="membresias" class="agileinfo_banner_bottom1_grids">
      <div class="col-md-7 agileinfo_banner_bottom1_grid_left">
        <h3>Hazte Socio y<span>Gana <i>$ dinero $</i></span> <br>Sin salir de tu casa</h3>
        <a href="products.html"><strong>Más info.</strong></a>
      </div>
      <div class="col-md-5 agileinfo_banner_bottom1_grid_right">
        <h4>¡¡Desde $4.00 USD mensuales podrás revender cientos de productos!!</h4>
        <div class="timer_wrap">
          <div id="counter"> </div>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
<!-- //banner-bottom1 -->
<!-- footer -->
  <div id="mebresias" class="special-deals">
    <div class="container">
     <h2>Membresias</h2><br>
      <div class="w3_footer_grids">
        <div class="col-md-3 col-xs-6 w3_footer_grid">
          <h3>Personal</h3>
          <ul class="info"> 
            <li><i class="fa fa-check" aria-hidden="true"></i>  Acceso a nuestros productos</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>  Pago con tarjeta</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>  Pago vía depósito o transferencia</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>  Entrega a domicilio*</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>  Catalogo predefinido por temporada</li>
            <li></li>
          </ul>
          <h4>$0.- Gratis!</h4>
          <div class="modal_body_right_cart simpleCart_shelfItem">
            <p><a class="item_add" href="#">Registrarme</a></p>
          </div>
        </div>
        <div class="col-md-3 col-xs-6 w3_footer_grid">
          <h3>Pre-Emprendedor</h3>
          <ul class="info"> 
            <li><i class="fa fa-check" aria-hidden="true"></i>  Acceso a nuestros productos</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>  Pago con tarjeta</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>  Pago vía depósito o transferencia</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>  Entrega a domicilio**</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>  Acceso para tus clientes vía clave</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>  Ganancia del 20% <strong>sobre nuestros precios</strong></li>
            <li><i class="fa fa-check" aria-hidden="true"></i>  Catalogo predefinido por temporada</li>
          </ul>
          <h4 >$4.00 USD x Mes</h4>
          <h5 ><small>(${{number_format($_SESSION["dolar_today"]*4,0)}} MXN x Mes)</small></h5>
          <div class="modal_body_right_cart simpleCart_shelfItem">
            <p><a class="item_add" href="#">Contratar</a></p>
          </div>

        </div>
        <div class="col-md-3 col-xs-12 w3_footer_grid">
          <h3>Emprendedor</h3>
          <ul class="info"> 
            <li><i class="fa fa-check" aria-hidden="true"></i>  Acceso a nuestros productos</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>  Pago con tarjeta</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>  Pago vía depósito o transferencia</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>  Entrega a domicilio**</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>  Acceso para tus clientes vía clave</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>  <strong>Ganancia asignada por socio</strong></li>
            <li><i class="fa fa-check" aria-hidden="true"></i>  <strong>Catalogo personalizado</strong></li>
            <li><i class="fa fa-check" aria-hidden="true"></i>  Por cada $1,000.- de compra descuento del <strong>5%</strong> sobre tu pedido</li>
          </ul>
          <h4 >$10.00 USD x Mes</h4>
          <h5 ><small>(${{number_format($_SESSION["dolar_today"]*10,0)}} MXN x Mes)</small></h5>
          <div class="modal_body_right_cart simpleCart_shelfItem">
            <p><a class="item_add" href="#">Contratar</a></p>
          </div>
        </div>
        <div class="col-md-3 col-xs-12 w3_footer_grid">
          <h3>Dealer</h3>
          <ul class="info"> 
            <li><i class="fa fa-check" aria-hidden="true"></i>  Acceso a nuestros productos</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>  Pago con tarjeta</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>  Pago vía depósito o transferencia</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>  Entrega a domicilio**</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>  Acceso para tus clientes vía clave</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>  <strong>Ganancia asignada por socio</strong></li>
            <li><i class="fa fa-check" aria-hidden="true"></i>  <strong>Catalogo personalizado</strong></li>
            <li><i class="fa fa-check" aria-hidden="true"></i>  Por cada $1,000.- de compra descuento del <strong>10%</strong> sobre tu pedido</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>  <strong>Carga de Productos propios, para vender a través de la plataforma</strong></li>
            <li><i class="fa fa-check" aria-hidden="true"></i>  Recibe pagos con tarjeta de crédito a tu cuenta bancaria</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>  Cabecera y pie de página personalizado</li>
          </ul>
          <h4 >$20.00 USD x Mes</h4>
          <h5 ><small>(${{number_format($_SESSION["dolar_today"]*20,0)}} MXN x Mes)</small></h5>
          <div class="modal_body_right_cart simpleCart_shelfItem">
            <p><a class="item_add" href="#">Contratar</a></p>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
<!-- //footer -->
<!-- new-products -->
  <div id="somos" class="new-products">
    <div class="container">
      <h3>Somos J&G</h3>
      <div class="agileinfo_new_products_grids text-justify">
          

          <div class="row">
            <div class="col-md-6">
              <p>Somos una plataforma la cual te permitirá acceder a cientos de productos provenientes en su mayoría del extranjero, productos nuevos y con estilos originales. <br><br>
                <strong>J&G</strong> se encarga de hacer una selección previa entre los mejores productos y sobre todo entre las empresas más confiables, con el objetivo de garantizarte que el producto que compres a través de esta plataforma llegara con la mejor calidad del mercado, de lo contrario contamos con políticas que te protegen como socio.<br><br>
                La ventaja de ser socio emprendedor de <strong>J&G</strong> son varias, entre ellas:<br>
Olvídate de las largas filas y el estrés de vender por catálogo de forma convencional, ya que con nosotros podrás vender productos sin salir de tu casa, ya que al ser socio tus clientes podrán hacerte pedidos a través de la misma plataforma, y tú solo tendrás que confirmar el pedido de tu cliente y hacer el pago correspondiente, el cual puede ser con tarjeta de crédito o deposito en efectivo.<br><br>
              </p>
            </div>
            <div class="col-md-6">
                    <div id="myCarousel_somos" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                          <div class="item active">
                            <img src="images/somos/somos-1.jpg" alt="Chania" width="100%" >
                          </div>
                    <?php for ($s = 2; $s <= 7; $s++) { ?>
                          <div class="item">
                            <img src="images/somos/somos-{{$s}}.jpg" alt="Chania" width="100%" >
                          </div>
                    <?php } ?>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel_somos" role="button" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel_somos" role="button" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>              

            </div>            
          </div>
          <div class="row">
            <div class="col-md-12">
<p>Tus ganancias se verán reflejadas de forma inmediata, dependiendo la membresía que contrates tendrás ganancias a partir del 20% sobre el costo del producto, o bien podrás asignar la ganancia que desees tener.<br><br>
Nuestro catálogo digital, se actualizara cada 4 meses para socios con membresía Personal y Pre-emprendedor, pero si cuentas con membresía Emprendedor o Dealer, podrás armar tu propio catalogo entre cientos de productos que podrás vender en cualquier momento antes que los demás socios.<br><br>
Entrega a domicilio, todos los productos que compres a través de nuestra plataforma cuentan con entrega a domicilio el cual puede ser el tuyo como socio o directamente a tu cliente, la entrega a domicilio tiene un costo por pedido el cual puede variar dependiendo la paquetería que tú elijas.<br><br>
La entrega de nuestros productos está sujeta a los tiempos estándares de compras internacionales, los cuales son entre 3 y 4 semanas, contando a partir de que nos confirmes tu pedido. Podrás darle seguimiento al status de tu pedido día con día.</p>
            </div>
          </div>
          
       <div class="clearfix"> </div>
      </div>
    </div>
  </div>
<!-- //new-products -->

<!-- top-brands -->
  <div class="top-brands">
    <div class="container">
      <h3>Top Brands</h3>
      <div class="sliderfig">
        <ul id="flexiselDemo1">     
          <li>
            <img src="images/4.png" alt=" " class="img-responsive" />
          </li>
          <li>
            <img src="images/5.png" alt=" " class="img-responsive" />
          </li>
          <li>
            <img src="images/6.png" alt=" " class="img-responsive" />
          </li>
          <li>
            <img src="images/7.png" alt=" " class="img-responsive" />
          </li>
          <li>
            <img src="images/46.jpg" alt=" " class="img-responsive" />
          </li>
        </ul>
      </div>
          <script type="text/javascript">
              $(window).load(function() {
                $("#flexiselDemo1").flexisel({
                  visibleItems: 4,
                  animationSpeed: 1000,
                  autoPlay: true,
                  autoPlaySpeed: 3000,        
                  pauseOnHover: true,
                  enableResponsiveBreakpoints: true,
                  responsiveBreakpoints: { 
                    portrait: { 
                      changePoint:480,
                      visibleItems: 1
                    }, 
                    landscape: { 
                      changePoint:640,
                      visibleItems:2
                    },
                    tablet: { 
                      changePoint:768,
                      visibleItems: 3
                    }
                  }
                });
                
              });
          </script>
          <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    </div>
  </div>
<!-- //top-brands -->
<!-- newsletter -->
  <div class="newsletter">
    <div class="container">
      <div class="col-md-6 w3agile_newsletter_left">
        <h3>Newsletter</h3>
        <p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
      </div>
      <div class="col-md-6 w3agile_newsletter_right">
        <form action="#" method="post">
          <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
          <input type="submit" value="" />
        </form>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
<!-- //newsletter -->
<!-- footer -->
  <div class="footer">
    <div class="container">
      <div class="w3_footer_grids">
        <div class="col-md-3 w3_footer_grid">
          <h3>Contact</h3>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
          <ul class="address">
            <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
          </ul>
        </div>
        <div class="col-md-3 w3_footer_grid">
          <h3>Information</h3>
          <ul class="info"> 
            <li><a href="about.html">About Us</a></li>
            <li><a href="mail.html">Contact Us</a></li>
            <li><a href="short-codes.html">Short Codes</a></li>
            <li><a href="faq.html">FAQ's</a></li>
            <li><a href="products.html">Special Products</a></li>
          </ul>
        </div>
        <div class="col-md-3 w3_footer_grid">
          <h3>Category</h3>
          <ul class="info"> 
            <li><a href="dresses.html">Dresses</a></li>
            <li><a href="sweaters.html">Sweaters</a></li>
            <li><a href="shirts.html">Shirts</a></li>
            <li><a href="sarees.html">Sarees</a></li>
            <li><a href="skirts.html">Shorts & Skirts</a></li>
          </ul>
        </div>
        <div class="col-md-3 w3_footer_grid">
          <h3>Profile</h3>
          <ul class="info"> 
            <li><a href="products.html">Summer Store</a></li>
            <li><a href="checkout.html">My Cart</a></li>
          </ul>
          <h4>Follow Us</h4>
          <div class="agileits_social_button">
            <ul>
              <li><a href="#" class="facebook"> </a></li>
              <li><a href="#" class="twitter"> </a></li>
              <li><a href="#" class="google"> </a></li>
              <li><a href="#" class="pinterest"> </a></li>
            </ul>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
    <div class="footer-copy">
      <div class="footer-copy1">
        <div class="footer-copy-pos">
          <a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
        </div>
      </div>
      <div class="container">
        <p>&copy; 2016 Women's Fashion. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
      </div>
    </div>
  </div>
<!-- //footer -->
</body>
                    <script type="text/javascript">
                      $(window).load(function() {

                        $("#flexisel-mu").flexisel({
                          visibleItems:3,
                          animationSpeed: 500,
                          autoPlay: true,
                          autoPlaySpeed: 8000,        
                          pauseOnHover: true,
                          enableResponsiveBreakpoints: true,
                          responsiveBreakpoints: { 
                            portrait: { 
                              changePoint:480,
                              visibleItems: 1
                            }, 
                            landscape: { 
                              changePoint:640,
                              visibleItems:2
                            },
                            tablet: { 
                              changePoint:768,
                              visibleItems: 3
                            }
                          }
                        });
                        
                        $("#flexisel-k").flexisel({
                          visibleItems:3,
                          animationSpeed: 1000,
                          autoPlay: true,
                          autoPlaySpeed: 3000,        
                          pauseOnHover: true,
                          enableResponsiveBreakpoints: true,
                          responsiveBreakpoints: { 
                            portrait: { 
                              changePoint:480,
                              visibleItems: 1
                            }, 
                            landscape: { 
                              changePoint:640,
                              visibleItems:2
                            },
                            tablet: { 
                              changePoint:768,
                              visibleItems: 3
                            }
                          }
                        });
                        

                        $("#flexisel-h").flexisel({
                          visibleItems:3,
                          animationSpeed: 1000,
                          autoPlay: true,
                          autoPlaySpeed: 3000,        
                          pauseOnHover: true,
                          enableResponsiveBreakpoints: true,
                          responsiveBreakpoints: { 
                            portrait: { 
                              changePoint:480,
                              visibleItems: 1
                            }, 
                            landscape: { 
                              changePoint:640,
                              visibleItems:2
                            },
                            tablet: { 
                              changePoint:768,
                              visibleItems: 3
                            }
                          }
                        });

                        $("#flexisel-ho").flexisel({
                          visibleItems:3,
                          animationSpeed: 1000,
                          autoPlay: true,
                          autoPlaySpeed: 3000,        
                          pauseOnHover: true,
                          enableResponsiveBreakpoints: true,
                          responsiveBreakpoints: { 
                            portrait: { 
                              changePoint:480,
                              visibleItems: 1
                            }, 
                            landscape: { 
                              changePoint:640,
                              visibleItems:2
                            },
                            tablet: { 
                              changePoint:768,
                              visibleItems: 3
                            }
                          }
                        });
                        
                      });
                    </script>
                    <script type="text/javascript" src="js/jquery.flexisel.js"></script>

</html>
