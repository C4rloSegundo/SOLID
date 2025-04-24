<?php 

namespace AppMensageiro;

use AppMensageiro\IMensagemToken;

class Mensageiro{
    private $canal;

    public function __construct(IMensagemToken $canal){
        $this->setCanal($canal);
        
    }

    public function getCanal(): IMensagemToken{
        return $this->canal;
    }

    public function setCanal(IMensagemToken $canal): void{
        $this->canal = $canal;
    }

    public function enviarToken(): void{

        $this->getCanal()->enviar();


        // $classe = '\AppMensageiro\\' . ucfirst($this->getCanal());
        // echo $classe . '<br>';
        // $obj = new $classe();
        // $obj->enviar();


    }
}