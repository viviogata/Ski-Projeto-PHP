<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/produto.css">
    <link rel="stylesheet" href="css/formulario.css">

    <title>Ski</title>
</head>
<body>
<form action="formulario.php" method="get">
  <div class="open">
      <div class="layer"></div>
      <div class="layer"></div>
  </div>
                <div class="header">
                        <h2 class="logo">SKI</h2>
                        <ul>
                            <li>
                                <a href="#inicio">Início</a>
                            </li>
                            <li>
                                <a href="#produtos">Aluguel</a>
                            </li>
                            <li>
                                <a href="#formulario">Fomulário</a>
                            </li>
                        </ul>
                </div>
                    <div class="inicio-area" id="inicio">
                        <div class="bannerText">
                            <h2>Novas aventuras</h2>
                            <h3>Ski te acompanha</h3> 
                        </div>
                            <div class="element1"></div>
                            <div class="element2"></div>   
                    </div>
                    <div class="produto-area" id="produto">
                        <div class="content-wrap">
                            <h1 class="content-title" id="produtos">PRODUTOS</h1>
                            <div class="container content-div">
                                <div class="shop-items">
                                    <div class="shop-item">  
                                        <span class="shop-item-title" value="Óculos">Óculos</span>
                                        <img class="shop-item-image" src="img/produto1.jpg">
                                        <div class="shop-item-details">
                                            <span class="shop-item-price">R$200,00</span>
                                            <span><input type="checkbox" name="item1" value="200">Alugar</span>
                                        </div>
                                    </div>
                                    <div class="shop-item">
                                        <span class="shop-item-title">Pranchas</span>
                                        <img class="shop-item-image" src="img/produto2.jpg">
                                        <div class="shop-item-details">
                                            <span class="shop-item-price">R$1400,00</span>
                                            <span><input type="checkbox" name="item2" value="1400">Alugar</span>
                                        </div>
                                    </div>
                                    <div class="shop-item">
                                        <span class="shop-item-title">Fixação</span>
                                        <img class="shop-item-image" src="img/produto3.jpg">
                                        <div class="shop-item-details">
                                            <span class="shop-item-price">R$350,00</span>
                                            <span><input type="checkbox" name="item3" value="350">Alugar</span>
                                        </div>
                                    </div>
                                    <div class="shop-item">
                                        <span class="shop-item-title">Capacete</span>
                                        <img class="shop-item-image" src="img/produto4.jpg">
                                        <div class="shop-item-details">
                                            <span class="shop-item-price">R$85,00</span>
                                            <span><input type="checkbox" name="item4" value="85">Alugar</span>
                                        </div>
                                    </div>
                                    <div class="shop-item">
                                        <span class="shop-item-title">Roupas</span>
                                        <img class="shop-item-image" src="img/produto5.jpg">
                                        <div class="shop-item-details">
                                            <span class="shop-item-price">R$750,00</span>
                                            <span><input type="checkbox" name="item5" value="750">Alugar</span>
                                        </div>
                                    </div>
                                    <div class="shop-item">
                                        <span class="shop-item-title">Bota</span>
                                        <img class="shop-item-image" src="img/produto6.jpg">
                                        <div class="shop-item-details">
                                            <span class="shop-item-price">R$150,00</span>
                                            <span><input type="checkbox" name="item6" value="150">Alugar</span>
                                        </div>
                                    </div>                
                                </div>
                            </div>  
                    </div>
        <div class="formulario-area" id="area">
        <div class="content-wrap">
        <h1 class="content-title" id="formulario">FORMULÁRIO</h1>
        <div class="container content-div">
            <fieldset class="pass">
              <legend><span class="number">1</span>Dados pessoais</legend>
              <label for="nome">Nome:</label>
              <input type="text" required id="none" name="user_nome">
            </fieldset>
            <fieldset class="pass">
              <legend><span class="number">2</span>Endereço</legend>
                <label for="bairro">Bairro:</label>
                <input type="text" id="none" name="user_bairro">
                <label for="rua">Rua:</label>
                <input type="text" id="none" name="user_rua">
                <label for="num">Número:</label>
                <input type="text" id="none" name="user_num">
            </fieldset>
            <fieldset class="pass">
                <legend><span class="number">3</span>Pagamento</legend>
                <label for="modo">Modo de pagamento:</label>
                        <input type="radio" required id="Dinheiro" value="Dinheiro" name="user_modo"><label for="Dinheiro" class="light">Dinheiro - 15%</label><br>
                        <input type="radio" id="Cartão" value="Cartão" name="user_modo"><label for="Cartão" class="light">Cartão - 5%</label><br>
                        <button type="sumbmit">Finalizar</button> 
                        <button type="reset">Limpar</button>          
                    </fieldset>
                    </div>
              </div>
              <div class="element2"></div>
              <div class="element3"></div>
              <div class="element4"></div>
        </div>
        </form>
    </body>
</html>