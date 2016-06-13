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

        $this->salvarPecaNoBanco($db,$peca);
        $idPecaInserir = $this->buscarUltimaPecaInserida($db);
        $this->salvarLugarPeca($db,$idPecaInserir);
        return true;

   }
    private function salvarLugarPeca(\PDO $db,$idPecaInserir){

        $sqlLugar = "INSERT INTO lugares_peca (ID_PECA,QTD) values(?,?)";
        $stmtLugares = $db->prepare($sqlLugar);

        $parametro = array($idPecaInserir,100);

        if($stmtLugares->execute($parametro)){
            return true;
        }
        else{
            die("ERROR Lugar Peca!!");
        }
    }

    private function salvarPecaNoBanco(\PDO $db, PecaTeatro $peca){

        $sql = "INSERT INTO pecas (NM_PECA,DESC_PECA,DT_PECA,HR_PECA,CAMINHO_IMAGEM) values(?,?,?,?,?)";
        $stmt = $db->prepare($sql);

        $valoresObjeto = array($peca->getNome(),$peca->getDescricao(),
            $peca->getData(),$peca->getHora(),$peca->getCaminhoImagem());

        if($stmt->execute($valoresObjeto)){
            return true;
        }
        else{
            die("ERROR Peca banco!!");
        }
    }

    private function buscarUltimaPecaInserida(\PDO $db){
        $ultimaPeca = "SELECT MAX(ID_PECA) FROM pecas";
        $resultado = $db->query($ultimaPeca);
        $elemento = $resultado->fetch();

        $idUltimaPeca = $elemento[0];
        return $idUltimaPeca;
    }

    public function buscarTodasPecas(){
        $db = ConexaoBanco::realizarConexao();

        $sql = "SELECT * FROM pecas";

        $resultados = $db->query($sql);

        return $resultados;
    }
    
    public function buscarPecaPorId($id){
        $db = ConexaoBanco::realizarConexao();

        $sql = "SELECT * FROM pecas WHERE ID_PECA = $id";
               
        $resultado = $db->query($sql);
        
        return $resultado->fetch();
    }
}