<?php include('components/header.html') ?>

<!-- Carrossel desativado temporaroiamente

<div id="myCarousel" class="carousel slide" data-ride="carousel" >
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1" class=""></li>
          <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide img-fluid" src="uploads/602216.jpg" height="512px" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Bem vindo ao Uploader!</h1>
                <p>Compartilhe e guarde seus arquivos em nosso servidor hoje mesmo!</p>
                <p><a class="btn btn-lg btn-primary" href="#main" role="button">Fazer Upload</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide img-fluid" src="uploads/602216.jpg" height="512px"  alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="index.php#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide img-fluid" src="uploads/602216.jpg" height="512px" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="index.php#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

-->

      

<!-- Jumbotron Principal 
===================================================================================================================================================-->
<div id="main" class="jumbotron conteudo text-center">

    <h1 class="display-3 text-success">Uploader de arquivos</h1>
    <p class="lead">Essa é uma simples página para fazer upload de arquivos para o servidor que hospeda essa página</p>
    <hr class="my-4">
    <p>       
        Clique no botão escolher arquivo para começar, Verifique se você escolheu o arquivo antes de enviar. caso não, a pagina seguinte
        mostrará um erro. o limite de Upload do servidor é de 1GB. caso envie um arquivo maior que isso, encontrará outro
        erro.
    </p>
    <p class="lead">
        <form enctype="multipart/form-data" method="post" action="upload_handler.php" class="form-group d-inline-block">
            <div id="inputNome" class="input-group">
                <span class="input-group-addon" id="basic-addon1"><span class="fa fa-user"></span></span>
                <input type="text" class="form-control"  placeholder="Digite seu nome" aria-label="Username" id="nome" name="nome" aria-describedby="basic-addon1">
                <span class="input-group-btn" id="setNome"><a class="btn btn-secondary text-light">Confirmar</a></span>
            </div>
            <small id="info" class="form-text text-muted">Precisamos saber quem está mandando os arquivos para nós .</small>
            <hr>
            <div class="border-success">
                <p class="lead">Escolha seus arquivos</p>
                <input class="form-control-file" style="width:100%;" type="file" value="Envia" name="file[]" id="file" multiple="true" required>
                <br>
                <button type="submit" id="upload" class="btn btn-success">
                    <span class="fa fa-upload"></span> Upload para o servidor
                </button>
                <a class="btn btn-primary" href="uploads_list.php">
                    <span class="fa fa-file"></span> Ver arquivos do servidor
                </a>
            </div>
        </form>
    </p>

</div>

<!-- Jumbotron Principal ========================================================================================================================== -->


<!-- 3 cards da página index -->
<div class="container">
    <h1 class="text-center display-4">Nosso site permite que você:</h1>
    <br>
    <div class="card-deck">
    <div class="card border-primary">
        <div class="card-body">
        <h4 class="card-title">Faça uploads</h4>
        <p class="card-text">Compartilhe ou guarde seus arquivos nesse servidor</p>
        <p class="card-text"><small class="text-muted">Inclusive filmes, jogos, músicas, fotos</small></p>
        </div>
    </div>
    <div class="card border-success">
        <div class="card-body">
        <h4 class="card-title">Veja o que compartilharam</h4>
        <p class="card-text">Veja o que foi compartilhado no site, tanto o seu conteúdo como os dos outros.</p>
        <p class="card-text"><small class="text-muted">Conteúdos ilegais serão removidos</small></p>
        </div>
    </div>
    <div class="card border-warning">
        <div class="card-body">
        <h4 class="card-title">Guarde suas informações</h4>
        <p class="card-text">
            <b>Nome:</b> 
            <?php if(isset($_COOKIE['Nome'])){ echo $_COOKIE['Nome'] ;} else{echo 'Desconhecido';} ?>
            <br>
            <b>Endereço IP/Remoto:</b> <?=gethostbyaddr($_SERVER['REMOTE_ADDR']) ?>
        </p>
        <p class="card-text"><small class="text-muted">Guardamos seu nome em um <abbr data-toggle="tooltip" data-placement="bottom" data-php="true" title="Cookies: pequenos arquivos de texto que o seu navegador usa pra guardar dados">'cookie'</abbr></small></p>
        </div>
    </div>
    </div>
<!-- 3 cards da página index -->



    <br>

<!--Accordion Detalhes do servidor -->
    <div id="accordion" role="tablist">
        <div class="card">
            <div class="card-header" role="tab" id="headingOne">
                <h5 class="mb-0">
                    <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <span class="fa fa-server"></span> Informações do servidor:
                    </a>
                </h5>
            </div>

            <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <h4 class="card-title">
                        <?php $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']); echo $hostname;?>
                    </h4>
                    <pre class="card-text"><?php print_r($_SERVER); ?></pre>
                </div>
            </div>
        </div>
<!--Accordion detalhes do servidor-->

    <br>


    
    <?php require('components/modals.php') ?>

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Aviso!</strong> O site está em fase de testes. Alguns bugs podem ser encontrados
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

<?php require('components/footer.php') ?>