<?php
include('../config.php');
?>
<html>
    <head>
        <link rel="stylesheet" href="../css/menu.css">
        <link rel="stylesheet" href="../css/slideshow.css">
        <link rel="stylesheet" href="../css/product_slider.css">
        <script src="https://kit.fontawesome.com/1935d064dd.js" crossorigin="anonymous"></script>
        <title>CachinaPe | Main Page</title>
        <link rel="icon" href="../images/logo/icon.png" sizes="32x32" type="image/png" sizes="50x50">
    </head>
<style>
	a:hover{color:#f5a623;}

  html {
  box-sizing: border-box;
}

  *, *:before, *:after {
  box-sizing: inherit;
}

  .column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 2px 50px 2px 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.wrapper{
    background: #fff;
    max-width: 950px;
    width: 100%;
    margin: 0 auto;
    border-radius: 15px;
    padding: 0px 25px25px;
}

h1{
    text-align: center;
    text-transform: uppercase;
    margin-bottom: 20px;
}

.about-section{
    display: flex;
}

</style>

    <body>    
        <header class="header">
            <a href="#" class="logo"><img src="../images/logo/logo.png" height="50px" alt=""></a>
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
	    <ul class="menu">
            <li><a href="../visitor/register.php" style="color:#f5a623;font-weight:bold;">Registrate ahora!</a></li>
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="../visitor/vProduct.php">Productos</a></li>
	    <li><a href="../visitor/about_us.php">Nosotros</a></li>
    	    <li><a href="../visitor/login.php">Inicia sesión</a></li>
        </ul>
        </header>
        <div class="about-section">
  <h3 style="color:white;">NOSOTROS</h3>
</div>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="../images/about/buy.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Compra tus items de segunda mano</h2>
        <p>Encuentra cualquier prenda de segunda mano en nuestro website.</p>
        <p>Los productos se pueden buscar por palabras clave, categoría y precio.</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="../images/about/sell.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Vende tus prendas de segunda mano</h2>
        <p>Envia la información de tu producto para venderlo.</p>
        
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="../images/about/review.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Todos los productos son revisados.</h2>
        <p>Los administradores revisaran la información de los productos primero.</p>
        <p>Una vez los productos esten aprovados, estos se empezarán a vender</p>
      </div>
    </div>
  </div>
</div>
<div class="column">
    <div class="card">
      <img src="../images/about/call.jpeg" alt="John" style="width:100%">
      <div class="container">
        <h2>Sientete libre de contactarnos</h2>
        <p>Esperamos que disfrutes tus comptras con nosotros!</p>
        <p>Email: asucso@unsa.edu.pe</p>
        <p>Número: 012345678</p>
      </div>
    </div>
  </div>
</div>
</body>
</html>