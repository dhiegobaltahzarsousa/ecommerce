<?php
class Session{
    
    private $nome;
    private $status;
    private $atuacao;
    
    /**
     * @author: Dhiego Balthazar
     */
    private function __construct(){
        $this->nome = NULL;
        $this->status = NULL;
        $this->atuacao = NULL;
    }
    /**
     * @return NULL
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return NULL
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return NULL
     */
    public function getAtuacao()
    {
        return $this->atuacao;
    }

    /**
     * @param NULL $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @param NULL $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @param NULL $atuacao
     */
    public function setAtuacao($atuacao)
    {
        $this->atuacao = $atuacao;
    }    
}