<html lang="en">
<head>
<title>COPERNICO PETS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  font color:#8E30DC;
}


header {
  background-color: #FDF7F6;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: #29A4DD;
}


nav {
  float: left;
  width: 30%;
  height: 300px;
  background: #ccc;
  padding: 20px;
}


nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; 
  text align: center;
  font-size: 50pxpx;
  font-family: comic_sans;
  font color:#8E30DC;
}


section {
  content: "";
  display: table;
  clear: both;
  color: #12C65;
  background-color: #E8762C;
  font color:#8E30DC;
}


footer {
  background-color: #555;
  padding: 10px;
  text-align: center;
  color: white;
}


@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>

<header>

<a href="/">
                  
                  <img src="https://puppiscolombia.vteximg.com.br/arquivos/ids/189812/1_BlackDays-Desktop-1-01.png?v=638362806195430000" width="1700px" alt="300px">
              </a>
 

</header>

<section>


<article>
    <h1 align="center">                  PORQUE TU FAMILIA ES NUESTRO COMPROMISO</h1>
    <a href="/">
                  
                  <img src="https://blog.unagras.es/wp-content/uploads/Pet-marketing.jpg" width="300px" alt="200px">
                  <img src="https://st.depositphotos.com/1037171/1663/i/950/depositphotos_16632523-stock-photo-lady-with-dog-shopping-isolated.jpg" width="300px" alt="100px">
                  <img src="https://st4.depositphotos.com/1146092/20674/i/1600/depositphotos_206744232-stock-photo-chihuahua-dog-holding-shopping-bag.jpg" width="300px" alt="100px">
                  
              </a>
  </article>
  
  <nav>
    
    <ul>
        
   
<h1>OBTEN DESCUENTOS EXTRA CON ESTE CÓDIGO </h1>
    <UL>
        @foreach ($productos as $producto)
    <li>
        {{$producto["nombre"]}}
        {{$producto["cupon"]}}

    </li>
   
    @endforeach
    <h1>NO TE QUEDES SIN EL TUYO</h1>
    </UL>
    </ul>
  </nav>
  
  
</section>
<br>
<br>


<footer>
  <p>MILENA PEÑA</p>
</footer>

</body>
</html>

