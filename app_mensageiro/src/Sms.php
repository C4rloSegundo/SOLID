<?php

namespace AppMensageiro;

class Sms implements IMensagemToken{
    public function enviar(): void{
        echo 'SMS enviado com sucesso! Seu token é 123-555';
    }
}