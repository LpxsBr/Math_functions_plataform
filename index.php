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
           <?php include("calculate/eq2g/calc.php") ?>
        </div>
    </main>
    
    <footer class="rodape">
        <div class="rodapecontent">LpxsBr - <?= date('Y')?></div>
    </footer>
    
</body>
</html>
