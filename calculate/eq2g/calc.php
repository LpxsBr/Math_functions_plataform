<?php
$cofa = $_POST["cofa"];
$cofb = $_POST["cofb"];
$cofc = $_POST["cofc"];

$t = $cofa + $cofb + $cofac;
//var_dump($t);
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
echo '<br> <h5>'.'delta = ',$delta.'<h5>';
//teste delta menor que zero
if($delta < 0){
  echo '<div class="erro"><br>'.'não existe no conjunto dos reais'.'</div>';
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
    //saida
  echo '<br> <h5>'.'x1 = ',$x1.'<h5>';
  echo '<br> <h5>'.'x2 = ',$x2.'<h5>';
  }elseif($cofa == 0){
    echo 'indeterminação/divisão por zero encontrada'.'<br>'.'<a href="https://neurochispas.com.br/algebra/fatorar-polinomios-2-grau/#:~:text=A%20fatora%C3%A7%C3%A3o%20de%20polin%C3%B4mios%20de,reverso%20da%20distribui%C3%A7%C3%A3o%20de%20multiplica%C3%A7%C3%A3o.">fatoração<a> necessária';
  }
}}
?>