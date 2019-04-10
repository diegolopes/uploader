<?php include('components/config.php'); ?>

<!-- Modais do website -->

<!-- Modal de ajuda -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ajuda</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <h4>Como funciona o site?</h4>
            <p>
            O uploader nada mais é do que um site de compartilhamento de arquivos. Aqui você pode simplesmente
            fazer o upload dos seus arquivos no nosso servidor e ele ficará de livre acesso ao público para download na nossa lista de arquivos.
            Use com sabedoria, pois conteúdos ilegais serão removidos.
            </p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        </div>
        </div>
    </div>
</div>
<!-- Modal de ajuda -->

<!-- Modal de sobre -->
<div class="modal fade" id="modalSobre" tabindex="-1" role="dialog" aria-labelledby="modalSobreLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalSobreLabel">Sobre o site</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body text-center">
            <h4>Uploader <span class="text-muted">&copy 2018</span></h4>
            <p>
                <b>Versão:</b> <?=VERSAO ?> <br>
                <b>Criado por:</b> Diego Lopes <br>
                <b>Equipe de desenvolvimento:</b> Entre em contato e participe da equipe!  <br>
                <h4>Contato:</h4>
                <b><span class="fa fa-envelope text-danger"></span> Diego Lopes:</b> d.lopes.karagua@gmail.com <br>
                <br>
                <p class="text-muted"><span class="fa fa-info-circle"></span> Criado com Bootstrap 4.0.0<br></p>
                <hr>
                <p class="lead text-muted">Navegadores Suportados</p>
                <div class="text-muted text-center row">
                    <div class="col">
                        <span tabindex="0" data-trigger="focus" data-toggle="popover" data-placement="top" title="Chrome para Windows e Android" data-content="Navegador altamente recomendado acima de qualquer outro navegador" class="fa fa-2x fa-chrome"></span><br>Chrome
                    </div>
                    <div class="col">
                        <span tabindex="0" data-trigger="focus" data-toggle="popover" data-placement="top" title="Firefox para Windows e Android" data-content="Navegador compatível com o site" class="fa fa-2x fa-firefox"> </span><br>Firefox
                    </div>
                    <div class="col">
                        <span tabindex="0" data-trigger="focus" data-toggle="popover" data-placement="top" title="Opera para Windows e Android" data-content="Navegador compatível com o site" class="fa fa-2x fa-opera" ></span><br>Opera
                    </div>
                    <div class="col">
                        <span tabindex="0" data-trigger="focus" data-toggle="popover" data-placement="top" title="Safari para Mac e iOS" data-content="Navegador compatível com o site, exceto a versão para Windows" class="fa fa-2x fa-safari"></span><br>Safari
                    </div>
                    <div class="col">
                        <span tabindex="0" data-trigger="focus" data-toggle="popover" data-placement="top" title="Edge para Windows" data-content="Navegador compatível com o site" class="fa fa-2x fa-edge"></span><br>Edge
                    </div>
                </div>
                <br>
                <small class="text-muted">Clique no ícone de um navegador para mais informações</small>

            </p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        </div>
        </div>
    </div>
</div>
<!-- Modal de sobre -->