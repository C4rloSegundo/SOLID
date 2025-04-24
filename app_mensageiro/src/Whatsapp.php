<?php

namespace AppMensageiro;

class Whatsapp implements IMensagemToken{
    public function enviar(): void{
        echo 'Whatsapp enviado com sucesso! Seu token é 123-123';
    }
}