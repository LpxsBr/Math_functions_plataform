<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calc Eq 2 Grau</title>
</head>
<body>
    <header class="cabecalho">
        <div class="logo">
            <img src="logo.png" alt="logo" class="logoImg">
        </div>
        <div class="menu">
            <li><a href="https://www.instagram.com/lpxsbr/" class="whoiam">Whoiam</a></li>
            <li><a href="https://github.com/LpxsBr" class="others">Others</a></li>
            <li><a href="#" class="Subscribe">Subscribe</a></li>
        </div>
    </header>
    <main class="conteudo">
        <div class="titulo">
            <h3>Calculadora de Equação de 2 Grau</h3>
        </div>
        <div class="explica">
            <p>Lembrando que equações de 2º grau são funções do tipo:</p>
            <h3>ax² + bx - c = 0</h3>
        </div>
        <div class="inputCampo">
            <form action="script" method="post">
                <h><input type="number" name="cofa">x²</h>
                <h><input type="number" name="cofb">x</h>
                <h><input type="number" name="cofc"></h>
                <button class="subbtn">Calcular</button>
                <!--<input type="submit" value="Calcular" class="submtbtn">-->
            </form>
        </div>
        <div class="script">
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
        </div>
    </main>
    <footer class="rodape">
        <div class="rodapecontent">LpxsBr - <?= date('Y')?></div>
    </footer>
    
</body>
</html>
