<?php

    class Pizza
    {
        private $nome;
        private $preco;
        private $sabor;
        private $tamanho;
        
      public function __construct()
      {
         echo 'A classe "', __CLASS__, '" foi instanciada!<br />';
      }

      public function __destruct()
      {
         echo 'A classe "', __CLASS__, '" foi destruída.<br />';
      }
 
      public function __toString()
      {
         return $this->getNome();
         return $this->getPreco();
         return $this->getSabor();
         return $this->getTamanho();
      }
    
      public function setNome($nome)
      {
          $this->nome = $nome;
      }
      
      public function getNome()
      {
          return " Nome da Pizza: ". $this->nome . "<br />";
      }
      
      public function setPreco($preco)
      {
          $this->preco = $preco;
      }
      
      public function getPreco()
      {
          return " Preço da Pizza: ". $this->preco . "<br />";
      }
      
      public function setSabor($sabor)
      {
          $this->sabor = $sabor; 
      }
      
      public function getSabor()
      {
          return " Sabor da Pizza: ". $this->sabor . "<br />";
      }
      
      public function setTamanho($tamanho)
      {
          $this->tamanho = $tamanho;
      }
      
      public function getTamanho()
      {
          return " Tamanho da Pizza: ". $this->tamanho . "<br />";
      }
    }
    
?>