<?php 

require_once("PersistenciaPadrao.php");
class PersistenciaPessoa extends PersistenciaPadrao {

    protected function trataDadosExclusao(){
        // Chamar o pai e executa
        parent::trataDadosExclusao();

        // executa na classe filho
        // Antes da exclusao
        echo '<br><b>SALVANDO DADOS DO USUARIO QUE ESTA EXCLUINDO...</b>';
    }
}

// $oPersistencia = new PersistenciaPessoa($acaoParametro = "INCLUSAO");
// $oPersistencia = new PersistenciaPessoa($acaoParametro = "ALTERACAO");
$oPersistencia = new PersistenciaPessoa($acaoParametro = "EXCLUSAO");

$oPersistencia->processaDados();

// Destruindo o objeto
unset($oPersistencia);