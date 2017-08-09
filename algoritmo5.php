<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <title>algoritmo 5 </title>
  </head>
  <body>
    <center>
      <h3>Ejercicios con bucle For</h3>
      <h3>Algoritmo que pida un numero y muestre en pantalla el mismo numero en asteriscos</h3>
    <form method="post">
      <label>Ingrese un numero: &nbsp &nbsp</label>
      <input type="number" name="num1" value="">
      <br>
      <br>
      <input type="submit" name="Enviar" value="Consultar">
      <hr>
      <?php
      $num1=$_POST['num1'];

        for ($i=1;$i<=$num1;$i++) {

          echo " * &nbsp     ";}

       ?>
       <hr>
     </form>
   </center>
  </body>
</html>
