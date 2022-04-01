<html>
  <head>
    <title>LpxsBr - Eq 2º Grau</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>CALCULADORA EQUAÇÃO DE SEGUNDO GRAU</h1>
    <form action="script" method="post">
      <h>coeficiente a</h>
      <input type="get" name="cofa"><br>
      <h>coeficiente b</h>
      <input type="get" name="cofb"><br>
      <h>coeficiente c</h>
      <input type="get" name="cofc"><br><br>
      <input type="submit" value="resolver">
      
        <div class="script">
          
    <?php
$cofa = $_POST["cofa"];
$cofb = $_POST["cofb"];
$cofc = $_POST["cofc"];

$t = $cofa + $cofb + $cofac;
var_dump($t);
if($t == 0 or $t == null && $t == $cofa && $cofa == $cofb && $cofb == $cofc
){
  echo 'sem valores inseridos'.'<br>'.'adicione algum valor';
}else{
//delta
$expo = $cofb*$cofb;
/*
echo var_dump($expo);
echo var_dump($cofa);
echo var_dump($cofb);
echo var_dump($cofc);
*/
$delta = $expo - 4*($cofa * $cofc);
echo '<br>'.'delta = ',$delta;
//teste delta menor que zero
if($delta < 0){
  echo '<br>'.'não existe no conjunto dos reais';
}else{
  /*tratar a divisão por zero - indeterminação - PENDENTE*/
  $rdelta = sqrt($delta);
  $div = (2*$cofa);
  if($div != 0){
  //echo 'indeterminação';
  //fatorar
  //x1 e x2
  $x1 = (-$cofb+$rdelta)/($div);
  $x2 = (-$cofb-$rdelta)/($div);
  }else{
    echo 'indeterminação encontrada'.'<br>'.'deseja fatorar e refazer?';
  }}
  //saida
  echo '<br>'.'x1 = ',$x1;
  echo '<br>'.'x2 = ',$x2;
}
?> 
      </div>
  <footer>
    <br>
    <a href="https://www.instagram.com/lpxsbr/" target="_blank">dev by LpxsBr</a>
    <br>
   </footer>
  </body>
</html>