<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <title>algoritmo 6 </title>
  </head>
  <body>
    <center>
      <h3>Ejercicios con bucle For</h3>
      <h3>Algoritmo que muestre la tabla de multiplicar de un numero cualquiera</h3>
    <form method="post">
      <label>Ingrese un numero: &nbsp &nbsp</label>
      <input type="number" name="num1" value="">
      <br>
      <br>
      <input type="submit" name="Enviar" value="Consultar">
      <hr>
      <?php
      $num1=$_POST['num1'];

        for ($i=1;$i<=10;$i++) {

          echo "$num1*$i=".($num1*$i)."</br>";}

       ?>
       <hr>
     </form>
   </center>
  </body>
</html>
