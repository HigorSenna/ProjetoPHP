<?php
namespace ProjetoPHP\DataAcessObject;
include_once ('../ConexaoBanco/ConexaoBanco.php');
include_once ('../Classes/PecaTeatro.php');
use ProjetoPHP\ConexaoBanco\ConexaoBanco;
use ProjetoPHP\Classes\PecaTeatro;

class PecaTeatroDAO
{
    public function excluir($id){
        $db = ConexaoBanco::realizarConexao();
        $sql  ="DELETE FROM pecas WHERE (ID_PECA) = (?)";
        $valor = array($id);
        $stmt = $db->prepare($sql);
        if($stmt ->execute($valor)){
            return true;
        }
        return false;
    }

   public function salvar(PecaTeatro $peca){
       $db = ConexaoBanco::realizarConexao();
       $sql = "INSERT INTO pecas (NM_PECA,DESC_PECA,DT_PECA,HR_PECA,CAMINHO_IMAGEM) values(?,?,?,?,?)";
       $stmt = $db->prepare($sql);

       $valoresObjeto = array($peca->getNome(),$peca->getDescricao(),
           $peca->getData(),$peca->getHora(),$peca->getCaminhoImagem());

       if($stmt->execute($valoresObjeto)){         
           return true;
       }
       return false;
   }

    public function buscarTodasPecas(){
        $db = ConexaoBanco::realizarConexao();

        $sql = "SELECT * FROM pecas";

        $resultados = $db->query($sql);

        return $resultados;
    }
}