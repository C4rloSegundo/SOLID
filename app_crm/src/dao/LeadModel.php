<?php 


namespace AppCrm\dao;

use AppCrm\BD;

use AppCrm\componentes\Notificacao;

use AppCrm\interfaces\ICadastro;

use AppCrm\interfaces\INotificacao;

class LeadModel extends BD implements ICadastro, INotificacao {
    public function salvar(){
        // logica
    }
  
    public function enviarNotificacao(Notificacao $notificacao){
        // logica
    }
}