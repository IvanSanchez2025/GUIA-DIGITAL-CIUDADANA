<!DOCTYPE HTML><!--doc en html-->
<script src="maestra.js"></script>
<HTML LANG="ES"><!--doc en español-->
<HEAD>
<meta charset="UFT-8"><!--codifica caracteres-->
<meta neme="viewport" content="width=device-width, initial-scale=1.0"><!--ajusta el diseño a moviles-->
<title> GUIA DIGITAL CIUDADANA</title><!--titulo que aparece en la pestaña-->
<style>
 <body {
    margin: 0; /*elimina margenes por defecto */
    font-family:Arial, sans-serif;/*fuente de texto */
    }
/*estilo del menu principal */
nav{
   background: #87CEEB;/*fondo gris oscuro */
}
nav ul {
   list-style: none;/*quita viñetas de la lista */
   margin: 0;/*elimina margenes */
   padding: 0; /*elimina relleno */
   display: flex;/*coloca los <li> en linea (horizontal) */
}
nav ul li {
   position: relative;/*necesario para posicionar el submenu debajo */
}
nav ul li a {
   display: block;/*ase que todo el area sea clickeable */
   padding: 15px 20px; /*espacio interno */
   color: white;/*texto blanco */
   text-decoration: none;/*quita el subrayado */
}
nav ul li a:hover{
   background: #346;/* cambia el fondo al pasar el raton */
}
/* Estilo del submenu */
nav ul li ul{
   display: none; /*oculta el submenu por defecto */
   position: absolute; /*posiciona el submenu relativo al padre */ 
   top: 100%; /* lo coloca justo debajo del elemento padre */
   left: 0; /* aliniado a la izquirda */
   background: #444; /*fondo del subtema */
   padding: 0; /*sin espacio interno */
   min-width: 180px; /* ancho minimo del subtema */
}
nav ul li ul li a {
   padding: 10px 15px; /*espacio interno en las opciones */
}
nav ul li ul li a:hover {
   background: #555; /*coloca mas claro al pasar el raton */
}

/* mostar el submenu */
nav ul li:hover> ul {
   display: block; /*cuando paso el raton sobre el <li> , muestra el submenu */
}
</form>
</style>
</head>
<body>
   <!--menu principal-->
   <nav>

       <ul>
        <!--Elemento simple sin subtema-->
    </li>
        <!--Elemento con submenu-->
        <li>
         <a href="guia.mp4">
  <img src="SANCHEZ.png" width="80" height="110" align="center">
</a>
      </li>
      <form method="get" action="https://www.google.com/search" target="_blank">
<input type="search" name="q" placeholder="Introducir busqueda" autofocus required>
<input type="submit">
</form>
      <li>
               <p><a href="ciudadano.php"> CIUDADANO</a></p>
               <ul>
               <p><a href="CIUADADANO.mp4">ciudadano</a></p>
             <p><a href="....."></a></p>
              <li><a href="#">.......</a></li>
              <li><a href="#">.......</a></li>  
            </ul>
               </li>
            <li>
               <p><a href="TRAMITE.HTML"> TRAMITE</a></p>
               <ul>
               <p><a href="Tramites.html"> Tramites administrativos</a></p> 
             <p><a href="Tramites_administrativos.php"> ADMINISTRATIVOS</a></p>
              <li><a href="#">.......</a></li>
              <li><a href="#">.......</a></li>  
            </ul>
               </li>
                 <!--Elemento con submenu-->
            <li>
               <p><a href="SOLICITUD.HTML"> SOLICITUD</a></p>
               </li>
                         <!--Elemento con submenu-->
            <li>
               <p><a href="pagos.mp4">PAGO</a></p>
               <ul>
               <p><a href="Tramites administrativos.html"> SERVICIOS Y DERECHOS</a></p> 
              <li><a href="http://201.144.206.190/">PAGO DE PREDIAL</a></li>
              <li><a href="http://odapasvalledebravo.dyndns.org/Default.aspx">PAGO DE AGUA POTABLE</a></li>
              <li><a href="https://app.cfe.mx/Aplicaciones/CCFE/MiEspacioCFE/">PAGO DE LUZ(CFE)</a></li> 
              <li><a href="https://telmex.com/pago-en-linea">PAGO DE TELEFONO/INTERNET</a></li>
              <li><a href="https://www.gob.mx/tramites/ficha/pago-de-multas-de-transito/">PAGO DE MULTAS DE TRANSITO</a></li> 
              <li><a href="https://tenencia.edomex.gob.mx/TenenciaIndividual/tenencia/A06E1A88B8A6ED4B#/">PAGO DE TENENCIA O REFRENDO VEHICULAR</a></li> 
              <li><a href="https://www.gob.mx/sre/acciones-y-programas/pasaporte-mexicano">PAGO DE PASAPORTE</a></li>
              <li><a href="https://smovilidad.edomex.gob.mx/licencias_permisos">PAGO DE LICENCIA DE CONDUCIR</a></li>    
            </ul>
               </li>
               <li>
               <p><a href="DOCUMENTO.HTML"> DOCUMENTO</a></p>
            <ul>
               <p><a href="Galeria.html"> Galeria</a></p> 
              <li><a href="#">....</a></li>
              <li><a href="#">.......</a></li>
              <li><a href="#">.......</a></li>  
            </ul>
            

            
          </li>
               
                 <!--Elemento con submenu-->
                  <li>
               <p><a href="visita.HTML">VISITANTES</a></p>
            <ul>
               <p><a href="Galeria.html"> Galeria</a></p> 
              <li><a href="#">....</a></li>
              <li><a href="#">.......</a></li>
              <li><a href="#">.......</a></li>  
            </ul>
            </li>
            <li>
               <p><a href="https://share.google/Q5YCviwYntzpR3B4T">PORTAL AYUNTAMIENTO VALLE DE BRAVO</a></p>
            <ul>
               <p><a href="Galeria.html"> Galeria</a></p> 
              <li><a href="#">....</a></li>
              <li><a href="#">.......</a></li>
              <li><a href="#">.......</a></li>  
            </ul>
            </li>
            <li>
               <p><a href="CIUDADANOADIS.php">INFORMACION CIUDADANO</a></p>
            <ul>
               <p><a href="Galeria.html"> Galeria</a></p> 
              <li><a href="#">....</a></li>
              <li><a href="#">.......</a></li>
              <li><a href="#">.......</a></li>  
            </ul>
            </li>

         <li>
<a href="index3.php">
    <img src="sanchez2.png" alt="Ir al formulario" width="80" height="110" style="cursor:pointer;">
</a>
</li>
      
 </nav>
    <CENTER>
      <img src="GUIA.jpg"align="left"width="1450" height="600">
   </CENTER>
</body>

</html>
