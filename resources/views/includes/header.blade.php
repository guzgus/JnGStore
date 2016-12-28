  <div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            &times;</button>
          <h4 class="modal-title" id="myModalLabel">
            Don't Wait, Login now!</h4>
        </div>
        <div class="modal-body modal-body-sub">
          <div class="row">
            <div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
              <div class="sap_tabs">  
                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                  <ul>
                    <li class="resp-tab-item" aria-controls="tab_item-0"><span>Sign in</span></li>
                    <li class="resp-tab-item" aria-controls="tab_item-1"><span>Sign up</span></li>
                  </ul>   
                  <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                    <div class="facts">
                      <div class="register">
                        <form action="#" method="post">     
                          <input name="Email" placeholder="Email Address" type="text" required="">            
                          <input name="Password" placeholder="Password" type="password" required="">                    
                          <div class="sign-up">
                            <input type="submit" value="Sign in"/>
                          </div>
                        </form>
                      </div>
                    </div> 
                  </div>  

                  <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
                    <div class="facts">
                      <div class="register">
                        <form action="#" method="post">     
                          <input placeholder="Name" name="Name" type="text" required="">
                          <input placeholder="Email Address" name="Email" type="email" required=""> 
                          <input placeholder="Password" name="Password" type="password" required="">  
                          <input placeholder="Confirm Password" name="Password" type="password" required="">
                          <div class="sign-up">
                            <input type="submit" value="Create Account"/>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>                                            
                </div>  
              </div>
              <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
              <script type="text/javascript">
                $(document).ready(function () {
                  $('#horizontalTab').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion           
                    width: 'auto', //auto or any width like 600px
                    fit: true   // 100% fit in a container
                  });
                });
              </script>
              <div id="OR" class="hidden-xs">
                OR</div>
            </div>
            <div class="col-md-4 modal_body_right modal_body_right1">
              <div class="row text-center sign-with">
                <div class="col-md-12">
                  <h3 class="other-nw">
                    Sign in with</h3>
                </div>
                <div class="col-md-12">
                  <ul class="social">
                    <li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>
                    <li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
                    <li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
                    <li class="social_behance"><a href="#" class="entypo-behance"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    //$('#myModal88').modal('show');
  </script>
  <div class="header">
    <div class="container">
      <div class="w3l_login pull-right">
        <a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
      </div>
      <div class="w3l_logo">
        <h1 class="text-center"><a href="index.html"> - J & G - <span>Online Store</span></a></h1>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
  <div class="navigation">
    <div class="container">
      <nav class="navbar nav-header nav navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header nav_2 text-left">
          <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div> 
        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
          <ul class="nav-header nav navbar-nav">
            <li class="active"><a href="index.html" class="act">Home</a></li> 
            <!-- Mega Menu -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <b class="caret"></b></a>
              <ul class="dropdown-menu multi-column columns-3">
                <div class="row">
                  <div class="col-sm-3">
                    <ul class="multi-column-dropdown">
                      <h6>Mujer</h6>
                      <li><a href="dresses.html">Vestidos & Faldas</a></li>
                      <li><a href="shirts.html">Blusas & Camisas</a></li>
                      <li><a href="sweaters.html">Suéteres & Chamarras</a></li>
                      <li><a href="skirts.html">Sport & Casual</a></li>
                      <li><a href="skirts.html">Maternidad</a></li>
                      <li><a href="skirts.html">Accesorios</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-3">
                    <ul class="multi-column-dropdown">
                      <h6>Hombre</h6>
                      <li><a href="dresses.html">Playeras & Camisas</a></li>
                      <li><a href="sweaters.html">Suéteres & Chamarras</a></li>
                      <li><a href="jeans.html">Jeans & Shorts</a></li>
                      <li><a href="skirts.html">Pantalones</a></li>
                      <li><a href="skirts.html">Sport</a></li>
                      <li><a href="skirts.html">Accesorios</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-3">
                    <ul class="multi-column-dropdown">
                      <h6>Niñ@s</h6>
                      <li><a href="sandals.html">Niña</a></li>
                      <li><a href="sandals.html">Niño</a></li>
                      <li><a href="sandals.html">Bebé</a></li>
                      <li><a href="sandals.html">Mochilas</a></li>
                      <li><a href="sandals.html">Juguetes & Peluches</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-3">
                    <ul class="multi-column-dropdown">
                      <h6>Hogar</h6>
                      <li><a href="sandals.html">Organizadores</a></li>
                      <li><a href="sandals.html">Alcoba & Estancias</a></li>
                      <li><a href="sandals.html">Cocina & Comedor</a></li>
                      <li><a href="sandals.html">Decoración en muros</a></li>
                      <li><a href="sandals.html">Mascotas</a></li>
                      <li><a href="sandals.html">Coleccionables <small style="color:red">(+15)</small></a></li>
                    </ul>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </ul>
            </li>
            <li><a href="#membresias">Membresias</a></li>
            <li><a href="#somos">Somos</a></li>
            <li><a href="mail.html">Políticas de venta</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </div>

  <script>
$('.carousel').carousel({
  interval: 1000 * 2
});
  </script>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/header/bg-1.jpg" alt="Chania" width="100%" >
      </div>
<?php for ($i = 2; $i <= 12; $i++) { ?>
      <div class="item">
        <img src="images/header/bg-{{$i}}.jpg" alt="Chania" width="100%" >
      </div>
<?php } ?>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>