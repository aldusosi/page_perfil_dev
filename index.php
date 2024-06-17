<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Alex Dev</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Precisa de uma página web? confira o trabalho do desenvolvedor Alexsandro Duarte, dev front-and, back-end, com páginas profissionais que atendem as suas demandas">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./styles/font-awesome.min.css">
        <link rel="stylesheet" href="./styles/all.css">
        <link rel="stylesheet" href="./styles/header.css">
        <link rel="stylesheet" href="./styles/apresentacao.css">
        <link rel="stylesheet" href="./styles/sobre.css">
        <link rel="stylesheet" href="./styles/tools.css">
    </head>
    <body>

        <header>
            <div class="center">
                <div class="logotipo w50 left">
                    <span><a href="">Alexsandro D.</a></span>
                    <span><a href="">Silva</a></span>
                </div>
                
                <nav class="nav-desktop right w50">
                    <ul>
                        <li><a href="">Projetos</a></li>
                        <li><a href="">Sobre</a></li>
                        <li><a href="">Contatos</a></li>
                        <li><a href="">Serviços</a></li>
                    </ul>
                </nav>
                <nav class="nav-mobile">
                    <ul>
                        <li><a href="">Projetos</a></li>
                        <li><a href="">Sobre</a></li>
                        <li><a href="">Contatos</a></li>
                        <li><a href="">Serviços</a></li>
                    </ul>
                </nav>
                <div class="clear"></div>
            </div>
        </header><!--Header-->

        <section class="apresentacao center">
            <div class="bem-vindo w50 left">
                <div>
                    <div class="mapa-habilidades">
                        <p >Front-end | Back-end</p>
                    </div>
                    
                    <h1>Ola, sou o Alex!</h1>
                    <div class="txt-bem-vindo">
                        <p >Bem vindo ao meu espaço tecnológico. Esta página é dedicada ao meu trabalho e experiências profissionais</p>  
                    </div>
                </div>
                <div class="buttom-contato">
                    <div>
                        <a href="">Contato</a>
                    </div>
                </div>
            </div>
            
            <div class="image-apresentacao w50 left">
                <img src="./images/image-apresentacao.png" alt="imagen-apresentacao">
            </div>
            <div class="clear"></div>
        </section><!--Apresentacao-->

        <section class="sobre center">
            <h2>Sobre Mim</h2>
            <div class="sobre-text w50 left">
                <p>Sou Alexsandro Duarte. Formado em Jogos Digitais, sempre fui apaixonado por tecnologia, busco estar sempre atualizado tanto as questões relacionadas ao desenvovimento web quanto aos. Acredito que essa busca acaba facilitando no entendimento de novos conteúdos pois me leva a locais amplos de aprendizado. Qualidade no que faço é uma busca constante pois é ela quem indica o meu grau de conhecimento.</p>
            </div>
            <div class="sobre-foto w50 right">
                <img src="./images/Alex.jpg" alt="">
                <h4>Alexsandro Duarte</h4>
                <p>Desenvolvedor</p>
            </div>
            <div class="clear"></div>
        </section><!--Sobre-->

        <section class="tools center">
            <div><h2>Tools</h2></div>
            <div class="tools-card center">   
                <div class="front-end-tools">
                    <div><h3>Front-end</h3></div>
                    <div class="tools-container">
                        <div class="tool-card">
                            <div class="tool-image"><i class="fa fa-html5" aria-hidden="true"></i></div>
                            <p>Html</p>
                        </div>
                        <div class="tool-card">
                            <div class="tool-image"><i class="fa fa-css3" aria-hidden="true"></i></div>
                            <p>CSS</p>
                        </div>
                        <div class="tool-card">
                            <div class="tool-image"><i class="fa fa-file-o" aria-hidden="true"></i></div>
                            <p>JS</p>
                        </div>
                        <div class="tool-card">
                            <div class="tool-image"><i class="fa fa-address-card-o" aria-hidden="true"></i></div>
                            <p>Bootstrap</p>
                        </div>
                        <div class="tool-card">
                            <div class="tool-image"><i class="fa fa-code" aria-hidden="true"></i></div>
                            <p>React</p>
                        </div>
                    </div>
                </div><!--Front-end Tools-->

                <div class="back-end-tools">
                    <div><h3>Back-end</h3></div>
                    <div class="tools-container">
                        <div class="tool-card">
                            <div class="tool-image"><i class="fa fa-code" aria-hidden="true"></i></div>
                            <p>PHP</p>
                        </div>
                        <div class="tool-card">
                            <div class="tool-image"><i class="fa fa-database" aria-hidden="true"></i></div>
                            <p>MySql</p>
                        </div>
                        <div class="tool-card">
                            <div class="tool-image"><i class="fa fa-terminal" aria-hidden="true"></i></div>
                            <p>Node</p>
                        </div>
                    </div>
                </div><!--Front-end Tools-->

                <div class="geral-tools">
                    <div><h3>Outros</h3></div>
                    <div class="tools-container">
                        <div class="tool-card">
                            <div class="tool-image"><i class="fa fa-git" aria-hidden="true"></i></div>
                            <p>Git</p>
                        </div>
                        <div class="tool-card">
                            <div class="tool-image"><i class="fa fa-github" aria-hidden="true"></i></div>
                            <p>Github</p>
                        </div>
                    </div>
                </div><!--Front-end Tools-->
            </div>
        </section><!--Tools-->

        <section class="seus-beneficios center">
            <h2>Seus Benefícios</h2>
            <div class="beneficios-container">
                <div class="beneficio-card w33">
                    <div class="beneficio-circle">
                        <div class="image-icon"></div>
                    </div>
                    <p>Mais tempo pra focar no seu projeto</p>
                </div>
                <div class="beneficio-card w33">
                    <div class="beneficio-circle">
                        <div class="image-icon"></div>
                    </div>
                    <p>Atraia clientes com algo de qualidade</p>
                </div>
                <div class="beneficio-card w33">
                    <div class="beneficio-circle">
                        <div class="image-icon"></div>
                    </div>
                    <p>Mostre suas idéias de forma organizada</p>
                </div>
                <div class="beneficio-card w33">
                    <div class="beneficio-circle">
                        <div class="image-icon"></div>
                    </div>
                    <p>Aumente seu público com o alcance da internet</p>
                </div>
                <div class="beneficio-card w33">
                    <div class="beneficio-circle">
                        <div class="image-icon"></div>
                    </div>
                    <p>Seu lindo web site trabalhando 24hrs por dia</p>
                </div>
                <div class="beneficio-card w33">
                    <div class="beneficio-circle">
                        <div class="image-icon"></div>
                    </div>
                    <p>Você no controle de forma simples</p>
                </div>
            </div>
        </section><!--Seus Beneficios-->

        <section class="Promessas-cliente center">
            <h2>Promessas para futuros clientes</h2>
            <div class="paginas-qualidade w50">
                <h3>Páginas de qualidade</h3>
                <p>Seu site terá a qualidade que seu  projeto ou empresa precisam, tanto em questões relacionadas a aparência como desempenho.</p>
            </div>
            <div class="saude-comunicacao w50">
                <h3>Páginas de qualidade</h3>
                <p>Seu site terá a qualidade que seu  projeto ou empresa precisam, tanto em questões relacionadas a aparência como desempenho.</p>
            </div>
        </section><!--Promessas-cliente-->

        <footer>
            <div class="center">
                <div class="logotipo"><h1><a href="">Alexsandro D. Silva</a></h1></div>
                <div class="redes-sociais">
                    <p>Redes-sociais</p>
                    <div class="image-redes">image</div>
                    <div class="image-redes">image</div>
                    <div class="image-redes">image</div>
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
                <div class="center">
                    <p>Todos os direitos reservados - 2024</p>
                </div>
            </div>


        </footer>
    </body>
</html>