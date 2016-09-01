<?php
class Application_Model_Vo_Prato {
        private $idprato;
        private $idcategoria;
        private $nome;
        private $preco;
        
        function getIdprato(){
            return $this->idprato;
        }        
        function getIdcategoria(){
            return $this->idcategoria;
        }        
        function getNome(){
            return $this->nome;
        }        
        function getPreco(){
            return $this->preco;
        }        
        function setIdprato($idprato){
            $this->idprato = $idprato;
        }        
        function setIdcategoria($idcategoria){
            $this->idcategoria = $idcategoria;
        }        
        function setNome($nome){
            $this->nome = $nome;
        }        
        function setPreco($preco){
            $this->preco = $preco;
        }
    }
