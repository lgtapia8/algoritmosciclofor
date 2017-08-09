<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <title>algoritmo 3 </title>
  </head>
  <body>
    <center>
      <h3>Ejercicios con bucle For</h3>
    <h3> algoritmo que pida dos numeros y sume todos los numeros
         <br> que van desde el primero al segundo</h3>
    <form method="post">
      <label>Ingrese un numero: &nbsp &nbsp</label>
      <input type="number" name="num1" value="">
      <br>
      <br>
      <label>Ingrese otro numero: &nbsp</label>
      <input type="number" name="num2" value="">
      <br>
      <br>
      <input type="submit" name="Enviar" value="Consultar">
      <hr>
      <?php
      $num1=$_POST['num1'];
      $num2=$_POST['num2'];
      $suma=0;

        for ($num1=$num1; $num1 <= $num2;$num1++) {

          echo "$num1 &nbsp     ";

             $suma=$suma+$num1;}

                 echo "la suma de todos los numeros son: $suma </br>"
       ?>
       <hr>
     </form>
   </center>
  </body>
</html>
