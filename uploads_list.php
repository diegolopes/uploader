<?php
    #opcache_reset();
    include('components/header.html');
	date_default_timezone_set("America/Sao_Paulo");
	
?>  


    <div class="jumbotron jumbotron-fluid" >
        <div class="container">
        <div class="media row text-center">
        <span style="font-size:150px; " class="mr-3 fa fa-5x fa-share-alt col-lg-4 " ></span>
        <div class="media-body col-lg-8">
          <h1 class="mt-0 display-4 text-truncate">Arquivos compartilhados</h1>
          <p class="lead">Veja todos os arquivos compartilhados pelos usuários para o servidor.</p>
        </div>
        </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card bg-light">
            <div class="card-header">
                <h4><span class="fa fa-file-archive-o"></span>  Lista de Arquivos</h4>
            </div>
            <div class="card-body">
                <a class="btn-link" href="http://localhost/Uploader/Uploads/">Acessar via índice do apache</a><br><br>

                <?php

                    if ($handle = opendir('uploads')) {
                        // Varrer diretório
                        while (false !== ($file = readdir($handle))) {
                            if($file == '.' || $file == '..'){
                                continue;
                            }
                            
                            echo "<a href=Uploads/".rawurlencode("$file")." > $file </a> <br>";
                            
                            $filename = $file;
                          
                            echo "modificado em: " . date ("F d Y H:i:s.", fileatime("uploads/$filename"));
                            echo "<hr>";
                            
                        }

                        closedir($handle);
                    }
                ?> 

            </div>
        </div>

        <h1 class="display-4"></h1>
            <div class="card" id="commentsAjax" onload="" style="">
                <div class="card-body">
                    <h4 class="card-title">Comentários</h4>
                    <h6 class="card-subtitle mb-2 text-muted">De todos os usuários</h6>
                    <p class="card-text">
                        <div id="comments"></div>

					</p>
					<!-- <a href="uploads_list.php#comments" id="atualizar" class="card-link"> <span class="fa fa-refresh"></span> Atualizar</a> -->
                </div>
            </div>
            <br>
            <div class="card border-primary">
                <div class="card-header">
                    <span class="fa fa-pencil"></span> Escrever comentário
                </div>
                <div class="card-body">
                <form method="post" onsubmit="return false">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nome</label>
                  <input type="name	" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" placeholder="Digite seu nome..." required >
                  <small class="form-text text-muted">Favor, não usar nomes com caracteres estranhos.</small>
                </div>
                <div class="form-group">
                  <label>Comentário</label>
                  <textarea placeholder="Digite aqui seu comentário..." class="form-control" name="comment" id="comment" required>
                  </textarea>
                  <small class="form-text text-muted">Limitado a 250 caracteres por comentário.</small>
                </div>
              </form>
              <br>
              <button class="btn btn-primary text-light" id="ajax"><span class="fa fa-send"></span> Enviar</button>

                </div>
            </div>

    </div> <!-- Container-->

    

    <br><br>

    <?php include('components/modals.php'); ?>
    <?php include('components/footer.php'); ?>
    <!-- <script type="text/javascript">
	    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
    </script> -->
    </body>
</html>