<?php

namespace AppMensageiro;

class Email implements IMensagemToken {
    public function enviar(): void{
        echo 'Email enviado com sucesso! Seu token é 555-123';
    }
}