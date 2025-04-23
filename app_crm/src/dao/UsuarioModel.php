<?php 


namespace AppCrm\dao;

use AppCrm\BD;

use AppCrm\componentes\Log;
use AppCrm\componentes\Notificacao;

use AppCrm\interfaces\ICadastro;
use AppCrm\interfaces\ILog;
use AppCrm\interfaces\INotificacao;

class UsuarioModel  extends BD implements ICadastro, ILog, INotificacao{
    public function salvar(){
        // logica
    }
    public function registrarLog(Log $log){
        // logica
    }
    public function enviarNotificacao(Notificacao $notificacao){
        // logica
    }
    
 
    
}