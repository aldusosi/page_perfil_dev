<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Alex Dev</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Precisa de uma página web? confira o trabalho do desenvolvedor Alexsandro Duarte, dev front-and, back-end, com páginas profissionais que atendem as suas demandas">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php PATH; ?>styles/font-awesome.min.css">
        <link rel="stylesheet" href="<?php PATH; ?>styles/all.css">
        <link rel="stylesheet" href="<?php PATH; ?>styles/header.css">
        <link rel="stylesheet" href="<?php PATH; ?>styles/apresentacao.css">
        <link rel="stylesheet" href="<?php PATH; ?>styles/sobre.css">
        <link rel="stylesheet" href="<?php PATH; ?>styles/tools.css">
        <link rel="stylesheet" href="<?php PATH; ?>styles/beneficios.css">
        <link rel="stylesheet" href="<?php PATH; ?>styles/promessas.css">
        <link rel="stylesheet" href="<?php PATH; ?>styles/footer.css">
        <link rel="stylesheet" href="<?php PATH; ?>styles/contatos.css">
    </head>
    <body>
        <?php 
            $url = isset($_GET['url']) ? $_GET['url'] : 'home';

            switch ($url) {
                case 'sobre':
                    echo '<target target="sobre"/>';
                    break;
            }
        ?>
        <header>
            <div class="center">
                <div class="logotipo w50 left">
                    <span><a href="<?php PATH?>home">Alexsandro D.</a></span>
                    <span><a href="<?php PATH?>home">Silva</a></span>
                </div>
                
                <nav class="nav-desktop right w50">
                    <ul>
                        <li><a href="">Projetos</a></li>
                        <li><a href="<?php PATH?>sobre">Sobre</a></li>
                        <li><a href="<?php PATH?>contatos">Contatos</a></li>
                    </ul>
                </nav>
                <nav class="nav-mobile right">
                    <div class="botao-menu-mobile">
                        <i class="fa fa-bars"></i>
                    </div>
                    <ul>
                        <li><a href="">Projetos</a></li>
                        <li><a href="<?php PATH?>sobre">Sobre</a></li>
                        <li><a href="<?php PATH?>contatos">Contatos</a></li>
                    </ul>
                    <div class="clear"></div>
                </nav>
                <div class="clear"></div>
            </div>
        </header><!--Header-->

        <?php
            $url = isset($_GET['url']) ? $_GET['url'] : 'home';

            if(file_exists("pages/$url.php"))
            {
                require_once("pages/$url.php");
            }
            else
            {
                if($url != 'sobre')
                {
                    require_once("pages/error404.php");
                    $error = true;                  
                }
                else
                {
                    require_once('pages/home.php');
                }

            }
        ?>

        <footer <?php if(isset($error) && $error) echo 'style="position:fixed; bottom:0; width:100%;"';?>
            <div >
                <div class="head-footer">
                    <div class="logotipo"><h1><a href="">Alexsandro D. Silva</a></h1></div>
                    <div class="redes-sociais">
                        <p>Redes-sociais</p>
                        <div class="icons-container">
                           <div class="image-redes"> <a href=""><i class="fa fa-instagram"  aria-hidden="true"></i></a> 
                           </div>
                            <div class="image-redes"> <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a> </div>
                            <div class="image-redes"> <a href=""><i class="fa fa-github" aria-hidden="true"></i></a> </div> 
                        </div>
                        
                    </div>
                    <div class="nav-footer-container">
                        <nav class="nav-footer">
                            <ul>
                                <li><a href="">Projetos</a></li>
                                <li><a href="">Sobre</a></li>
                                <li><a href="">Contatos</a></li>
                                <li><a href="">Serviços</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                
                <div class="footer-bottom">
                    <p>Todos os direitos reservados - 2024</p>
                </div>
            </div>


        </footer>

        <script src="<?php PATH; ?>scripts/jquery.js"></script>
        <script src="<?php PATH; ?>scripts/menu-mobile.js"></script>
        <script src="<?php PATH; ?>scripts/auto_scroll.js"></script>

    </body>
</html>