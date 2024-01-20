<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="nav">
            <div class="logo">
            <button style="background-color:transparent; border:none;"><a href="../index.html"><img src="../img/roupa.png" width="100px" height="100px"></a></button>
                <h2>Store</h2>
            </div>
            <form action="#" method="post" class="pesquisa">
                <input type="text" placeholder="Pesquisa...">
                <button type="submit"><i class="fa-solid fa-magnifying-glass" style="color: white;"></i></button>
            </form>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Precisa de ajuda? <br>
                    Fale conosco!
                </a>
                <ul class="dropdown-menu">
                    <li><a id="form" class="dropdown-item" style="background-color: black;" href="#">Telefone <br>
                            11 912345660</a></li>
                    <li><a id="form" class="dropdown-item" style="background-color: black;" href="https://wa.me/qr/OZ22CN3SRPXSC1">WhatsApp <br>
                            11 983554380</a></li>

                </ul>
            </li>

            <i style="margin-left: 50px; margin-right: 20px;"><img src="../img/do-utilizador (1).png" width="30px" height="30px"></i>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Acessar <br>
                    Minha conta
                </a>
                <ul class="dropdown-menu">
                    <li><a id="form" class="dropdown-item" style="background-color: black;" href="#">Meus
                            pedidos</a></li>

                    <li><a id="form" class="dropdown-item" style="background-color: black;" href="">Minha conta
                            <br></a></li>

                    <button class="count">Entre/cadastre-se</button>
                </ul>
            </li>
            <button class="coracao"><i><img src="../img/coracao.png" height="30px" style="margin-right: 50px;"></i></button>
            <button class="cesta"><i><img src="../img/cesta-de-compras.png" height="30px"></i></button>



        </div>


        <div class="boots">
            <ul class="primeiro">
                <li><a href="#">Novidades</a></li>
                <li><a href="#">Mais vendidos</a></li>
            </ul>
            <ul>
                <li class="nav-item-dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Roupas
                    </a>
                    <ul class="dropdown-menu">
                        <li><a id="form" class="dropdown-item" style="background-color: black;" href="#">Moletom</a>
                        </li>
                        <hr>
                        <li><a id="form" class="dropdown-item" style="background-color: black;" href="#">Calça</a></li>
                        <hr>
                        <li><a id="form" class="dropdown-item" style="background-color: black;" href="#">Shorts</a></li>
                        <hr>
                        <li><a id="form" class="dropdown-item" style="background-color: black;" href="#">Saias</a></li>
                        <hr>
                        <li><a id="form" class="dropdown-item" style="background-color: black;" href="#">Patalonas</a>
                        </li>
                        <hr>
                        <li><a id="form" class="dropdown-item" style="background-color:black" href="#">T-shirts</a></li>
                        <hr>
                    </ul>
            </ul>
            <ul class="segundo">
                <li><a href="#">Primavera</a></li>
                <li><a href="#">Black Week 2024</a></li>
            </ul>
        </div>
    </header>
    <main>
        <div class="cards">
            <div class="card-one">
                <i><img src="../img/entrega-rapida.png" width="35px" height="35px"></i>
                <p>Frete Gratis <br>
                    A partir de R$299,90</p>
            </div>
            <div class="card-two">
                <i><img src="../img/pagamento.png" width="35px" height="35px"></i>
                <p>Parcele em até<br>
                    06x sem juros no cartão</p>
            </div>
            <div class="card-three">
                <i><img src="../img/qr-digitalizar.png" width="35px" height="35px"></i>
                <p>Ganhe 5% de desconto<br>
                    pagando com PIX</p>
            </div>
            <div class="card-four">
                <i><img src="../img/bolsa-de-compras.png" width="35px" height="35px"></i>
                <p>Compra 100% segura<br>
                    com criptografia SSL</p>
            </div>
        </div>
        <body>
        
                <div class="login-box">
                    <form method="post" action="process.php">
                        <h2>Login</h2>

                        <div class="input-box">
                            <span style="margin-left: 150px;" class="icon"><i class="fa-regular fa-envelope fa-lg"></i></span>
                            <input type="text" name="email" aria-describedby="emailHelp" required>
                            <label for="exampleInputEmail1" class="form-label">Digite seu E-mail ou CPF:</label>
                            <div id="emailHelp" class="form-text"></div>

                        </div>


                        <div class="input-box">
                            <span class="icon"><i class="fa-solid fa-lock"></i></span>
                            <input type="password" name="senha" required>
                            <label class="form-label">Senha :</label>
                        </div>
                        <br>



                        <button type="submit" value="Entrar">Entrar</button>
                        <div class="register-links">
                            <p><a href="email.php">Esqueceu sua senha?</a></p>
                            <p>Não Possui uma conta? <a href="../cadastrar/cadastro.php">Cadastrar!</a></p>
                            <a href="index.html"> voltar</a>
                        </div>
                    </form>
                </div>
            <script src="https://kit.fontawesome.com/5d1f9dd1e5.js" crossorigin="anonymous"></script>

        <div class="clientes">
            <span>Avaliações de nossos clientes</span>
        </div>
        <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="false">

            <div class="carousel-inner">
                <div style="margin-left: 80px;" class="carousel-item active">
                    <div class="card-group">
                        <div class="card"
                            style="width:180px; margin-right: 100px; height: 300px;  border-radius: 10px; background-color:rgb(244, 236, 236);">
                            <div class="card-body">
                                <h5 class="card-title">Atendimento ótimo</h5>
                                <img src="../img/avaliacao.png" width="80px" height="70px">
                                <p class="card-text">
                                    Ótima loja. Tive uma transação tranquila, Tudo correu certo. <br>E o produto ainda
                                    estava com ótimo preço
                                </p>
                                <p class="card-text"><small class="text-muted">Rodrigo Caetano</small></p>
                            </div>
                        </div>
                        <div class="card"
                            style="width:180px; margin-right: 80px; height: 300px; border-radius: 10px; background-color:rgb(244, 236, 236);">
                            <div class="card-body">
                                <h5 class="card-title">Gostar é pouco, ADOREI!!</h5>
                                <img src="../img/avaliacao.png" width="80px" height="70px">
                                <p class="card-text" style="margin-bottom: 50px;">
                                    Loja com atendimento muito bom, processo de entrega rápido
                                    .</p>
                                <p style="margin-top: 60px;" class="card-text"><small class="text-muted">Rosane
                                        Melo</small></p>
                            </div>
                        </div>
                        <div class="card"
                            style="width:180px; margin-right: 80px; height: 300px;  border-radius: 10px; background-color:rgb(244, 236, 236);">
                            <div class="card-body">
                                <h5 class="card-title">SAC muito bom</h5>
                                <img src="../img/avaliacao.png" width="80px" height="70px">
                                <p class="card-text">
                                    Na primeira compra houve um problema com relação ao produto comprado e o entregue
                                    que foi resolvido com muita maestria
                                    .</p>
                                <p class="card-text"><small class="text-muted">Amanda Souza</small></p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="card-group">
                        <div class="card"
                            style="width:180px; margin-right: 80px; height: 300px; border-radius: 10px;  background-color:rgb(244, 236, 236);">
                            <div class="card-body">
                                <h5 class="card-title">Adorei os produtos.</h5>
                                <img src="../img/avaliacao.png" width="80px" height="70px">
                                <p class="card-text">
                                    Perfuma completamente o carro, não é enjoativo e não faz bagunça alguma.
                                </p>
                                <p style="margin-top: 40px;" class="card-text"><small class="text-muted">Gustavo
                                        Peixoto</small></p>
                            </div>
                        </div>
                        <div class="card"
                            style="width:180px; margin-right: 80px; height: 300px;  border-radius: 10px; background-color:rgb(244, 236, 236);">
                            <div class="card-body">
                                <h5 class="card-title">PRODUTO SENSACIONAL</h5>
                                <img src="../img/avaliacao.png" width="80px" height="70px">
                                <p class="card-text">
                                    Vela super cheirosa, alta qualidade, durabilidade excelente! Sou encantada com os
                                    produtos dessa loja!</p>
                                <p class="card-text"><small class="text-muted">Adriane Melo</small></p>
                            </div>
                        </div>
                        <div class="card"
                            style="width:180px; margin-right: 80px; height: 300px; border-radius: 10px; background-color:rgb(244, 236, 236);">
                            <div class="card-body">
                                <h5 class="card-title">Atendimento bom</h5>
                                <img src="../img/avaliacao.png" width="80px" height="70px">
                                <p class="card-text">
                                    Produto com ótimo custo benecifio, e entrega bem rápida
                                    .</p>
                                <p style="margin-top: 60px;" class="card-text"><small class="text-muted">Abel
                                        Ferreira</small></p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <button style="margin-right: 100px;" class="carousel-control-prev" type="button"
                data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button style="margin-left: 300px;" class="carousel-control-next" type="button"
                data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </main>
    <footer>
        <div class="msg">
            <div class="email">
                <p style="margin-top: 15px;">Receba nossas ofertas por E-mail</p>
            </div>
            <div class="formulario">
                <form action="#" method="post" class="digite">
                    <input type="text" placeholder="Digite seu email">
                </form>
                <button
                    style="color: aliceblue;height: 50px; margin-top: 5px; background-color: black; border-radius: 10px;"
                    type="submit">Receber</button>
            </div>
        </div>
        <hr>
        <div class="rodape">
            <div class="categorias">
                <span style="margin-left: 30px;">Categorias</span>
                <ul>
                    <li><a href="#">Novidades</a></li>
                    <li><a href="#">Mais vendidos</a></li>
                    <li><a href="#">Roupas</a></li>
                    <li><a href="#">Primavera</a></li>
                    <li><a href="#">BlackWeek #2023</a></li>
                </ul>
            </div>
            <div class="conteudo">
                <span style="margin-left: 30px;">Conteúdo</span>
                <ul>
                    <li><a href="#">fale conosco</a></li>
                    <li><a href="#">Quem somos</a></li>
                    <li><a href="#">Meios de pagamento e de frete</a></li>
                    <li><a href="#">Política de troca e devoluções</a></li>
                    <li><a href="#">Garantia</a></li>
                </ul>
            </div>
            <div class="Sobre">
                <span style="margin-top: 25px;">Sobre Nós</span>

                    <center><p style="font-size: 17px; margin-top: 15px;">Seja bem-vindo à nossa loja! 💙 Tenha certeza de que aqui você terá uma excelente experiência de
                        compra. Nossos produtos são selecionados entre os melhores fornecedores do mercado e nosso preço
                        ahhhhh super competitivo.<br>
                         Dica: Nós enviamos descontos para quem se cadastra em nossa
                        newsletter. Nosso foco é que seu pedido chegue em perfeito estado até sua casa, nossa atenção e
                        cuidado com cada etapa é nossa garantia de qualidade.</p></center>

                
            </div>
        </div>
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />

</html>