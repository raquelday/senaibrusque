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
        <div id="cursos" class="container-fluid">
            <h1>Cursos</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        
        <div id="noticias" class="container-fluid">
            <h1>Notícias</h1>
       
 
        <div class="container">
            <div class="row">
            <div class="col-md-4">
            <h1>Novos Cursos</h1>
            <p> Confira a listagem dos novo cursos para 2016...</p>
            <img src="http://sc.senai.br/sites/default/files/banner_comunidade_1.jpg" alt="senai" style="height:100px;">
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Leia Mais...</button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h1 class="modal-title">Novos Cursos</h1>
                        </div>
                        <div class="modal-body">
                            <p>Os cursos do senai ofertados</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                
            <div class="container">
            <h1>Destaque</h1>
            <p> Estudante do Senai é destaque no SCMC...</p>
            <img src="http://sc.senai.br/sites/default/files/styles/slider_image_focus/public/img_6871.jpg" alt="senai" style="height:100px;">
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Leia Mais...</button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h1 class="modal-title">Aluna Destaque</h1>
                        </div>
                        <div class="modal-body">
                            <p>Florianópolis, 30.11.2015 – A aluna do SENAI em Blumenau Mayara Theiss Laperuta foi, entre 41 concorrentes, a estudante mais citada pelas empresas, que listaram os alunos que se destacaram no SCMC Design Camp, realizado pelo Santa Catarina Moda e Cultura (SCMC). O evento foi encerrado no sábado, 28, em Florianópolis, depois de cinco dias em que estudantes de moda e design de 17 instituições de ensino apresentaram soluções para desafios de 18 companhias da cadeia de moda e design do Estado. Ao todo, 100 projetos foram entregues, em processo de troca de ideias e cocriação. O SENAI, entidade da FIESC, teve 11 estudantes – das cidades de Blumenau, Jaraguá do Sul, Joinville e Criciúma – classificados para o encerramento o SCMC. </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
            
            <div id = "fotos" class = "container-fluid">
            <h1>Fotos</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling!Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling!Try to scroll this section and look at the navigation bar while scrolling!</p>
                      
            </div>

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
     </body>
 </html>
