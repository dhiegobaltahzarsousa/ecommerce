/*
 * @author: Dhiego Balthazar
 * @date: 15/06/2021
 *
*/
<?php
class PessoaCrud extends CI_Model{
    
    /**
     * 
     * @param object Pessoa $pessoa
     */
    public function persist($pessoa){
        $this->db->insert('Pessoa', $pessoa);
    }
    
    
    
}