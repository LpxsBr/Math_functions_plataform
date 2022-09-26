<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/style.css">
    <meta name="adopt-website-id" content="dd2b0e29-db4a-44a3-8dd9-278bfa7759ff" />
    <script src="//tag.goadopt.io/injector.js?website_code=dd2b0e29-db4a-44a3-8dd9-278bfa7759ff" class="adopt-injector"></script>
    <title>Calculadora Eq2g</title>
</head>

<body>
    <header class="cabecalho">
        <div class="logo">
            <img src="/images/logo.png" alt="logo" class="logoImg">
        </div>
        <div class="menu">
            <a href="https://www.instagram.com/lpxsbr/" class="whoiam">Quem eu sou</a>
            <a href="https://github.com/LpxsBr" class="others">Github</a>
            <a href="#" class="Subscribe">Subs</a>
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
            <form action="#" method="post">
                <h><input type="number" name="cofa">x²</h>
                <h><input type="number" name="cofb">x</h>
                <h><input type="number" name="cofc"></h>
                <button class="subbtn">Calcular</button>
            </form>
        </div>
        <div class="script">
            <?php include("calculate/eq2g/calc.php")?>
        </div>
    </main>
    <footer class="rodape">
        <div class="rodapecontent">LpxsBr -
            <?= date('Y')?>
        </div>
    </footer>
</body>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-58ZG4LMYMZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-58ZG4LMYMZ');
</script>
  
</html>