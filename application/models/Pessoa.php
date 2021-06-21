<?php
/**
 * 
 * @author dhiego balthazar
 * @date: 06/17/2021
 *
 */
class Pessoa{
    private $idPessoa;
    private $nome;
    private $email;
    private $senha;
    private $enderecos;
    private $telefones;
    /**
     * @return int
     */
    public function getIdPessoa()
    {
        return $this->idPessoa;
    }

    /**
     * @return String
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return String
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return String
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @return array<Endereco>
     */
    public function getEnderecos()
    {
        return $this->enderecos;
    }

    /**
     * @return array<Telefone>
     */
    public function getTelefones()
    {
        return $this->telefones;
    }

    /**
     * @param int $idPessoa
     */
    public function setIdPessoa($idPessoa)
    {
        $this->idPessoa = $idPessoa;
    }

    /**
     * @params string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @param mixed $endereços
     */
    public function setEndereços($enderecos)
    {
        foreach ($enderecos as $value) {
            array_push($this->$enderecos, $value);
        }
    }

    /**
     * @param mixed $telefones
     */
    public function setTelefones($telefones)
    {
        foreach ($telefones as $value) {
            array_push($this->telefones, $value);
        }
    }

    
    
}