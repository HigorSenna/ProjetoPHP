<?php
if(isset ($_GET['$id'])){
    $id = $_GET['id'];
}

echo'
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
     aria-hidden="true" xmlns="http://www.w3.org/1999/html" style="margin:100px auto;">

        <div class="col-md-3 col-md-offset-4" ">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title" id="texto"><strong>Deseja realmente excluir a peça?</strong></h2>
                </div>

                <div class="panel-body">
                    <div class="form-group">
                        <a href="/Transacoes/transacoesPecasTeatro/excluirPecaTeatro.php?$id = $id"/>SIM</a>
                        <a href=""/>NAO</a>
                    </div>
                </div>
            </div>
        </div>
</div>
';