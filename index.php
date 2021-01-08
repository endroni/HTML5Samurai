<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML5-Shinobi</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="./css/all.css">

    <!--Favicon -->
    <link rel="icon" type="img/favicon.jpg" href="./imgs/favicon.jpg">

    <!-- Link CSS Pessoal -->
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/style-responsivo.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!--[if lt IE 9]> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <![endif]-->

</head>
<body>
    <header class="header bg-black">
       <div class="container">
            <h1 class="oculto">HTML5-Shinobi</h1>

            <img src="./imgs/learnCool.png" alt="logo cursos" title="HTML5-Shinobi" class="logo">

            <nav>
                <h1 class="oculto">Mais sobre HTML</h1>
                <ul class="menu">
                    <li>
                        <a href="home">Início</a>
                    </li>
                    <li>
                        <a href="audios">Audio</a>
                    </li>
                    <li>
                        <a href="videos">Vídeo</a>
                    </li>
                    <li>
                        <a href="formulario">Formulário</a>
                    </li>
                    <li>
                        <a href="sobre">Sobre</a>
                    </li>
                </ul>
            </nav>

            <a href="#" class="btn-saiba-mais">Saiba mais</a>
       </div>
    </header> <!-- Finaliza o header -->

    <div class="clear"></div>

    <!-- Conteúdo dinâmico -->
    <?php

        if( isset($_GET['prm']) ){
            // Uma camada de segurança para evitar php injection - Quando alguém cria um php ao não encontrar a página
            if ( file_exists("./pags/{$_GET['prm']}.php") )
                include("./pags/{$_GET['prm']}.php");
            else
                include('./pags/404.php');
        }else{
            include('./pags/home.php');
        }
    ?>
    <!-- Fim redirecionamento dinâmico PHP -->

    <footer class="footer color-white">
        <h1 class="oculto">Detalhes sobre o Curso Web Developer</h1>

            <div class="container padding-20">
                <div class="row">
                    
                <article class="col-md-4">
                    <h1 class="titulo-footer">Learn Cool</h1>                    
                        <nav>
                            <h1 class="oculto">Mais sobre HTML</h1>
                            <ul class="menu-footer">
                                <li>
                                    <a href="#">Início</a>
                                </li>
                                <li>
                                    <a href="#">Audio</a>
                                </li>
                                <li>
                                    <a href="#">Vídeo</a>
                                </li>
                                <li>
                                    <a href="#">Formulário</a>
                                </li>
                                <li>
                                    <a href="#">Sobre</a>
                                </li>
                            </ul>
                        </nav>                    
                </article>

              <article class="col-md-4">
                    <h1 class="titulo-footer">Empresa</h1>                    
                        <nav>
                            <h1 class="oculto">Mais sobre a Empresa</h1>
                            <ul class="menu-footer">
                                <li>
                                    <a href="#">O professor</a>
                                </li>
                                <li>
                                    <a href="#">Contato</a>
                                </li>
                            </ul>
                        </nav>                    
                </article> 

              <article class="col-md-4">
                    <h1 class="titulo-footer">Social</h1>                    
                    <ul class="redes-sociais">
                        <li>
                            <a href="#" target="_blank">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="fab fa-google-plus-square"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="fab fa-twitter-square"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </article> 

                </div>
            </div>     
    </footer> <!-- Finalizado Footer -->

    <div class="copyrigth">
        <p class="copyrigth">
            Copyright &COPY; Todos os direitos reservados <?=date('Y')?> - Rubem Cândido
        </p>
    </div>



    <!-- JQuery, Bootstrap --> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>