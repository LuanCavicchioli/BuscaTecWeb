<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/database/DBConexao.php";

    class Usuario{
    
        protected $db;
        protected $table = "usuarios";

        public function __construct() 
        {
            $this->db = DBConexao::getConexao();
        }

        public function cadastrar($dados)
        {
            try{
                $sql = "INSERT INTO {$this->table} (nome,cpf,senha,celular,perfil) VALUES(:nome,:cpf,:senha,:celular,:perfil)";
                $stmt = $this->db->prepare($sql);
            }
        }
    }
?>