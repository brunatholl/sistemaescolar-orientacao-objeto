<?php 

class PersistenciaPadrao extends Persistencia {
    
    private $acao;

    public function __construct($acaoParametro){
        $this->acao = $acaoParametro;
        // CONEXAO COM BANCO DE DADOS
    }

    public function processaDados(){
        switch($this->acao){
            case AcoesSistema::INCLUSAO:
                $this->inclui();
                break;
            case "ALTERACAO":
                $this->altera();
                break;
            case "EXCLUSAO":
                $this->exclui();
                break;                                    
        }
    }

    private function inclui(){
        $this->trataDadosInclusao();
        echo "<br>INCLUINDO NO BANCO DE DADOS";
    }
    
    private function altera(){
        $this->trataDadosAlteracao();
        echo "<br>ALTERANDO NO BANCO DE DADOS";
    }
    
    private function exclui(){
        $this->trataDadosExclusao();
        echo "<br>EXCLUINDO NO BANCO DE DADOS";
    }
    
    protected function trataDadosInclusao(){
        echo "<br>TRATANDO DADOS ANTES DA INCLUSAO NO BANCO DE DADOS";
    }
    
    protected function trataDadosExclusao(){
        echo "<br>TRATANDO DADOS ANTES DA EXCLUSAO NO BANCO DE DADOS";
    }
    
    protected function trataDadosAlteracao(){
        echo "<br>TRATANDO DADOS ANTES DA ALTERACAO NO BANCO DE DADOS";
    }

    public function __destruct(){
        echo '<br><br>Salvando log de aceso ao sistema...';
        // DESCONECTAR DO BANCO DE DADOS

        Utils::enviaMensagem("Minha Mensagem");
    }
}