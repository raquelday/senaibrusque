<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Site Institucional do SENAI - Brusque</title>

        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/estilo.css"/>
        <!--java script -->
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>


    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">

        <header class="jumbotron text-center" id="topo">
            <h1>FIESC / SENAI</h1>
            <p>A FORÇA DA INDÚSTRIA CATARINENSE</p>

            <?php include 'formCadastro.php' ?>

        </header>

    </div>
    <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="250">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="#">Senai</a>
            </div>
            <div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="#inicio">Início</a></li>
                        <li><a href="#cursos">Cursos</a></li>
                        <li><a href="#noticias">Notícias</a></li>
                        <li><a href="#fotos">Fotos</a></li>
                        <li><a href="#videos">Vídeos</a></li>
                        <li><a href="#contato">Contato</a></li>
                        <li><a href="#localização">Localização</a></li>


                        <!-- menu drop-down
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#section41">Section 4-1</a></li>
                                <li><a href="#section42">Section 4-2</a></li>
                        
                            </ul>
                        </li>
                        -->
                    </ul>
                </div>
            </div>
        </div>
    </nav>  


    <section id="inicio" class="container-fluid">

        <!-- Carrossel de imagens -->
        <div clas="row">                
            <!--
            Uma linha dividida em 12 colunas, sendo uma coluna central
            tamanho 8 e um distanciamento de 2
            
            Sistema de Grid no Bootstrap
            http://www.w3schools.com/bootstrap/bootstrap_grid_examples.asp
            -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="https://raw.githubusercontent.com/tarcnux/senaibrusque/master/img/saiba_mais_sobre_o_senai.png" alt="Chania">
                    </div>

                    <div class="item">
                        <img src="http://saborbelga.com/wp-content/uploads/2014/05/Senai_Brusque.jpg" alt="Chania">
                    </div>

                    <div class="item">
                        <img src="http://municipiomais.com.br/wp-content/uploads/2014/09/desafio.jpg" alt="Flower">
                    </div>

                    <div class="item">
                        <img src="http://www.cursosgratuitossenai.net/wp-content/uploads/2015/07/Senai-RJ-cursos-2016.jpg" alt="Flower">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </section>    
                <?php include 'cursos.php'; ?>
            
                <?php include 'noticias.php'; ?>
       
        <section id="Fotos" class="container-fluid">
                <h1>Fotos</h1>
                <div class="row">
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="http://cursosgratuitosbrasil.com.br/wp-content/uploads/2015/04/Senai-Joinville-cursos-gratuitos.jpg" height="350" width="350">
                        </a>
                        <a href="#" class="thumbnail">
                            <img src="http://www.cursosgratuitossenai.net/wp-content/uploads/2015/05/Senai-Presidente-Prudente.jpg" height="350" width="350">
                        </a>
                        <a href="#" class="thumbnail">
                            <img src="http://senaicursos.net.br/wp-content/uploads/2015/09/21.png" height="350" width="350">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="http://extra.globo.com/incoming/10229725-e21-a2a/w640h360-PROP/senai-curso-gratuito-distancia.jpg" height="350" width="350">
                        </a>
                        <a href="#" class="thumbnail">
                            <img src="http://senaipronatec.com.br/wp-content/uploads/2014/12/Senai-Bahia.jpg" height="350" width="300">
                        </a>
                        <a href="#" class="thumbnail">
                            <img src="http://extra.globo.com/incoming/11602724-bc9-1a2/w640h360-PROP/Senai-RJ-Pronatec.jpg" height="350" width="300">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="http://senaipronatec.com.br/wp-content/uploads/2015/04/Senai-Duque-de-Caxias-cursos.jpg" height="350" width="300">
                        </a>
                        <a href="#" class="thumbnail">
                            <img src="http://www.cursosgratuitossenai.net/wp-content/uploads/2014/10/Senai-PE-cursos-gratuitos-20151.jpg" height="350" width="300">
                        </a>
                        <a href="#" class="thumbnail">
                            <img src="http://cdn.giro.matanorte.com/2015/05/senai.jpg" height="350" width="300">
                        </a>
                    </div>
                </div>
                <nav>
                    <ul class= "pagination" >
                        <li>
                            <a href= "#" aria-label= "Anterior" >
                                <span aria-hidden= "true" > « </span>
                            </a>
                        </li>
                        <li><a href= "#" > 1 </a></li>
                        <li><a href= "#" > 2 </a></li>
                        <li><a href= "#" > 3 </a></li>
                        <li>
                            <a href= "#" aria-label= "Proxima" >
                                <span aria-hidden= "true" > » </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </section>

            <section id = "videos" class = "container-fluid">
                <div class = "text-center">
                    <h1>Galeria Vídeos</h1>
                    <iframe width = "560" height = "315" src = "https://www.youtube.com/embed/videoseries?list=PLXTxMOByxQKOZcxIvbgx_93ItPjnbqYIk" frameborder = "0" allowfullscreen></iframe>
                </div>
            </section>

            <?php include 'formContato.php';
            ?>

            <section id = "localização" class = "container-fluid">
                <div class = "text-center">
                    <h1>Localização</h1>
                    <iframe src = "https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d5972.578301415663!2d-48.91459628134629!3d-27.11484556231412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x94df47b2050e1221%3A0xb0ebeaaf853b447!2sAv.+Primeiro+de+Maio%2C+670+-+Primeiro+de+Maio%2C+Brusque+-+SC%2C+88353-202!3m2!1d-27.1156975!2d-48.910202!5e0!3m2!1spt-BR!2sbr!4v1447800510027" width = "600" height = "450" frameborder = "0" style = "border:0" allowfullscreen></iframe>
                </div>
            </section>


            <script src="js/meuscript.js"></script>
            <script src="js/jquery-1.11.3.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/validator.js"></script>
            <script src="js/formScript.js"></script>
            <script src="js/cadastroScript.js"></script>
            <script src="js/noticia.js"></script>
            </body>
            </html>
