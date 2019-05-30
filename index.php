<?php ?>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link href="css/epicbooks.css" rel="stylesheet" type="text/css"/>
        <title>Main Page</title>

    </head>
    <body>

        <div class="container-fluid">
            <div class="container" style="margin-top: 1rem">
                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <img src="imatges/llibre.jpg" alt="Logo Llibreria" width="100" height="100">
                        <h3>EpicBooks</h3>
                    </div>
                    <div class="col-6" style="margin-top: 2rem">
                        <form id="buscador" action="" autocomplete="on" method="post" onsubmit="return validaBuscar();">
                            <div class="input-group mb-3">
                                <input type="search" id="searchbar" name="searchbar" class="form-control" placeholder="Busca por autor, título, temática, palabra clave..." aria-label="Recipient's username" aria-describedby="button-addon2">                               
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Buscar</button>       
                                </div>
                            </div>
                            <small id="searchHelp" class="form-text text-danger"></small>
                        </form>

                    </div>
                    <div class="col-3" style="margin-top: 2rem">
                        <a href="registre.html" class="btn btn-info">Regístrate</a>
                        <a href="#myModal" class="btn btn-secondary" data-toggle="modal" data-target="#myModal">Indentifícate</a>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <ul>
                            <li><a class="active" href="#books">Libros</a></li>
                            <li><a href="#news">Ebooks</a></li>
                            <li><a href="#offers">Ofertas</a></li>
                            <li><a href="#releases">Novedades</a></li>
                            <li><a href="#recommended">Recomendados</a></li>
                            <li><a href="#bestsellers">Más vendidos</a></li>
                            <li><a href="#contact">Contacto</a></li>

                        </ul>
                    </div>
                </div>
                <div class="row" style="height: 500px">
                    <div class="col-12">
                        <div id="demo" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                <li data-target="#demo" data-slide-to="1"></li>
                                <li data-target="#demo" data-slide-to="2"></li>
                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="imatges/fira.jpg" alt="Fira" width="800" height="300">
                                </div>
                                <div class="carousel-item">
                                    <img src="imatges/adaptive-images.jpg" alt="Chicago" width="800" height="300">
                                </div>
                                <div class="carousel-item">
                                    <img src="imatges/cervera.jpg" alt="Cervera" width="800" height="300">
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row mt-5" style="height: 300px">
                    <div class="col-12">
                        <div class="responsive">
                            <div><img src="imatges/algundia.jpg" alt=""/></div>
                            <div><img src="imatges/biblia.jpg" alt=""/></div>
                            <div><img src="imatges/doscaras.jpg" alt=""/></div>
                            <div><img src="imatges/largopetalo.jpg" alt=""/></div>
                            <div><img src="imatges/recuerdos.jpg" alt=""/></div> 
                            <div><img src="imatges/hablarmas.jpg" alt=""/></div>
                            <div><img src="imatges/alasfuego.jpg" alt=""/></div>
                            <div><img src="imatges/diosesegipcios.jpg" alt=""/></div>
                            <div><img src="imatges/toystory.jpg" alt=""/></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <p class="footer">Email: <a href="mailto:epicbooks@gmail.com">epicbooks@gmail.com</a><span style="margin-left: 3rem">Telefono: 93 2984567</span> </p>
        </footer>

        <div id="myModal" class="modal fade" tabindex="-1"
             role="dialog" aria-labelledby="titolModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="titolModal" class="modal-title">Indentifícate</h4>
                    </div>
                    <form id="formulari" action="" autocomplete="off" method="post" onsubmit="return validaForm();">
                    <div class="modal-body"> 
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Introducir email">
                            <small id="emailHelp" class="form-text text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" aria-describedby="passwHelp" placeholder="Introducir contraseña">
                            <small id="passwHelp" class="form-text text-danger"></small>
                        </div>  
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Aceptar</button>
                    </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="jquery-validation-1.19.0/dist/jquery.validate.min.js" type="text/javascript"></script>
        <script src="js/epicbooks.js" type="text/javascript"></script>
    </body>
</html>